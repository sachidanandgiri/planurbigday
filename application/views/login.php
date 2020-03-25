<!-- breadcrumb start -->
<section class="breadcrumb-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2>CUSTOMER'S LOGIN</h2>
                </div>
            </div>
            <div class="col-12">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">login</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb End -->


<!--section start-->
<section class="login-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="title">Login</h3>
                <div class="theme-card">
				
                    <?php
                    if ($feedback = $this->session->flashdata('feedback')):
                        $feedback_class = $this->session->flashdata('feedback_class');
                        ?>

                        <div class="alert alert-dismissible <?= $feedback_class ?>"> 

                            <?= $feedback ?>	</div>	
                        <?php
                        unset($_SESSION['feedback']);
                        unset($_SESSION['feedback_class']);
                        ?>
                    <?php endif; ?>

                    <form id="login" class="theme-form form-horizontal" role="form" action="<?php echo base_url() ?>user/login" method="post">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email1" name="username" placeholder="Email ID" />                                    
                        </div>
                        <div class="form-group">
                            <label for="review">Password</label>
                            <input type="password" class="form-control" id="password1" name="password" placeholder="Password" /> 
                        </div>
						 <button type="submit" class="btn btn-success btn-solid" name="Login" value="Login">Login </button>

						
						
						</form>
                </div>
            </div>
            <div class="col-lg-6 right-login">
                <h3 class="title">New Customer</h3>
                <div class="theme-card authentication-right">
                    <h6 class="title-font">Create A Account</h6>
                    <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p><a href="<?php echo base_url() ?>register" class="btn btn-solid">Create an Account</a></div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->
<script src="<?php echo base_url() ?>/assets/js/jquery.min.js" ></script>

<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script>
    $(document).ready(function () {
        setTimeout(function () {
            $('.alert-success, .alert-danger ').fadeOut('slow');
        }, 3000); // <-- time in milliseconds
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
    alert('dsdd');
        $("#login").validate({
            rules: {

                username: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                }

            },
            messages: {

                username: "Please enter a valid email address",
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                }


            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                // Add the `help-block` class to the error element
                error.insertBefore(element.parent("div"));

                if (!element.next("span")[ 0 ]) {
                    $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
                }
            },

            success: function (label, element) {
                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if (!$(element).next("span")[ 0 ]) {
                    $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).parents(".input-group").addClass("has-error").removeClass("has-success");
                $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents(".input-group").addClass("has-success").removeClass("has-error");
                $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
            }



        });
</script>

