<div class="modal signup-modal">
    <div class="modal-container">
        <div class="modal-left">
            <img src="img/mod1.jpg" class="modal-image" alt="House-Of-Clay Somalia Teapot">
            <button class="modal-close-button"><i class='bx bx-x'></i></button>
        </div>
        <div class="modal-right">
            <form id="signup-form" method="post" action="api/signup_submit.php">
                <h2 class="modal-title">Welcome!</h2>
                <p class="modal-desc">Please enter your details.</p>
                
                <div class="input-block">
                    <label for="fname" class="input-label"> First Name: <br/>
                        <input type="text" name="fname" id="fname" >
                    </label>
                </div>

                <div class="input-block">
                    <label for="lname" class="input-label"> Last Name: <br/>
                        <input type="text" name="lname" id="lname" >
                    </label>
                </div>

                <div class="input-block">
                    <label for="phone" class="input-label"> Phone: <br/>
                        <input type="text" name="phone" id="phone">
                    </label>
                </div>

                <div class="input-block">
                    <label for="user-email" class="input-label"> Email <br/>
                        <input type="email" name="email" id="user-email" >
                    </label>
                </div>

                <div class="input-block">
                    <label for="user-password" class="input-label"> Password <br/>
                        <input type="password" name="password" id="user-password" >
                    </label>
                </div>

                <button type="submit" class="signup-submit-button">Sign Up</button>

                <p class="modal-message">Already have an account? <a class="user-login-button"> Login now</a></p>
            </form>
        </div>        
    </div>
</div>
