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
    $shop_name = $_POST["shop_name"];

    // Check if a shop with the same name already exists
    $check_sql = "SELECT id FROM Shop WHERE shop_name = '$shop_name'";
    $result = $conn->query($check_sql);

    if ($result->num_rows > 0) {
        echo "<script> alert('Shop name already exists');
            window.location.href = 'index.html';</script>";
        exit();
    }

    $shop_category = $_POST["shop_category"];
    $shop_description = $_POST["shop_description"];
    $shop_motto = $_POST["shop_motto"];
    $opening_hours = $_POST["opening_hours"];
    $closing_hours = $_POST["closing_hours"];
    $shop_location = $_POST["floors"];
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

    // Upload Shop Images
    $target_images = [];
    foreach ($_FILES["shop_images"]["name"] as $key => $image_name) {
        $target_image = $target_dir . basename($image_name);
        move_uploaded_file($_FILES["shop_images"]["tmp_name"][$key], $target_image);
        $target_images[] = $target_image;
    }

    // Insert data into the table
    $sql = "INSERT INTO Shop (
        shop_name,
        shop_logo_image,
        shop_category,
        shop_description,
        shop_motto,
        shop_images,
        opening_hours,
        closing_hours,
        shop_location,
        shop_mobile_number,
        shop_email,
        shop_facebook_link,
        shop_instagram_link,
        shop_youtube_link,
        shop_twitter_link,
        shop_website_link
    ) VALUES (
        '$shop_name',
        '$target_logo_image',
        '$shop_category',
        '$shop_description',
        '$shop_motto',
        '" . implode(",", $target_images) . "',
        '$opening_hours',
        '$closing_hours',
        '$shop_location',
        '$shop_mobile_number',
        '$shop_email',
        '$shop_facebook_link',
        '$shop_instagram_link',
        '$shop_youtube_link',
        '$shop_twitter_link',
        '$shop_website_link'
    )";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        alert('Shop Added Successfully');
        window.location.href = 'index.html';</script>";
    } else {
        echo "<script>
            alert('Could not add shop. Make sure all compulsory boxes are filled and that there are no apostrophes in the naming then try again');
            window.location.href = 'index.html';
        </script>";
    }
}

$conn->close();
?>
