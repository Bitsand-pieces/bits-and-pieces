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

<div
    class="product-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50  pb-50 pb-lg-30 pb-md-20 pb-sm-10 pb-xs-0">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="row">

                    <div class="product-details col-12 mb-50 mb-sm-40 mb-xs-30">
                        <div class="product-inner row">
                            <div class="col-md-6 col-12 mb-xs-30">
                                <div class="product-image-slider">
                                    <div class="item"><a href="images/300254_feeding123.jpg" class="gallery-popup"><i
                                                class="pe-7s-search"></i><img src="images/landingpage.png" alt=""></a>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-6 col-12 ">
                                <div class="content details" style="padding: 20px;">
                                    <h3 class="title" style="font-weight: 600;color:blueviolet;">alok kumar</h4>
                                    </h3>


                                    <div class="product-meta" style="padding: 20px;">
                                        <span class="posted-in"><b>Name :</b> mine</span><br>
                                        <span class="tagged-as"><b>Email :</b> mine@email.com</span><br>
                                        <span class="tagged-as"><b>Mobile no :</b> 78210303663</span><br>
                                        <span class="tagged-as"><b>Address :</b> 668821564,
                                            jiya ho bihar ke lala,<br>jkxcjcz bkdb,
                                            145652</span>
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
                                            style="background-color: white; padding:15px;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                            <h3
                                                style=" font-size: 22px; font-weight: 700;color:#784055;text-align: left;">
                                                Description in Short</h3>
                                            <hr>
                                            <div class="product-description" style="color: #6e6d6d;">
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                                short desc
                                            </div>
                                        </div><br>
                                        <div id="product-review" class="tab-pane">
                                            <div class="product-review"
                                                style="background-color: white; padding:15px;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                                <h3
                                                    style=" font-size: 22px; font-weight: 700;color:#784055;text-align: left;">
                                                    Complete Description
                                                </h3>
                                                <hr>
                                                <div class="review-form" style="color: #6e6d6d;">
                                                    long desc
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