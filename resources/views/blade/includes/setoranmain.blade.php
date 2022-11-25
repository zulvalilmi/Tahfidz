<div id="content">
               <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Rekapan Setoran</h1>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Kelas Tahfidz Akhwat</h6>
                        <a href="{{ route('setoran.create') }}" class="btn btn-info btn-sm">
                            + Rekapan Hafalan
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">   
                        @if(Session::get('Ok'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('Ok') }}
                        </div>
                        @endif
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr> 
                        <th>Foto</th>
                        <th>Nama Tahfidz</th>
                        <th>Jurusan</th>
                        <th>Surat Ziyadah</th>
                        <th>Ayat Ziyadah</th>
                        <th>Surat Murojaah</th>
                        <th>Ayat Murojaah</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                        </div>
                    </div>
                </div>

            </div>
            </div>