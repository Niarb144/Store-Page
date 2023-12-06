<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Information</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body>

    <div class="container">
        <h2>Shop Information</h2>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "stores";

        // Check if the shop ID parameter is set in the URL
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

            // Fetch data from the database based on the shop ID
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM Shop WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='shop-info'>";
                    echo "<h3>" . $row["shop_name"] . "</h3>";
                    echo "<img src='" . $row["shop_logo_image"] . "' alt='Shop Logo'>";
                    echo "<p><strong>Category:</strong> " . $row["shop_category"] . "</p>";
                    echo "<p><strong>Description:</strong> " . $row["shop_description"] . "</p>";
                    echo "<p><strong>Motto:</strong> " . $row["shop_motto"] . "</p>";
                    // Add other fields as needed
                    echo "</div>";
                }
            } else {
                echo "Shop not found.";
            }

            $conn->close();
        } else {
            echo "Invalid request.";
        }
        ?>

    </div>

</body>
</html>
