<?php
include("assets/SecondHeader.php");

?>


<!-- Breadcrumb Section Start -->
<div class="breadcrumb-section section bg-black pt-75 pb-75 pt-sm-55 pb-sm-55 pt-xs-45 pb-xs-45">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2 style=" font-size: 36px; font-weight: 700;color: pink;text-align: left;">Blogs</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->


<!-- Blog Modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Write Your Blog Here</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Image:</label>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="blogImg" name="blogImg">
                                <label class="custom-file-label" for="blogImg">Choose file</label>
                            </div>
                        </div>



                    </div>
                    <div class="form-group">
                        <label for="blogTitle" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="blogTitle" name="blogTitle">
                    </div>
                    <div class="form-group">
                        <label for="blogMsg" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="blogMsg" name="blogMsg" rows="10"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="uploadblog_btn">UPLOAD BLOG</button>
                </div>
            </form>

        </div>
    </div>
</div>





<!--Blog section start-->
<div style="padding:10px;background-color:white;margin:10px;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"
    class="blog-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-45 pb-lg-25 pb-md-15 pb-sm-5 pb-xs-15">
    <div class="container">
        <a href="" data-toggle="modal" data-target="#exampleModal" class="pb-5" style="margin-left: auto;">
            <h2 class="pb-5"><i class="fa fa-plus"></i> Post Blogs </h2>
        </a>


        <div class="row">


            <!-- Single Blog Start -->
            <div class="blog mb-30 mb-xs-10 col-lg-5 col-md-6 col-sm-6"
                style="background: linear-gradient(to bottom left, #e9a3ad 40%, #e2c6b5 100%);padding:5px;border-radius:5px;transition:all 300ms;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;margin:10px;"
                onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                <div class="blog-inner heading-color">
                    <div class="blog-image">
                        <a href="blog_details.php" class="image"><img src="images/oxygen.jpg" alt="" height="250px"></a>
                        <ul class="meta theme-color">
                            <li><i class="fa fa-clock-o"></i><a href="#">Time </a></li>
                        </ul>
                    </div>
                    <div class="content" style="margin-left: 20px;">
                        <h3 class="title"><a href="blog_details.php">title</a>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="blog mb-30 mb-xs-10 col-lg-5 col-md-6 col-sm-6"
                style="background: linear-gradient(to bottom left, #e9a3ad 40%, #e2c6b5 100%);padding:5px;border-radius:5px;transition:all 300ms;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;margin:10px;"
                onmouseover="this.style.transform='scale(1.03)'" onmouseout="this.style.transform='scale(1)'">
                <div class="blog-inner heading-color">
                    <div class="blog-image">
                        <a href="blog_details.php" class="image"><img src="images/oxygen.jpg" alt="" height="250px"></a>
                        <ul class="meta theme-color">
                            <li><i class="fa fa-clock-o"></i><a href="#">Time </a></li>
                        </ul>
                    </div>
                    <div class="content" style="margin-left: 20px;">
                        <h3 class="title"><a href="blog_details.php">title</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!-- Single Blog End -->

        </div>

    </div>
</div>
<!--Blog section end-->

<?php
include("assets/footer.php");

?>