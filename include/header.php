<div class="header">
    <nav class="nav-menu">
        <a class="nav-logo" href="home.php">
            House Of Calypso
        </a>
        <ul class="nav-list">
            <li><a  href="shop.php">Shop</a></li>
            <li><a href="artisans.php">Our Artisans</a></li>
            <li><a href="#">Contact</a></li>
            <?php 
                if(!isset($_SESSION['user_id'])) {
            ?>
            <li>
                <a class="user-login-button"  href="#" data-toggle="modal" data-target="#login-modal">
                    <i class='bx bx-user'></i>
                </a>
            </li>
            <?php
                } else {
            ?>
                <li>                    
                    <span class="welcome-user">
                        Hi, <a href="cart.php"><?= $_SESSION["full_name"] ?></a>
                    </span>
                    <a class="user-logout-button"  href="logout.php">
                        <i class='bx bx-log-out-circle'></i>
                    </a>
                </li> 
            <?php
                }
            ?>
        </ul>
    </nav>
</div>