
<!-- breadcrumb start -->
<section class="breadcrumb-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-title">
                    <h2>register</h2>
                </div>
            </div>
            <div class="col-12">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">register</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb End -->


<!--section start-->
<section class="register-page section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="title pt-0">create account</h3>
                <div class="theme-card">
				 <?php
                    if ($feedback1 = $this->session->flashdata('feedback1')):
                        $feedback_class1 = $this->session->flashdata('feedback_class1');
                        ?>

                        <div class="alert alert-dismissible <?= $feedback_class1 ?>"> 

                            <?= $feedback1 ?>	</div>	
                        <?php
                        unset($_SESSION['feedback1']);
                        unset($_SESSION['feedback_class1']);
                        ?>
                    <?php endif; ?>
				    <form id="signupform" class="theme-form form-horizontal" role="form" action="<?php echo base_url() ?>user/register" method="post"> 

                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">First Name</label>
								   <input type="text" class="form-control" id="firstname" name="name" placeholder="First name" />
                            </div>
                            <div class="col-md-6">
                                <label for="review">Last Name</label>
                                 <input type="text" class="form-control" id="lastname" name="lname" placeholder="Last name" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="email">email</label>
								<input type="text" class="form-control" id="email" name="username" placeholder="Email" required />

                                
                            </div>
                            <div class="col-md-6">
                                <label for="review">Password</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" required/>

                            </div>
							<button type="submit" class="btn btn-solid" name="signup" value="Sign up">Sign up</button>
							</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Section ends-->

