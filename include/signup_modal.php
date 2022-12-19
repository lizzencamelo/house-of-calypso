<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">                    
                    <div class="col-md-6  modal-left">        
                        <div class="text-right modal-close-button"> <i class="bx bx-x" data-dismiss="modal"></i> </div>
                    </div>   
                    <div class="col-md-6  modal-right">
                        <div class="text-white mt-5">    
                            <form id="signup-form" method="post" action="">
                                <h2 class="modal-title">Welcome!</h2>
                                <p class="modal-desc">Please enter your details.</p>
                                
                                <div class="input-block">
                                    <label for="full_name" class="input-label"> Full Name: <br/>
                                        <input type="text" name="full_name" id="full_name" required >
                                    </label>
                                </div>

                                <div class="input-block">
                                    <label for="phone" class="input-label"> Phone: <br/>
                                        <input type="text" name="phone" id="phone"  maxlength="10" minlength="10" required>
                                    </label>
                                </div>

                                <div class="input-block">
                                    <label for="user-email" class="input-label"> Email <br/>
                                        <input type="email" name="email" id="email" required >
                                    </label>
                                </div>

                                <div class="input-block">
                                    <label for="user-password" class="input-label"> Password <br/>
                                        <input type="password" name="password" id="password" minlength="6" required>
                                    </label>
                                </div>

                                <button type="submit" class="signup-submit-button">Sign Up</button>

                                <p class="modal-message">Already have an account? <a class="user-login-button" href="#" data-dismiss="modal"  data-toggle="modal" data-target="#login-modal"> Login now</a></p>
                            </form>
                        </div>                      
                    </div>               
                </div>
            </div>
        </div>
    </div>
</div>

