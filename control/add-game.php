<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "instinct_games";

    if(isset($_POST['add']))
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $requirments = $_POST['requirments'];
        $multiplayer = $_POST['multiplayer'];
        $visualeffects = $_POST['visualeffects'];
        $gameplay_description = $_POST['gameplay_description'];
        $video_link = $_POST['video_link'];
        $release_date = $_POST['release_date'];
    
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        $sql  = "INSERT INTO `pages` (`id`, `page_name`, `game_desc`, `category`, `requirments`, `multiplayer`, `visual_effects`, `game_play`, `video_link`, `release_date`) VALUES (NULL, '$name', '$description', '$category', '$requirments','$multiplayer', '$visualeffects', '$gameplay_description', '$video_link', '$release_date')";


        $gameID = "SELECT id FROM pages ORDER BY id DESC LIMIT 1";
        $res = mysqli_query($conn, $gameID);
        $game_id = mysqli_fetch_assoc($res);
        

        $images = $_POST['images'];
       
        for ($z = 0; $z < $images; $z++) {
            // $filename = rand() . $_FILES['image' . $z]['name'];
            $filename = $_FILES["image" . $z]["name"];

            $destination = '../layouts/img/' . $filename;

            $target_file = $destination . basename($_FILES["image" . $z]["name"]);

            

            $uploadOk = 1;

            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            

            $file = $_FILES['image' . $z]['tmp_name'];
            $size = $_FILES['image' . $z]['size'];

            if ($_FILES['image' . $z]['size'] > 1000000) {
                echo '<script>alert("File Too Large")</script>';
            } else {
                
                if (move_uploaded_file($file, $destination)) {
                    $ins = "INSERT INTO `page_images` (`id`, `page_id`, `image`) VALUES (NULL, '$game_id', '$filename')";
                    mysqli_query($conn, $ins);
                } else {
                    echo '<script>alert("Failed To Upload Image")</script>';
                }
            }
        }

        if (mysqli_query($conn, $sql)) {
            
            print " <script> alert('Game Added!') </script>";
            header("Location:add-game.php");

        } else {
            echo "<P color:RED>Error</p> deleting record: " . $conn->error;
        }
    }

        

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Instinct-Games</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-info  sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Instinct-Games</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                    aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="Add-jobs.php">Add-Jobs</a>
                        <a class="collapse-item" href="add-game.php">Add-Game</a>
                        <a class="collapse-item" href="add-news.php">Add-News</a>
                        <a class="collapse-item" href="contact_us.php">Contact-Us</a>
                        
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Add New Game!</h1>
                                    </div>
                                    <form class="user" action="add-game.php" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user "
                                                name="name" aria-describedby="emailHelp"
                                                placeholder="Enter Page Name...">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="description" class="form-control" id="" cols="30" rows="5" placeholder="Enter Game Description..."></textarea>
                                        </div>
                                    <div class="row">
                                        <div class="form-group col-lg-3">
                                            <input type="text" class="form-control form-control-user "
                                                name="category" aria-describedby="emailHelp"
                                                placeholder="Enter Category...">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <input type="text" class="form-control form-control-user "
                                                name="requirments" aria-describedby="emailHelp"
                                                placeholder="Enter Requirments...">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <input type="text" class="form-control form-control-user "
                                                name="multiplayer" aria-describedby="emailHelp"
                                                placeholder="Enter Multiplayer...">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <input type="text" class="form-control form-control-user "
                                                name="visualeffects" aria-describedby="emailHelp"
                                                placeholder="Enter Visual Effects...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <textarea name="gameplay_description" class="form-control" id="" cols="30" rows="5" placeholder="Enter Game Play..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user "
                                                name="video_link" aria-describedby="emailHelp"
                                                placeholder="Enter Video Link...">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user "
                                                name="release_date" aria-describedby="emailHelp"
                                                placeholder="Enter Release Date...">
                                        </div>
                                        <div class="row">
											<div class="col-sm-9">
												<!-- text input -->
												<div class="form-group">
													<label>Images Number</label>
													<input type="number" name="images" min="0" id="countt" class="form-control" placeholder="Images Number..">
												</div>
											</div>
											<div class="col-sm-3">
												<!-- text input -->
												<script type='text/javascript'>
													function addFields() {
														var number = document.getElementById("countt").value;
														var container = document.getElementById("containert");
														while (container.hasChildNodes()) {
															container.removeChild(container.lastChild);
														}
														for (i = 0; i < number; i++) {
															container.appendChild(document.createTextNode("Image " + (i + 1)));
															var input = document.createElement("input");
															input.type = "file";
															input.name = "image" + i;
															input.placeholder = "Image..";
															input.classList.add("form-control");
															container.appendChild(input);
															container.appendChild(document.createElement("br"));
														}
													}
												</script>
												<div class="form-group">
													<label>Add</label>
													<input type="button" name="addd" class="form-control btn btn-block btn-primary btn-sm" onclick="addFields()" placeholder="" value="Add">
												</div>

											</div>
										</div>
                                        <div class="row">
											<div class="col-sm-12">
												<div class="form-group" id="containert"> </div>
											</div>
										</div>
                                        <!-- <div class="form-group">
                                            <input type="file" class="form-control form-control-user "
                                                name="release_date" aria-describedby="emailHelp"
                                                placeholder="Enter Release Date...">
                                        </div> -->
                                        <!-- <a href="add-game.php" > -->
                                            <button type="submit" class="btn btn-primary btn-user btn-block" name="add">Add Game </button>
                                        <!-- </a> -->
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Instinct-Games</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>