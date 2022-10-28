<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jurusan / Kelas</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=" {{ asset('sbadmin/css/sb-admin-2.min.css') }} " rel="stylesheet">

     <!-- Custom styles for this page -->
     <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">


</head>

<body>

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
               <div id="content">
               <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Jurusan / Kelas</h1>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Jurusan / Kelas</h6>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal2">
                        + Jurusan / Kelas
                    </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr> 
                        <th width=30%>Jurusan</th>
                        <th width=30%>Kelas</th>
                        <th width=30%>Edit / Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                             @foreach($jurusan as $row)
                            <tr>
                                <td>{{ $row->jurusan }}</td>
                                <td>{{ $row->kelas }}</td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#edit{{ $row->id }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-fw fa-pen"></i>
                                        edit
                                    </a>
                                    <a href="#" data-toggle="modal" data-target="#delete{{ $row->id }}" class="btn btn-danger btn-sm">
                                    <i class="fas fa-fw fa-trash"></i>
                                        delete
                                    </a>
                                </td>
                            </tr>
                            @include('blade.template.modal.editjurusan')
                            @include('blade.template.modal.deletejurusan')
                            @endforeach
                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>

            </div>
            </div>
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

                <!-- Modal Tambah Data-->
                @include('blade.template.modal.tambahjurusan')



                <!-- Bootstrap core JavaScript-->
                <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

                <!-- Core plugin JavaScript-->
                <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

                <!-- Custom scripts for all pages-->
                <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>

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