<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Of Clay</title>

    <?php
        include "include/all_links.php";
    ?>

    <link href="css/home.css" rel="stylesheet">
</head>
<body>
    <?php
        include "include/header.php";
    ?>
    
    <div class="landing-container">
        <div class="landing-text">
            <h1>House Of Clay</h1>
            <span class="sub-heading">
                We offer handcrafted, fine quality and material-first objects, 
                and we’re proud in our effort to lead the way in offering 
                small-scale sustainably produced goods that at its core celebrate tradition.
            </span>
        </div>
    </div>

    <div class="new-in-container">
        <div class="new-in-title">
            <h2>New in selection<br/>of BOWLS</h2>
        </div>
        <div class="new-in-carousel-container">
            <div class="new-in-carousel-title">
                <h2>Shop all<br/>products</h2>
            </div>
            <div class="new-in-carousel">
                
                <!---->
                <ul class="list">
                    <li class="hide"></li>
                    <li class="prev"></li>
                    <li class="act"></li>
                    <li class="next"></li>
                    <li class="next new-next"></li>
                </ul>

                <div class="swipe"></div>

                <script src="https://hammerjs.github.io/dist/hammer.js"></script>
                <!---->

            </div>
        </div>
    </div>

    <div class="category-container">
        <div class="category-image category-mugs">
        </div>
        <div class="category-details">
            <h3>Handcrafted Mugs</h3>
            <p class="category-desc">A cup is so much more than a cup! 
                Should it have a handle or not? Should it be a large handmade 
                mug for that Monday coffee or just for a quick espresso? Tall or wide? 
                Dig into our universe of different kinds of handmade ceramic mugs and 
                explore what a cup can do for your experience of your favorite drink.
            </p>
            <a class="animated-arrow" href="">
                <span class="the-arrow -left">
                    <span class="shaft"></span>
                </span>
                <span class="main">
                    <span class="text">
                        Find your new favourite cup
                    </span>
                    <span class="the-arrow -right">
                        <span class="shaft"></span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class="category-container">
        <div class="category-details">
            <h3>Plates and Platters</h3>
            <p class="category-desc">
                A beautiful handmade plate can make even the most simple food 
                look amazing. Start your collection by mixing and matching 
                unique dinner plates and platters from different artists. 
                An elegant way to make your set match is by choosing one 
                color-direction for your dinnerware. Then the final look
                will feel complete, yet still personal and unique
            </p>
            <a class="animated-arrow" href="">
                <span class="the-arrow -left">
                    <span class="shaft"></span>
                </span>
                <span class="main">
                    <span class="text">
                         Making every meal special
                    </span>
                    <span class="the-arrow -right">
                        <span class="shaft"></span>
                    </span>
                </span>
            </a>
        </div>
        <div class="category-image category-plates">
        </div>
    </div>

    <div class="category-container">
        <div class="category-image category-bowl">
        </div>
        <div class="category-details">
            <h3>Handmade Bowls</h3>
            <p class="category-desc">
                Ceramic bowls in all kinds of sizes. Use them for your morning 
                breakfast, a quick lunch soup or for serving a grand evening salad.
                Our collection consists of handmade and unique bowls made for 
                every occasion.
            </p>
            <a class="animated-arrow" href="">
                <span class="the-arrow -left">
                    <span class="shaft"></span>
                </span>
                <span class="main">
                    <span class="text">
                        Find unique pieces here
                    </span>
                    <span class="the-arrow -right">
                        <span class="shaft"></span>
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class="category-container">
        <div class="category-details">
            <h3>Pitchers and Jugs</h3>
            <p class="category-desc">
                Fill these pitchers with your favorite drink - 
                and experience the joy of handcrafted pieces.
                Whether you like your coffee extra creamy or with just two drops,
                our selection of coffee pitchers and milk jugs are just too 
                cute not to serve. Mix and match the colors of the pitchers 
                with our cups and teapots for the perfect afternoon tea decor,
                 wine serving or fresh water with your dinner.
            </p>
            <a class="animated-arrow" href="">
                <span class="the-arrow -left">
                    <span class="shaft"></span>
                </span>
                <span class="main">
                    <span class="text">
                        Pour with luxury
                    </span>
                    <span class="the-arrow -right">
                        <span class="shaft"></span>
                    </span>
                </span>
            </a>
        </div>
        <div class="category-image category-pitcher">
        </div>
    </div>

    <?php
        include "include/login_modal.php";
        include "include/footer.php";
    ?>
    <script src="js/home.js" type="text/javascript"></script>

</body>
</html>
