<!DOCTYPE html>
<html lang="en">

<head>
    <title>chiefHub</title>
    <link rel="shortcut icon" type="x-icon" href="../icons/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/Recipe-detail.css">
</head>

<body>
    <div class="header">
        <a href="../index.html" class="logo">chiefHub</a>
        <div class="header-right">
            <a class="active" href="../index.html">Home</a>
            <a href="add.php">Add Recipe</a>
            <a href="#">Trending</a>
            <a href="../contact_us.html">Contact Us</a>
        </div>
    </div>

    <!-- hero section -->
    <?php

    require_once('database.php');
    echo '<main class="page">';
    echo '<div class="recipe-page">';
    echo '<section class="recipe-hero">';
    // Check if the recipe ID parameter is set in the URL
    if (isset($_GET['recipe_id'])) {
        $recipeId = $_GET['recipe_id'];

        try {
            $query = "SELECT * FROM receipe_information WHERE recipe_id = :recipe_id";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(':recipe_id', $recipeId, PDO::PARAM_INT);
            $stmt->execute();

            if ($row = $stmt->fetch()) {
                // Display the detailed information of the recipe
                echo '<img src="' . $row['Image'] . '" alt="' . $row['ReceipeName'] . '" class="img recipe-hero-img">';
                echo '<article class="recipe-info">';
                echo    '<h2>' . $row['ReceipeName'] . '</h2>';
                echo       '<p>' . $row['Description'] . '</p>';
                echo ' </article> ';
                echo '</section>';

                //  content
                echo ' <section class="recipe-content">';
                echo '<article>';
                echo '<h4>instructions</h4>';
                echo '<p>' . $row['Steps'] . '</p>';
                echo '</article>';
                echo '</section>';
                echo '</div>';
                echo '</main>';
            } else {
                echo 'Recipe not found.';
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo 'Recipe ID not provided.';
    }
    ?>
    <!-- Footer section -->
    <div class="ft1">
        <div class="about-section">
            <h2>ABOUT US</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam laudantium non reprehenderit nihil, illum hic. Repellendus, magni harum maxime repudiandae illo numquam et dolore quo obcaecati esse in labore inventore?</p>
        </div>
        <div class="follow-us">
            <h2>Follow us</h2>
            <div class="icons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href="">
                    <i class="fa-brands fa-square-x-twitter"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-pinterest"></i>
                </a>
            </div>
        </div>
</body>

</html>
