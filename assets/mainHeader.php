<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bits and pieces</title>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="menu-toggler">
            <div class="bar half start"></div>
            <div class="bar"></div>
            <div class="bar half end"></div>
        </div>
        <nav class="top-nav">
            <ul class="nav-list">
                <li>
                    <a href="home.php" class="nav-link"><img src="images/logo1.png" alt="logo"
                            style="width: 300px; height: 300px;"></a>
                </li>
                <li>
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="covid.php" class="nav-link">Covid relief</a>
                </li>
                <li>
                    <a href="post.php" class="nav-link">Post Something</a>
                </li>
                <li>
                    <a href="blog.php" class="nav-link">Blogs</a>
                </li>
                <li>
                    <a href="profile.php" class="nav-link">Profile</a>
                </li>
                <li>
                    <a class="nav-link" data-toggle="modal" data-target="#myModal">Login</a>
                </li>
            </ul>
        </nav>

        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
       Open modal
     </button> -->

        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post">



                            <div class="form-group">
                                <label>Email :</label>
                                <input type="email" name="username" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password :</label>
                                <input type="password" name="password" class="form-control" required
                                    placeholder="Enter Password">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success" name="register_btn"
                                    id="register_btn">Login</button>
                            </div>

                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <h5>don't have an account <a data-toggle="modal" data-target="#Modal">register yourself here</a>
                        </h5>
                    </div>

                </div>
            </div>
        </div>


        <!-- second modal -->
        <!-- The Modal -->
        <div class="modal fade" id="Modal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Register Yourself</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post">

                            <div class="form-group col-md-12">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Enter Username" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email">Email Id</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter Your Email" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="phn">Phone</label>
                                <input type="tel" class="form-control" id="phn" name="phn" maxlength="10"
                                    placeholder="Enter Your Phone Number" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="pswd">Password</label>
                                <input type="password" class="form-control" id="pswd" name="pswd"
                                    placeholder="Enter Your Password" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="cPswd">Confirm Password</label>
                                <input type="password" class="form-control" id="cPswd" name="cPswd"
                                    placeholder="Confirm Your Password" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-success" name="register_btn"
                                    id="register_btn">Register</button>
                            </div>
                        </form>


                    </div>
                </div>



            </div>
        </div>
        </div>



    </header>