<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Catatan</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href=" {{ asset('sbadmin/css/sb-admin-2.min.css') }} " rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('blade.includes.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            

                <!-- Topbar -->
                @include('blade.includes.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                @include('blade.includes.setorancreate')
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Zulva Al 'Ilmi</span>
                    </div>
                </div>
            </footer>
                <!-- End of Footer -->

             
            <!-- End of Content Wrapper -->

        </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('blade.includes.modallogout');


                <!-- Bootstrap core JavaScript-->
                <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                <!-- Core plugin JavaScript
                <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

                Custom scripts for all pages
                <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script> -->

                <!-- Page level plugins -->
                <script src="{{ asset('sbadmin/vendor/chart.js/Chart.min.js') }}"></script>

                <!-- Page level custom scripts -->
                <script src="{{ asset('sbadmin/js/demo/chart-area-demo.js') }}"></script>
                <script src="{{ asset('sbadmin/js/demo/chart-pie-demo.js') }}"></script>

                <!-- Page level plugins -->
                <script src="{{ asset('sbadmin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
                <script src="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

                <!-- Page level custom scripts -->
                <script src="{{ asset('sbadmin/js/demo/datatables-demo.js')}}"></script>
    </body>

</html>