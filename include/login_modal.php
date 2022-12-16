<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">                    
                    <div class="col-md-6  modal-left">        
                        <div class="text-right modal-close-button"> <i class="bx bx-x" data-dismiss="modal"></i> </div>
                    </div>   
                    <div class="col-md-6  modal-right">
                        <div class="text-white mt-5">    
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

                                <p class="modal-message">Don't have an account? <a class="user-signup-button" href="#" data-dismiss="modal"  data-toggle="modal" data-target="#signup-modal"> Sign up now</a></p>
                            </form>
                        </div>                      
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "include/signup_modal.php";
?> 