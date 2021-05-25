<?php
include('assets/SecondHeader.php');

?>


<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Change Your Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="" method="post">

                <div class="modal-body">
                    <!-- Change Password Form -->

                    <div class="form-group">
                        <label for="currentPassword">Current Password</label>
                        <input type="password" class="form-control" id="currentPassword" name="currentPassword"
                            placeholder="Enter Your Current Password">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">New Password</label>
                        <input type="password" class="form-control" id="newPassword" name="newPassword"
                            placeholder="Enter Your New Password">
                    </div>
                    <div class="form-group">
                        <label for="confirmNewPassword">Confirm Your New Password</label>
                        <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword"
                            placeholder="Password">
                    </div>


                    <!-- ./Change Password Form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="changePswd_btn">Change Password</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!-- ./Change Password Modal -->

<!-- Edit Profile Modal -->

<!-- Modal -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit your profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">

                <div class="modal-body">
                    <!-- edit form -->

                    <div class="col-md-12">
                        <div class="row form-group">
                            <div class="col-sm-6">
                                <label for="editProfilePic">Upload Profile Picture</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="editProfilePic"
                                        name="editProfilePic" accept="image/*" required>
                                    <label class="custom-file-label" for="editprofilePic">Choose file</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <a href="<?php echo $path; ?>"><img src="assets/images/profilePicture/editPic.png"
                                        alt="" height="60px" width="40px">click to view image</a>
                            </div>
                            <div class="col-sm-6">
                                <label for="edit_alt_phn_no">Alternate Phone Number (optional)</label>
                                <input type="tel" class="form-control" name="edit_alt_phn_no" id="edit_alt_phn_no"
                                    maxlength="10">
                            </div>
                            <div class="col-sm-6">
                                <label for="editpinCode">PIN Code</label>
                                <input type="number" class="form-control" name="editpinCode" id="editpinCode" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="editcity">City</label>
                                <input type="text" class="form-control" name="editcity" id="editcity" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="editstate">State</label>
                                <input type="text" class="form-control" name="editstate" id="editstate" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="editaddress">Address</label>
                                <input type="text" class="form-control" name="editaddress" id="editaddress" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="editarea">Road name,Area,Colony</label>
                                <input type="text" class="form-control" name="editarea" id="editarea" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="editlandMark">Nearby Famous Shop/Mall/Landmark</label>
                                <input type="text" class="form-control" name="editlandMark" id="editlandMark" required>
                            </div>
                        </div>
                    </div>
                    <!-- ./edit form -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="editProfile_btn">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- /.Edit Profile Modal -->

<!-- Breadcrumb Section Start -->
<div class="breadcrumb-section section bg-black pt-75 pb-75 pt-sm-55 pb-sm-55 pt-xs-45 pb-xs-45">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2>Profile</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<div style=" padding:10px 150px;">
    <div class="row align-items-top">

        <div class="col-md-2 profile-picture">



            <img style="margin-top:70px; border-radius:150%; height:200px; width:200px;"
                src="images/avatar_0.jpg.crdownload" alt="">

            <br>
            <p class=" text-center"><a href="" data-toggle="modal" data-target="#editProfileModal"><span
                        class="fa fa-edit"> </span> EDIT PROFILE </a> </p>
            <p class="text-center"><a href="" data-toggle="modal" data-target="#changePasswordModal"><span
                        class="fa fa-edit"> </span> CHANGE PASSWORD </a> </p>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8 user-detail">
            <div class="row">
                <div class="col-md-12">
                    <h3 style="text-align:center; padding:5px; margin-top:50px;"> Basic Details</h3>
                    <table class="table table-hover table-borderless"
                        style=" background-color:white; border-radius:5px;">
                        <tbody>
                            <tr>
                                <th scope="row">Name:</th>
                                <td>Alok Kumar</td>
                            </tr>
                            <tr>
                                <th scope="row">Email:</th>
                                <td>alok@kumar.com</td>
                            </tr>
                            <tr>
                                <th scope="row">Contact:</th>
                                <td>70000012511</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="col-md-12">
                    <h3 style="text-align:center; padding:5px; margin-top:50px;">More Details</h3>
                    <table class="table table-hover table-borderless"
                        style=" background-color:white; border-radius:5px;padding:10px;">
                        <tbody style="padding: 10px;">
                            <tr>
                                <th scope="row">Alternate Phone No.:</th>
                                <td>alt phn</td>
                            </tr>
                            <tr>
                                <th scope="row">PIN Code:</th>
                                <td>pin</td>
                            </tr>
                            <tr>
                                <th scope="row">City:</th>
                                <td>cliyyyy</td>
                            </tr>
                            <tr>
                                <th scope="row">State:</th>
                                <td>state</td>
                            </tr>
                            <tr>
                                <th scope="row">House No.,Building Name:</th>
                                <td>jdhjkdjfk khhdsakjf</td>
                            </tr>
                            <tr>
                                <th scope="row">Road name,Area,Colony:</th>
                                <td>jfddfkjdsfjcxv b dfb</td>
                            </tr>
                            <tr>
                                <th scope="row">Nearby Famous Shop/Mall/Landmark:</th>
                                <td>fjkhdjkf fjkdsk</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12" style="border-radius: 5px; background-color:white;">
                    <h3 style="text-align:center; padding:5px; margin-top:50px;">Complete Your
                        Profile</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-sm-12">
                                <label for="profilePic">Upload Profile Picture</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="profilePic" name="profilePic"
                                        accept="image/*">
                                    <label class="custom-file-label" for="profilePic">Choose file</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="alt_phn_no">Alternate Phone Number (optional)</label>
                                <input type="tel" class="form-control" name="alt_phn_no" id="alt_phn_no" maxlength="10">
                            </div>
                            <div class="col-sm-6">
                                <label for="pinCode">PIN Code</label>
                                <input type="number" class="form-control" name="pinCode" id="pinCode" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" id="city" required>
                            </div>
                            <div class="col-sm-6">
                                <label for="state">State</label>
                                <input type="text" class="form-control" name="state" id="state" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="address" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="area">Road name,Area,Colony</label>
                                <input type="text" class="form-control" name="area" id="area" required>
                            </div>
                            <div class="col-sm-12">
                                <label for="landMark">Nearby Famous Shop/Mall/Landmark</label>
                                <input type="text" class="form-control" name="landMark" id="landMark" required>
                                <input type="submit" style="border-radius:4px;" class="btn mt-20"
                                    name="uploadDetail_btn" value="Upload">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>



<?php

include('assets/footer.php')

?>