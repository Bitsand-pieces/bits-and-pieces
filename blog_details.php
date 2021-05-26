<?php
include('assets/SecondHeader.php');
?>
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-section section bg-black pt-75 pb-75 pt-sm-55 pb-sm-55 pt-xs-45 pb-xs-45">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="breadcrumb-title">
                    <h2 style=" font-size: 36px; font-weight: 700;color: pink;text-align:center;">Blog Details</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->



<!--Blog section start-->
<div style="padding:10px;background-color:white;margin:10px;border-radius:10px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"
    class="blog-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">

        <div class="row">

            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <!-- Single Blog Start -->
                        <div class="blog post-full-item mb-30 col-lg-12">
                            <div class="blog-inner heading-color">
                                <div class="blog-image" style="margin-top: 20px;">
                                    <a href="#" class="image"><img src="images/feeding_dogs.jpg" alt=""
                                            height="500px"></a>
                                    <ul class="meta theme-color">
                                        <li><i class="fa fa-clock-o"></i><a href="#">created at</a></li>
                                        <li><i class="fa fa-comments"></i>0</li>
                                    </ul>
                                </div>
                                <div class="content blog-grid-content">
                                    <h3 class="title"><a href="#">title of the blog</a></h3>
                                    <blockquote>
                                        <p>complete message</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog End -->


                    </div>
                </div>
                <div class="col-lg-3 mt-sm-3 mt-xs-3">
                    <div class="sidebar"
                        style="display:flex;justify-content:center;align-items:center;flex-direction:column;">
                        <h3 class="sidebar-title">Recent Posts</h3>

                        <div class="sidebar-blog"
                            style="background: linear-gradient(to bottom left, #e9a3ad 40%, #e2c6b5 100%);padding:5px;border-radius:5px;transition:all 300ms;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;margin:10px; height:160px;width:150px;text-align:center;"
                            onmouseover="this.style.transform='scale(1.03)'"
                            onmouseout="this.style.transform='scale(1)'">
                            <a href="blog_details.php" class="image"><img src="images/stayhome.png" alt=""
                                    style="width: 115px;height:80px;margin-left: 10px;"></a>
                            <div class="content" style="height:70px;">
                                <h5><a href="blog_details.php">title</a>
                                </h5>
                                <span>created at</span>
                            </div>

                        </div>
                        <div class="sidebar-blog"
                            style="background: linear-gradient(to bottom left, #e9a3ad 40%, #e2c6b5 100%);padding:5px;border-radius:5px;transition:all 300ms;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;margin:10px; height:160px;width:150px;text-align:center;"
                            onmouseover="this.style.transform='scale(1.03)'"
                            onmouseout="this.style.transform='scale(1)'">
                            <a href="blog_details.php" class="image"><img src="images/stayhome.png" alt=""
                                    style="width: 115px;height:80px;margin-left: 10px;"></a>
                            <div class="content" style="height:70px;">
                                <h5><a href="blog_details.php">title</a>
                                </h5>
                                <span>created at</span>
                            </div>

                        </div>
                        <div class="sidebar-blog"
                            style="background: linear-gradient(to bottom left, #e9a3ad 40%, #e2c6b5 100%);padding:5px;border-radius:5px;transition:all 300ms;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;margin:10px; height:160px;width:150px;text-align:center;"
                            onmouseover="this.style.transform='scale(1.03)'"
                            onmouseout="this.style.transform='scale(1)'">
                            <a href="blog_details.php" class="image"><img src="images/stayhome.png" alt=""
                                    style="width: 115px;height:80px;margin-left: 10px;"></a>
                            <div class="content" style="height:70px;">
                                <h5><a href="blog_details.php">title</a>
                                </h5>
                                <span>created at</span>
                            </div>

                        </div>
                        <hr>
                        <div class="edit_del_blog">
                            <button class="btn" data-toggle="modal" data-target="#editBlogModal">EDIT BLOG</button>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteBlogModal">DELETE
                                BLOG</button>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--Blog section end-->


    <!-- EDIT BLOG MODAL starts-->



    <!-- Modal -->
    <div class="modal fade" id="editBlogModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Your Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="recipient-name" class="col-form-label">Image:</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="editblogImg"
                                            name="editblogImg">
                                        <label class="custom-file-label" for="editblogImg">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <a href=""><img src="images/editPic.png" alt="" style="width: 60px;height:60px;">Click
                                    Here to see
                                    Image</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="editblogTitle" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="editblogTitle" name="editblogTitle">
                        </div>
                        <div class="form-group">
                            <label for="editblogMsg" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="editblogMsg" name="editblogMsg"
                                rows="10">fieled message</textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="editBlog_btn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- EDIT BLOG MODAL ends-->

    <!-- Delete Blog Modal starts-->

    <!-- Modal -->
    <div class="modal fade" id="deleteBlogModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Your Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure, you want to delete this blog?


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="" method="post">
                        <button type="submit" class="btn btn-primary" name="delBlog_btn">Delete Blog</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete Blog Modal ends-->



</div>


<?php
include("assets/footer.php");

?>