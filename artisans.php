<?php
    session_start();
?>

<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> House of Calypso | Our Artisans </title>   

    <?php
        include "include/all_links.php";
    ?>

    <link href="css/shop.css" rel="stylesheet">
    <link href="css/artisans.css" rel="stylesheet">
</head>
<body>
    

    <div class="shop-header">        
        <span><a href="home.php">house of calypso</a></span>
    </div>

    <div class="shop-landing artisans-landing">
        <div class="shop-title">
            <a href="home.php">
                <h1><span>Our</span> Artisans</h1>
            </a>
        </div>   
    </div>

    <div class="container my-5">
        <artisans>
        <div class="row">
                <div class="col-md-4">
                    <div class="content">
                        <div class="image-container artisans-space">
                            <img src="img/artisans/vikiweiland.jpg" alt="" />
                        </div> 
                        <div class="content-container">
                            <artisan>
                                <div class="artisan-name">
                                    <name>Viki Weiland</name>
                                </div>
                                <div class="artisan-profession">
                                    <profession>Ceramic artist from Copenhagen, Denmark.</profession>
                                </div>
                                <div class="artisan-bio mb-4">
                                    <bio>Viki Weiland is a Danish designer who has graduated from The Danish Academy of Fine Arts now working as a ceramist in Copenhagen.</bio>
                                </div>
                                <div class="artisan-product-info">
                                    <productinfo>
                                        All products are wheelthrown and made of stoneware and everything is glazed by hand.
                                    </productinfo>
                                </div>
                            </artisan>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="content">
                        <div class="image-container artisans-space">
                            <img src="img/artisans/julietpolac.jpg" alt="" />
                        </div> 
                        <div class="content-container">
                            <artisan>
                            <div class="artisan-name">
                                <name>Juliette Polac</name>
                            </div>
                            <div class="artisan-profession">
                                <profession>Potter from Poland.</profession>
                            </div>
                            <div class="artisan-bio mb-4">
                                <bio>Juliet trained in ceramics at the CNIFP in Puisaye. In 2003, she established her current studio, Cloonmore Pottery, near Moycullen, Co. Galway.</bio>
                            </div>
                            <div class="artisan-product-info">
                                <productinfo>
                                    Juliet specialises in porcelain goods and stoneware imbued with years of dedication and inspiration.
                            </div>
                            </artisan>
                        </div>
                    </div>
                </div>                            
                <div class="col-md-4">
                    <div class="content">
                        <div class="image-container artisans-space">
                            <img src="img/artisans/nishimura.jpg" alt="" />
                        </div> 
                        <div class="content-container">
                            <artisan>
                                <div class="artisan-name">
                                    <name>Yohei Nishimura</name>
                                </div>
                                <div class="artisan-profession">
                                    <profession>Ceramist from Kyoto,Japan.</profession>
                                </div>
                                <div class="artisan-bio mb-4">
                                    <bio>Nishimura studied Japanese Painting before moving to study Awata pottery techniques under Aoyama Shunko.</bio>
                                </div>
                                <div class="artisan-product-info">
                                    <productinfo>
                                        His style is traditional but shows great energy and passion as well as a high level of craftsmanship.
                                    </productinfo>
                                </div>
                            </artisan>
                        </div>
                    </div>
                </div>
        </div>
        </artisans>
    </div>
    <?php 
        include "include/footer.php"
    ?>
    <script src="js/shop.js" type="text/javascript"></script>
</body>
</html>