<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "instinct_games";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(isset($_GET['delete'])) {
    $contact_id = $_GET['delete'];

    $sql = "DELETE FROM contact_us WHERE id='$contact_id'";
    mysqli_query($conn,$sql);
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
        <ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="add-game.php">
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
                    
                    <style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;
        text-align:center;  
     }  
</style>    
<div class="table-scrol">  
    <h1 style="text-align: center;">All Messages</h1>   
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
    <table class="table table-bordered table-hover table-striped" style="table-layout:absolute">  
        <thead>  
        <tr>  
            <th>Email Id</th>  
            <th>Email</th>  
            <th>Subject</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>  
        </thead>  
        <?php  
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "instinct_games";
        $conn = mysqli_connect($servername,$username,$password,$dbname);
        $view_users_query="select * from contact_us";//select query for viewing users.  
        $run=mysqli_query($conn,$view_users_query);//here run the sql query.
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $id=$row[0];
            $name=$row[1]; 
            $email=$row[2];
            $message=$row[3];    
        ?>    
        <tr>            
            <td><?php echo $id;  ?></td> 
            <td><?php echo $name;  ?></td>  
            <td><?php echo $email;  ?></td> 
            <td><?php echo $message;  ?></td>
            <td><div class="form-group">
													
                <input type="button" onclick="window.location='contact_us.php?delete=<?php echo $id; ?>'" name="addd" class="form-control btn btn-block btn-primary btn-sm" placeholder="" value="Mark As Viewed">
            </div></td>       
        </tr>  
        <?php } 
        ?>  
    </table>  
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