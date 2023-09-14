<!DOCTYPE html>
<html lang="en">

<head>
    <title>ChiefHub</title>
    <link rel="shortcut icon" type="x-icon" href="../icons/logo.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/add.css">
</head>

<body>
    <div class="header">
        <a href="../index.html" class="logo">ChiefHub</a>
        <div class="header-right">
            <a class="active" href="../index.html">Home</a>
            <a href="add.php">Add Recipe</a>
            <a href="#">Trending</a>
            <a href="../contact_us.html">Contact Us</a>
        </div>
    </div>
    <div class="Main">
        <form method="post" action="check.php" enctype="multipart/form-data">
            <div id="ReceipeName" class="upload">
                <input type="text" name="ReceipeName" placeholder="Enter your Receipe Name">
            </div>
            <div id="ReceipeImage" class="upload">
                <input type="file" name="Image">
            </div>
            <div id="ReceipeDescription" class="upload">
                <textarea name="Description" cols="40" rows="10" placeholder="Enter little description about about receipe"></textarea>
            </div>
            <div id="ReceipeSteps" class="upload">
                <textarea name="Steps" cols="40" rows="10" placeholder="Enter steps to make"></textarea>
            </div>
            <div id="Receipecategory" class="upload">
                <input type="radio" id="Appetizer" name="ReceipeCategory" value="Appetizer">
                <label for="Appetizer">vegetarian</label><br>

                <input type="radio" id="Beverage" name="ReceipeCategory" value="Beverage">
                <label for="Beverage">Beverage</label><br>

                <input type="radio" id="Salad" name="ReceipeCategory" value="Salad">
                <label for="Salad">Non-vegetarian</label><br>

                <input type="radio" id="Dinner" name="ReceipeCategory" value="Dinner">
                <label for="Dinner">Most Famous</label><br>

                <input type="radio" id="Dessert" name="ReceipeCategory" value="Dessert">
                <label for="Dessert">Sweets</label><br>

                <input type="radio" id="Bakery" name="ReceipeCategory" value="Bakery">
                <label for="Bakery">vegan</label>
            </div>
            <div id="sumbit" class="upload">
                <button type="submit" id="submit-btn" name="submit_btn">Submit</button>
            </div>
        </form>
    </div>
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
