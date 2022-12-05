<div id="content">
               <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">+ Rekapan Setoran</h1>


                <!-- DataTales Example -->
                <div class="card shadow mb-4">

                    <div class="card-header py-3 d-flex justify-content-between align-items-center">
                        <h6 class="m-0 font-weight-bold text-primary">Kelas Tahfidz Akhwat</h6>
                    </div>
                    
                    <div class="card-body">
                    <form action="{{ route('setoran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_tahfidz">Nama Santri</label>
                                    <input type="text" value="{{ old('nama_tahfidz') }}" name="nama_tahfidz" class="form-control @error('nama_tahfidz') is-invalid @enderror" id="nama_tahfidz">
                                    @error('nama_tahfidz')
                                    <div class="invalid-feedback">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jurusan_id">Jurusan</label>
                                    <select class="custom-select @error('jurusan_id') is-invalid @enderror" name="jurusan_id" id="jurusan_id">
                                        <option value="">Pilih jurusan</option>
                                        @foreach($jurusan as $row)
                                        <option value="{{ $row->id }}" {{ old('jurusan_id') == $row->id ? 'selected' : '' }}>{{ $row->jurusan }}</option>
                                        @endforeach
                                    </select>
                                    @error('jurusan')
                                        <div class="invalid-feedback">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="surat_ziyadah">Surat Ziyadah</label>
                                    <input type="text" value="{{ old('surat_ziyadah') }}" name="surat_ziyadah" class="form-control @error('surat_ziyadah') is-invalid @enderror" id="surat_ziyadah">
                                    @error('surat_ziyadah')
                                        <div class="invalid-feedback">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div> 
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ayat_ziyadah">Ayat Ziyadah</label>
                                    <input type="text" value="{{ old('ayat_ziyadah') }}" name="ayat_ziyadah" class="form-control @error('ayat_ziyadah') is-invalid @enderror" id="ayat_ziyadah">
                                    @error('ayat_ziyadah')
                                        <div class="invalid-feedback">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="surat_murojaah">Surat Murojaah </label>
                                <input type="text" value="{{ old('surat_murojaah') }}" name="surat_murojaah" class="form-control @error('ayat_ziyadah') is-invalid @enderror" id="surat_murojaah">
                                @error('surat_murojaah')
                                        <div class="invalid-feedback">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                            </div>  
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ayat_murojaah">Ayat Murojaah</label>
                                    <input type="text" value="{{ old('ayat_murojaah') }}" name="ayat_murojaah" class="form-control @error('ayat_ziyadah') is-invalid @enderror" id="ayat_murojaah">
                                    @error('ayat_murojaah')
                                        <div class="invalid-feedback">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <div class="custom-file" id="foto">
                                    <label class="custom-file-label " for="foto">Foto Santri</label>
                                    <input type="file" name="foto" class="custom-file-input @error('foto') is-invalid @enderror" id="foto">
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                   
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" rows="3">{{ old('keterangan') }}</textarea>
                                @error('keterangan')
                                        <div class="invalid-feedback">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                            </div>
                    
                   
                    <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                    </div>
                </div>

            </div>
            </div>