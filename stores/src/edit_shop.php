<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Shop Details</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>

    <div class="container">
        <h2>Edit Shop Details</h2>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "stores";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Handle form submission and update the database
            $id = $_POST["id"];
            $shop_name = $_POST["shop_name"];
            $shop_logo_image = $_POST["shop_logo_image"];
            $shop_category = $_POST["shop_category"];
            $shop_description = $_POST["shop_description"];
            $shop_motto = $_POST["shop_motto"];
            $opening_hours = $_POST["opening_hours"];
            $closing_hours = $_POST["closing_hours"];
            $shop_location = $_POST["shop_location"];
            $shop_mobile_number = $_POST["shop_mobile_number"];
            $shop_email = $_POST["shop_email"];
            $shop_facebook_link = $_POST["shop_facebook_link"];
            $shop_instagram_link = $_POST["shop_instagram_link"];
            $shop_youtube_link = $_POST["shop_youtube_link"];
            $shop_twitter_link = $_POST["shop_twitter_link"];
            $shop_website_link = $_POST["shop_website_link"];

             // Upload Shop Logo Image
            $target_dir = "media/";
            $logo_image_name = basename($_FILES["shop_logo_image"]["name"]);
            $target_logo_image = $target_dir . $logo_image_name;
            move_uploaded_file($_FILES["shop_logo_image"]["tmp_name"], $target_logo_image);

            $sql = "UPDATE Shop SET
                    shop_name = '$shop_name',
                    shop_logo_image = '$target_logo_image',
                    shop_category = '$shop_category',
                    shop_description = '$shop_description',
                    shop_motto = '$shop_motto',
                    opening_hours = '$opening_hours',
                    closing_hours = '$closing_hours',
                    shop_location = '$shop_location',
                    shop_mobile_number = '$shop_mobile_number',
                    shop_email = '$shop_email',
                    shop_facebook_link = '$shop_facebook_link',
                    shop_instagram_link = '$shop_instagram_link',
                    shop_youtube_link = '$shop_youtube_link',
                    shop_twitter_link = '$shop_twitter_link',
                    shop_website_link = '$shop_website_link'
                    WHERE id = $id";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Shop updated successfully');
                    window.location.href = 'retrieve.php';
                </script>";
            } else {
                echo "<script>alert('Error Updating Shop Details');
                window.location.href = 'retrieve.php';
            </script>";
            }
        }

        // Fetch existing data for the selected shop
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM Shop WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <label for="shop_name">Shop Name:</label>
                    <input type="text" name="shop_name" value="<?php echo $row["shop_name"]; ?>">

                    <label for="shop_logo_image">Shop Logo:</label>
                    <input type="file" name="shop_logo_image" accept="image/*">

                    <label for="shop_category">Shop Category:</label>
                    <input type="text" name="shop_category" value="<?php echo $row["shop_category"]; ?>">

                    <label for="shop_description">Shop Description:</label>
                    <textarea name="shop_description" value="<?php echo $row["shop_description"]; ?>"></textarea>

                    <label for="shop_motto">Shop Motto:</label>
                    <input type="text" name="shop_motto" value="<?php echo $row["shop_motto"]; ?>">

                    <label for="shop_images">Shop Images:</label>
                    <input type="file" name="shop_images[]" accept="image/*" value="<?php echo $row["shop_images"]; ?>">

                    <label for="opening_hours">Opening Hours:</label>
                    <input type="time" name="opening_hours" value="<?php echo $row["opening_hours"]; ?>">

                    <label for="closing_hours">Closing Hours:</label>
                    <input type="time" name="closing_hours" value="<?php echo $row["closing_hours"]; ?>">

                    <label for="shop_category">Shop Category:</label>
                    <input type="text" name="shop_category" value="<?php echo $row["shop_category"]; ?>">

                    <label for="floors">Choose Location:</label>
                    <select name="floors" id="floors">
                        <option value="Basement">Basement</option>
                        <option value="Ground Floor">Ground Floor</option>
                        <option value="First Floor">First Floor</option>
                        <option value="Second Floor">Second Floor</option>
                        <option value="Third Floor">Third Floor</option>
                    </select>

                    <label for="shop_mobile_number">Shop Mobile Number:</label>
                    <input type="tel" name="shop_mobile_number" pattern="[0-9]{10,15}" value="<?php echo $row["shop_mobile_number"]; ?>">                    

                    <label for="shop_email">Shop Email:</label>
                    <input type="text" name="shop_email" value="<?php echo $row["shop_email"]; ?>">

                    <label for="shop_facebook_link">Facebook Link:</label>
                    <input type="text" name="shop_facebook_link" value="<?php echo $row["shop_facebook_link"]; ?>">

                    <label for="shop_instagram_link">Instagram Link:</label>
                    <input type="text" name="shop_instagram_link" value="<?php echo $row["shop_instagram_link"]; ?>">

                    <label for="shop_twitter_link">Twitter Link:</label>
                    <input type="text" name="shop_twitter_link" value="<?php echo $row["shop_twitter_link"]; ?>">

                    <label for="shop_website_link">Facebook Link:</label>
                    <input type="text" name="shop_website_link" value="<?php echo $row["shop_website_link"]; ?>">

                    <!-- Add other form fields for the shop details here -->

                    <input type="submit" value="Update Shop Details">
                </form>
                <?php
            } else {
                echo "Shop not found.";
            }
        } else {
            echo "Invalid request.";
        }

        $conn->close();
        ?>

    </div>

</body>
</html>
