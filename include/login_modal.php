<div class="modal login-modal">
    <div class="modal-container">
        <div class="modal-left">
            <img src="img/mod1.jpg" class="modal-image" alt="House-Of-Clay Somalia Teapot">
            <button class="modal-close-button"><i class='bx bx-x'></i></button>
        </div>
        <div class="modal-right">
            <form id="login-form" method="post" action="api/login_submit.php">
                <h2 class="modal-title">Welcome back!</h2>
                <p class="modal-desc">Please enter your details.</p>
                
                <div class="input-block">
                    <label for="email" class="input-label"> Email <br/>
                        <input type="email" name="email" id="email" placeholder="janedoe@email.com" >
                    </label>
                </div>

                <div class="input-block">
                    <label for="password" class="input-label"> Password <br/>
                        <input type="password" name="password" id="password" placeholder="******" >
                    </label>
                </div>

                <button type="submit" class="login-submit-button">Login</button>

                <p class="modal-message">Don't have an account? <a class="user-signup-button"> Sign up now</a></p>
            </form>
        </div>        
    </div>
</div>

<?php
    include "include/signup_modal.php";
?>