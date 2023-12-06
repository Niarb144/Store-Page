<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Gallery</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <div class="container">
        <h2>Shop Gallery</h2>

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
            <label for="floorSelector">Select Floor:</label>
            <select id="floorSelector" onchange="filterFunction()">
                <option value="all">All Floors</option>
                <!-- Add options dynamically from the database -->
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT DISTINCT shop_location FROM Shop";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["shop_location"] . "'>" . $row["shop_location"] . "</option>";
                    }
                }

                $conn->close();
                ?>
            </select>
        </div>

        <?php
        $itemsPerPage = 12; // Number of items per page

        // Get current page number from URL, default to 1
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        // Calculate the offset for the query
        $offset = ($currentPage - 1) * $itemsPerPage;

        // Fetch data from the database with pagination and floor/category filter
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Shop LIMIT $offset, $itemsPerPage";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<div class='gallery'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='shop-card'> <a href = './src/shop.php?id=" . $row["id"] . "'>" . $row["shop_name"] . "</a></div>";
            }
            echo "</div>";

            // Pagination
            $sql = "SELECT COUNT(id) AS total FROM Shop";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $totalItems = $row['total'];
            $totalPages = ceil($totalItems / $itemsPerPage);

            echo "<div class='pagination'>";
            for ($i = 1; $i <= $totalPages; $i++) {
                echo "<a href='index.php?page=$i'>$i</a>";
            }
            echo "</div>";
        } else {
            echo "No results found.";
        }

        $conn->close();
        ?>

    </div>

    <script>
        function searchFunction() {
            var input, filter, gallery, cards, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            gallery = document.getElementsByClassName("gallery")[0];
            cards = gallery.getElementsByClassName("shop-card");

            for (i = 0; i < cards.length; i++) {
                txtValue = cards[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }

        function filterFunction() {
            var categoryFilter, floorSelector, gallery, cards, i, category, floor;
            categoryFilter = document.getElementById("categoryFilter");
            floorSelector = document.getElementById("floorSelector");
            gallery = document.getElementsByClassName("gallery")[0];
            cards = gallery.getElementsByClassName("shop-card");
            category = categoryFilter.value.toUpperCase();
            floor = floorSelector.value.toUpperCase();

            for (i = 0; i < cards.length; i++) {
                const cardCategory = cards[i].getAttribute("data-category").toUpperCase();
                const cardFloor = cards[i].getAttribute("data-floor").toUpperCase();

                if ((category === "ALL" || cardCategory === category) &&
                    (floor === "ALL" || cardFloor === floor)) {
                    cards[i].style.display = "";
                } else {
                    cards[i].style.display = "none";
                }
            }
        }
    </script>

</body>
</html>
