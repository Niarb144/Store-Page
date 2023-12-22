<?php
    include './includes/db.php';


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
        echo "<link rel='stylesheet' href='./css/shop.css'>"; // CSS
        echo "<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>";
        echo "</head>";
    } else {
        echo "Shop not found.";
    }

} else {
    echo "Invalid shop ID.";
}
?>
    <body>
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
                    $shopName = $row['shop_name'];
                    $shopImages = explode(',', $row['shop_images']);
                    $firstImage = trim($shopImages[0]); // Get the first image

                    echo "<div class='logo'><img src='" . $row["shop_logo_image"] . "' alt='Shop Logo'></div>";
            
                    echo "<div class='shop-container'>";

                    // Check if shop has multiple images for carousel display
                    if (count($shopImages) > 1) {
                        echo "<div class='carousel'>";
                        foreach ($shopImages as $image) {
                            echo "<img src='$image' alt='$shopName Image'>";
                        }
                        echo "</div>";
                        //add the same details as below
                    } else {
                        // Display single image to the left and other shop info to the right
                        echo "<div class='single-image'>";
                        echo "<img src='$firstImage' alt='$shopName'>";
                        echo "</div>";
                        echo "<div class='shop-info'>";
                        echo "<div class='shop-info-items'>";
                        echo "<h2>Who We Are</h2>";
                        echo "<p>" . $row['shop_description'] . "</p>";
                        echo "<div class='hours'>
                               <p>Opens : " . $row["opening_hours"] . "</p>
                               <p>Close : " . $row["closing_hours"] . "</p>
                              </div>";
                        
                        if ($row["shop_website_link"] > 0){
                            echo "<div class='shop_website'>";
                             echo "<a href='" . $row["shop_website_link"] . "' target='blank'><i class='bx bx-link'></i>Visit Site</a>";
                            echo "</div>";
                         }

                         //contacts 
                         if ($row["shop_mobile_number"] > 0){
                             echo "<h3>Mobile Number : " . $row["shop_mobile_number"] . "</h3>";
                         }
                         if ($row["shop_email"] > 0){
                             echo "<h3>Email: " . $row["shop_email"] . "</h3>";
                         }

                         //social media links
                         echo "<div class='social-media-links'>";
                         if ($row["shop_instagram_link"] > 0){
                             echo "<a href='" . $row["shop_instagram_link"] . "' target='blank'><i class='bx bxl-instagram bx-md'></i></a>";
                         }
                         if ($row["shop_facebook_link"] > 0){
                             echo "<a href='" . $row["shop_facebook_link"] . "' target='blank'><i class='bx bxl-facebook-square bx-md' ></i></a>";
                         }
                         if ($row["shop_twitter_link"] > 0){
                             echo "<a href='" . $row["shop_twitter_link"] . "' target='blank'><i class='bx bxl-twitter bx-md' ></i></a>";
                         }
                         if ($row["shop_youtube_link"] > 0){
                             echo "<a href='" . $row["shop_youtube_link"] . "' target='blank'><i class='bx bxl-youtube bx-md' ></i></a>";
                         }
                         echo "</div>";

                         //location
                        echo "<div class='location'>
                                <a href='https://theimaara.co.ke/map'><i class='bx bxs-map' ></i>" . $row["shop_location"] . "</a>
                            </div>";

                        echo "</div>";
                        echo "</div>";
                    }
            
                    echo "</div>";
                }
            } else {
                echo "No shops found.";
            }
            
            // Close connection
            $conn->close();
                    // $firstImage = trim($shopImages[0]); // Get the first image

            //         echo "<div class='shop-info' style='background-image: url(\"media/$shopImages\");'>";
            //         echo "<h3>" . $row["shop_name"] . "</h3>";
            //         echo "<div class='logo'><img src='" . $row["shop_logo_image"] . "' alt='Shop Logo'></div>";
            //         echo "<p>" . $row["shop_description"] . "</p>";
            //         if ($row["shop_website_link"] > 0){
            //             echo "<a href='" . $row["shop_website_link"] . "' target='blank'>Visit Site</a>";
            //         }

            //         echo "<div class='hours'>
            //                 <p>Opens : " . $row["opening_hours"] . "</p>
            //                 <p>Close : " . $row["closing_hours"] . "</p>
            //             </div>";

            //         echo "<div class='location'>
            //                 <a href='https://theimaara.co.ke/map'>" . $row["shop_location"] . "</a>
            //             </div>";
                    
            //         if ($row["shop_mobile_number"] > 0){
            //             echo "<h3>Mobile Number : " . $row["shop_mobile_number"] . "</h3>";
            //         }

            //         if ($row["shop_email"] > 0){
            //             echo "<h3>Email: " . $row["shop_email"] . "</h3>";
            //         }

            //         if ($row["shop_instagram_link"] > 0){
            //             echo "<a href='" . $row["shop_instagram_link"] . "' target='blank'>Instagram</a>";
            //         }

            //         if ($row["shop_facebook_link"] > 0){
            //             echo "<a href='" . $row["shop_facebook_link"] . "' target='blank'>Facebook</a>";
            //         }

            //         if ($row["shop_twitter_link"] > 0){
            //             echo "<a href='" . $row["shop_twitter_link"] . "' target='blank'>Twitter</a>";
            //         }

            //         if ($row["shop_youtube_link"] > 0){
            //             echo "<a href='" . $row["shop_youtube_link"] . "' target='blank'>Youtube</a>";
            //         }

            //         // echo "<div class = 'img-slide'>
            //         //         <img src = '" .$row["shop_images"] . "' alt='Shop Image'>
            //         //       </div>";
            //         echo "</div>";
                    
            //     }
            // } else {
            //     echo "Shop not found.";
            // }

            // $conn->close();
        } else {
            echo "Invalid request.";
        }
        ?>

    </div>

    <?php include './includes/footer.php'; ?>

</body>
</html>
