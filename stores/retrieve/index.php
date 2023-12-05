<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Details</title>
    <link rel="stylesheet" href="style.css">
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

        <table id="shopTable">
            <tr>
                <th>ID</th>
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
            </tr>

            <?php
            // Fetch data from the database and display in the table
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM Shop";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td><img src='../upload" . $row["shop_logo_image"] . "' alt='Logo' style='width:50px;height:50px;'></td>";
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
                            <a href='delete_shop.php?id=" . $row["id"] . "' onclick='return confirm(\"Are you sure you want to delete this shop?\")'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            }

            $conn->close();
            ?>
        </table>
    </div>

    <script>
        function searchFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("shopTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2]; // Index 2 corresponds to Shop Name column
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
            let input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("categoryFilter");
            filter = input.value.toUpperCase();
            table = document.getElementById("shopTable");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3]; // Index 3 corresponds to Category column
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
