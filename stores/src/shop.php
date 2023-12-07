<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "stores"; 

        $conn = new mysqli($servername, $username, $password, $dbname);


// Get the shop ID from the URL or any other source
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $shopId = $_GET['id'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch shop name based on the specified ID
    $sql = "SELECT shop_name FROM Shop WHERE id = $shopId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $shopName = $row["shop_name"];

        // Set the webpage title dynamically
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<link rel='icon' href='../assets/img/imaaralogo.png'>";//set the page icon
        echo "<title>The Imaara | $shopName</title>"; // Set the title dynamically
        echo "<link rel='stylesheet' href='./css/shop.css'>"; // Include your CSS file
        echo "</head>";
        echo "<body>";

        // Rest of your HTML content goes here

        echo "</body>";
        echo "</html>";
    } else {
        echo "Shop not found.";
    }

} else {
    echo "Invalid shop ID.";
}
?>

    <?php include './includes/header.php'; ?>

    <div class="container">
        

        <?php
        // Check if the shop ID parameter is set in the URL
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];

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

    <?php include './includes/footer.php'; ?>

</body>
</html>
