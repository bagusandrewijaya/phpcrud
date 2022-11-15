<?php
session_start();
if(empty($_SESSION['logged_in']))
{
    header('Location:../v_login.php');
    exit;
}
include'../connectionDb.php';
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>
<!-- Latest minified bootstrap css -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
     <?php include('./v_sidebar.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('./v_navbar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">

<div class="col-lg-4 order-lg-2">

    <div class="card shadow mb-4">
        <div class="card-profile-image mt-4">

        <div class="text-center">
            
        <img class="img-profile rounded-circle" style="font-size: 60px; height: 180px; width: 180px;"
                src="../assets/images/man.png">
        </div>
        
    
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h5 class="font-weight-bold">Bagus Andre Wijaya</h5>
                        <p>Administrator</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card-profile-stats">
                        <span class="heading">22</span>
                        <span class="description">Friends</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-profile-stats">
                        <span class="heading">10</span>
                        <span class="description">Photos</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-profile-stats">
                        <span class="heading">89</span>
                        <span class="description">Comments</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="col-lg-8 order-lg-1">

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">My Account</h6>
        </div>

        <div class="card-body">

            <form method="POST" action="{{ route('profile.update') }}" autocomplete="off">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="hidden" name="_method" value="PUT">

                <h6 class="heading-small text-muted mb-4">User information</h6>

                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="name">Name<span class="small text-danger">*</span></label>
                                <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ old('name', Auth::user()->name) }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group focused">
                                <label class="form-control-label" for="last_name">Last name</label>
                                <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Last name" value="{{ old('last_name', Auth::user()->last_name) }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email address<span class="small text-danger">*</span></label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="example@example.com" value="{{ old('email', Auth::user()->email) }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group focused">
                                <label class="form-control-label" for="current_password">Current password</label>
                                <input type="password" id="current_password" class="form-control" name="current_password" placeholder="Current password">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group focused">
                                <label class="form-control-label" for="new_password">New password</label>
                                <input type="password" id="new_password" class="form-control" name="new_password" placeholder="New password">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group focused">
                                <label class="form-control-label" for="confirm_password">Confirm password</label>
                                <input type="password" id="confirm_password" class="form-control" name="password_confirmation" placeholder="Confirm password">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button -->
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </div>
            </form>

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
                        <span>Copyright &copy; Bagus Andre 2020</span>
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
                <div class="modal-body">Apakah Anda Yakin Akan Melalukan Log Out? Tekan "Logout" untuk keluar halaman admin.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>
    

</body>

<?php include('../modal/modal_add.php')?>



</html>
