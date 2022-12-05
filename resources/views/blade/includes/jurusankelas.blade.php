<div id="content">
               <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Jurusan / Kelas</h1>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-info">Jurusan / Kelas</h6>
                        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal2">
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

                <!-- Modal Tambah Data-->
                @include('blade.template.modal.tambahjurusan')

            </div>
            </div>
                <!-- End of Main Content -->

