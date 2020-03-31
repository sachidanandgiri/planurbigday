<div class="tp-dashboard-head">
        <!-- page header -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 profile-header">
                    <div class="profile-pic col-md-2"><img src="<?php echo base_url() ?>assets/images/profile-dashbaord.png" alt=""></div>
                    <div class="profile-info col-md-9">
                        <h1 class="profile-title">Member Name<small>Welcome Back memeber</small></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page header -->
    <div class="tp-dashboard-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12 dashboard-nav">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="dashboard-vendor.html"><i class="fa fa-dashboard db-icon"></i>My Dashboard</a></li>
                        <li class="active"><a href="dashboard-profile.html"><i class="fa fa-user db-icon"></i>My Profile</a></li>
                        <li><a href="dashboard-my-listing.html"><i class="fa fa-list db-icon"></i>My Listing </a></li>
                        <li><a href="dashboard-add-listing.html"><i class="fa fa-plus-square db-icon"></i>Add listing</a></li>
                        <li><a href="dashboard-pricing.html"><i class="fa fa-list-alt db-icon"></i>Pricing Plan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-page-head">
                        <div class="page-header">
                            <h1>Vendor Profile <small>Edit and Update your profile.</small></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 profile-dashboard">
                    <div class="row">
                        <div class="col-md-7 dashboard-form">
                            <div class="bg-white pinside40 mb30">
                                <form class="form-horizontal">
                                    <!-- Form Name -->
                                    <h2 class="form-title">Upload Profile Photo</h2>
                                    <!-- File Button -->
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <div class="photo-upload"><img src="images/profile-dashbaord.png" alt=""></div>
                                        </div>
                                        <div class="col-md-8 upload-file">
                                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    <h2 class="form-title">Profile Vendor</h2>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Vendor Name<span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" placeholder="Vendor Name" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Vendor Website </label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" placeholder="Vendor Website" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Email<span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" placeholder="Email" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Phone<span class="required">*</span></label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" placeholder="Phone" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="description">Description</label>
                                        <div class="col-md-8">
                                            <textarea class="form-control" id="description" name="Description" rows="6" cols="12"></textarea>
                                        </div>
                                    </div>
                                    <h2 class="form-title">Socail Media Profile</h2>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Facebook URl</label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" placeholder="Facebook URl" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Twitter Url</label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" placeholder="Twitter Url" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Linkedin Url</label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" placeholder="Linkedin Url" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="name">Pinterest Url</label>
                                        <div class="col-md-8">
                                            <input id="name" name="name" type="text" placeholder="Pinterest Url" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-4">
                                            <button id="submit" name="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 dashboard-form">
                            <div class="bg-white pinside40 mb30">
                                <form class="form-horizontal">
                                    <!-- Form Name -->
                                    <h2 class="form-title">Change Password</h2>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="oldpassword">Old Password</label>
                                        <div class="col-md-8">
                                            <input id="oldpassword" name="oldpassword" type="text" placeholder="Old Password" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="newpassword">New Password</label>
                                        <div class="col-md-8">
                                            <input id="newpassword" name="newpassword" type="text" placeholder="New Password" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="ConfirmPassword">Confirm Password</label>
                                        <div class="col-md-8">
                                            <input id="ConfirmPassword" name="ConfirmPassword" type="text" placeholder="Confirm Password" class="form-control input-md" required="">
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-4">
                                            <button id="submit" name="submit" class="btn btn-primary">Save Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>