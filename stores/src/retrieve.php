<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Details</title>
    <link rel="stylesheet" href="./css/retrieve.css">
</head>
<body>

    <div class="container">
        <h2>Shop Details</h2>

        <div class="search-filter">
            <input type="text" id="searchInput" onkeyup="searchFunction()" placeholder="Search for shops...">
            <label for="categoryFilter">Filter by Category:</label>
            <select id="categoryFilter" onchange="filterFunction()">
                <option value="all">All Categories</option>
                <!-- Add options dynamically from the database -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "stores";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT DISTINCT shop_category FROM Shop";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["shop_category"] . "'>" . $row["shop_category"] . "</option>";
                    }
                }

                $conn->close();
                ?>
            </select>
        </div>

        <?php
        $itemsPerPage = 100; // Number of items per page

        // Get current page number from URL, default to 1
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        // Calculate the offset for the query
        $offset = ($currentPage - 1) * $itemsPerPage;

        // Fetch data from the database with pagination
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Shop LIMIT $offset, $itemsPerPage";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table id='shopTable'>
                    <tr>
                        
                        <th>Logo</th>
                        <th>Shop Name</th>
                        <th>Category</th>
                        <th>Opening Hours</th>
                        <th>Closing Hours</th>
                        <th>Location</th>
                        <th>Mobile Number</th>
                        <th>Email</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>YouTube</th>
                        <th>Twitter</th>
                        <th>Website</th>
                        <th>Action</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                
                echo "<td> <img src='" . $row["shop_logo_image"] . "' alt = 'Logo' style='width:50px;height:50px;'/></td>";
                echo "<td>" . $row["shop_name"] . "</td>";
                echo "<td>" . $row["shop_category"] . "</td>";
                echo "<td>" . $row["opening_hours"] . "</td>";
                echo "<td>" . $row["closing_hours"] . "</td>";
                echo "<td>" . $row["shop_location"] . "</td>";
                echo "<td>" . $row["shop_mobile_number"] . "</td>";
                echo "<td>" . $row["shop_email"] . "</td>";
                echo "<td>" . $row["shop_facebook_link"] . "</td>";
                echo "<td>" . $row["shop_instagram_link"] . "</td>";
                echo "<td>" . $row["shop_youtube_link"] . "</td>";
                echo "<td>" . $row["shop_twitter_link"] . "</td>";
                echo "<td>" . $row["shop_website_link"] . "</td>";
                echo "<td>
                        <a href='edit_shop.php?id=" . $row["id"] . "'>Edit</a>
                        <a href='delete_shop.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to remove this shop? This action cannot be undone\")'>Delete</a>
                        <a href='shop.php?id=" . $row["id"] . "'>View</a>
                      </td>";
                echo "</tr>";
            }

            echo "</table>";

            // Pagination
            $sql = "SELECT COUNT(id) AS total FROM Shop";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $totalItems = $row['total'];
            $totalPages = ceil($totalItems / $itemsPerPage);

            echo "<div class='pagination'>";
            for ($i = 1; $i <= $totalPages; $i++) {
                echo "<a href='retrieve.php?page=$i'>$i</a>";
            }
            echo "</div>";
        } else {
            echo "
            <iframe src='https://giphy.com/embed/xUStFKHmuFPYk' width='480' height='275' frameBorder='0' class='giphy-embed' allowFullScreen></iframe><p><a href='https://giphy.com/gifs/giphyqa-xUStFKHmuFPYk'></a></p>
            No results found.";
        }

        $conn->close();
        ?>

    </div>

    <script>
        function searchFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("shopTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1]; // Index 1 corresponds to Shop Name column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

        function filterFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("categoryFilter");
            filter = input.value.toUpperCase();
            table = document.getElementById("shopTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2]; // Index 2 corresponds to Category column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (filter === "ALL" || txtValue.toUpperCase() === filter) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>

</body>
</html>
