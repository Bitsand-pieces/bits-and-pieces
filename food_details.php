<?php
include('assets/SecondHeader.php')

?>



<!-- Breadcrumb Section Start -->
<div class="breadcrumb-section section bg-black pt-75 pb-75 pt-sm-55 pb-sm-55 pt-xs-45 pb-xs-45">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2 style=" font-size: 36px; font-weight: 700;color: pink;text-align: left;">Food Details</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!--Product section start-->

<div class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-50 pb-lg-30 pb-md-20 pb-sm-10 pb-xs-0"
    style="padding:10px;background-color:white;margin:10px;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM `posts` WHERE id='" . $_GET['id'] . "'";
                    $query = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($query);
                    $path = "images/posts/" . $row['objectImg'];

                    $user_id = $row['user_id'];
                    $dType_id = $row['dType_id'];

                    $userSql = "SELECT * FROM `registeredusers` WHERE id='$user_id'";
                    $userQ = mysqli_query($conn, $userSql);
                    $detail = mysqli_fetch_assoc($userQ);

                    $userAddSql = "SELECT * FROM `userdetails` WHERE userId='$user_id'";
                    $userAddQ = mysqli_query($conn, $userAddSql);
                    $addDetail = mysqli_fetch_assoc($userAddQ);



                    ?>
                    <div class="product-details col-12 mb-50 mb-sm-40 mb-xs-30">
                        <div class="product-inner row">
                            <div class="col-md-6 col-12 mb-xs-30">
                                <div class="product-image-slider">
                                    <div class="item"><a href="<?php echo $path; ?>" class="gallery-popup"><i
                                                class="pe-7s-search"></i><img src="<?php echo $path; ?>" alt=""></a>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-6 col-12 ">
                                <div class="content details" style="padding: 20px;">
                                    <h3 class="title" style="font-weight: 600;color:blueviolet;">
                                        <?php echo $row['objectName'] ?></h4>
                                    </h3>


                                    <div class="product-meta" style="padding: 20px;">
                                        <span class="posted-in"><b>Name :</b> <?php echo $detail['name']; ?></span><br>
                                        <span class="tagged-as"><b>Email :</b>
                                            <?php echo $detail['emailId']; ?></span><br>
                                        <span class="tagged-as"><b>Mobile no :</b>
                                            <?php echo $detail['phone']; ?></span><br>
                                        <span class="tagged-as"><b>Address :</b>
                                        </span><?php echo $addDetail['address'] . "," . $addDetail['pincode']; ?></span>
                                    </div>



                                    <ul class="product-details-tab-list nav">
                                        <li><a class="active show" href="#product-description" data-toggle="tab"
                                                style="width: 200px; font-size: 20px; font-weight: 700;color:#cc7ccc;text-align: left;">short-Description</a>
                                        </li>
                                        <li><a href="#product-review" data-toggle="tab"
                                                style="width: 270px; font-size: 20px; font-weight: 700;color: #cc7ccc;text-align: left;margin-bottom:10px;"><small
                                                    style=" font-size: 12px; font-weight: 400;color:#999799;text-align: left;">Click
                                                    Here for</small> Complete-Detail</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="product-description" class="tab-pane active show"
                                            style="background-color: #edeef0; padding:15px;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                            <h3
                                                style=" font-size: 22px; font-weight: 700;color:#784055;text-align: left;">
                                                Description in Short</h3>
                                            <hr>
                                            <div class="product-description" style="color: #6e6d6d;">
                                                <?php echo $row['shrt_desc'] ?>
                                            </div>
                                        </div><br>
                                        <div id="product-review" class="tab-pane">
                                            <div class="product-review"
                                                style="background-color: #edeef0; padding:15px;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                                <h3
                                                    style=" font-size: 22px; font-weight: 700;color:#784055;text-align: left;">
                                                    Complete Description
                                                </h3>
                                                <hr>
                                                <div class="review-form" style="color: #6e6d6d;">
                                                    <?php echo $row['comp_desc'] ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <br><br>
                                    <hr>

                                    <!-- echo "<a href='?type=delete&id=" . $row['id'] . "' class='btn btn-primary'>Delete</a>&nbsp;&nbsp;";
                                            echo "<a href='post.php?id=" . $row['id'] . "' class='btn btn-secondary'>Edit</a>";
                                            ?> -->

                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>

        </div>
    </div>
</div>

<!--Product section end-->

<?php
include("assets/footer.php");

?>