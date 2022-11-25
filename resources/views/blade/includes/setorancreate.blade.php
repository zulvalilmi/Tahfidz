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
                    <form action="{{ route('setoran.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama_santri">Nama Santri</label>
                                    <input type="text" value="{{ old('nama_santri') }}" name="nama_santri" class="form-control @error('nama_tahfidz') is-invalid @enderror" id="nama_santri">
                                    @error('nama_tahfidz')
                                    <div class="invalid-feedback">
                                        <span>{{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select class="custom-select @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan">
                                        <option value="">Pilih jurusan</option>
                                        @foreach($jurusan as $row)
                                        <option value="{{ $row->id }}" {{ old('jurusan') == $row->id ? 'selected' : '' }}>{{ $row->jurusan }}</option>
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
                                <div class="custom-file">
                                    <label class="custom-file-label @error('foto') is-invalid @enderror" for="foto">Foto Santri</label>
                                    <input type="file" class="custom-file-input" id="foto">
                                    @error('foto')
                                        <div class="invalid-feedback">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                   
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" value="{{ old('keterangan') }}" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" rows="3"></textarea>
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