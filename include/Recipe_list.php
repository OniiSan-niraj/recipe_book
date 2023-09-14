<!DOCTYPE html>
<html lang="en">

<head>
    <title>chiefHub</title>
    <link rel="shortcut icon" type="x-icon" href="../icons/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/Recipe_list.css">
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

    <main id="Recepe_list_Main">
        <div class="Main-list-section">
            <h1 id="Recipe-list-h1">Choose your recipe</h1>
            <div class="recipes-category">
                <button class="cta-button category-btn" onclick="filterObjects(this,'vegetarian')">vegetarian</button>
                <button class="cta-button category-btn" onclick="filterObjects(this,'Beverage')">Beverage</button>
                <button class="cta-button category-btn" onclick="filterObjects(this,'Non-vegetarian')">Non-vegetarian</button>
                <button class="cta-button category-btn" onclick="filterObjects(this,'Most Famous')">Most Famous</button>
                <button class="cta-button category-btn" onclick="filterObjects(this,'Sweets')">Sweets</button>
                <button class="cta-button category-btn" onclick="filterObjects(this,'vegan')">vegan</button>
            </div>
            <div class="container">
                <div class="box-container">
                    <?php
                    require_once('database.php');

                    try {
                        $query = "SELECT DISTINCT recipe_id,ReceipeName, Description ,Image, ReceipeCategory FROM receipe_information";
                        $stmt = $pdo->query($query);

                        while ($row = $stmt->fetch()) {
                            echo '<div class="box" data-categories="' . $row['ReceipeCategory'] . '">';
                            echo '<div class="image">';
                            echo '<img src="' . $row['Image'] . '" alt="' . $row['ReceipeName'] . '">';
                            echo '</div>';
                            echo '<div class="content">';
                            echo '<h3>' . $row['ReceipeName'] . '</h3>';
                            echo '<p> ' . $row['Description'] . '</p>';
                            echo '<a href="Recipe_detail.php?recipe_id=' . $row['recipe_id'] . '" class="btn">Read More</a>';
                            echo '&nbsp';
                            echo '<a href="#" onclick="confirmDelete(' . $row['recipe_id'] . ')" class="btn">Delete</a>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                    ?>
                </div>
                <div id="load-more" onclick="showMoreItems()">Load More</div>
            </div>
        </div>
    </main>

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
    </div>
    <script src="../js/load-more.js"></script>
    <script src="../js/categories-filter.js"></script>
    <script>
        function confirmDelete(recipeId) {
            if (confirm('Are you sure you want to delete this recipe?')) {
                // If the user confirms, redirect to delete_recipe.php
                window.location.href = 'delete_recipe.php?recipe_id=' + recipeId;
            }
        }
    </script>
</body>

</html>
