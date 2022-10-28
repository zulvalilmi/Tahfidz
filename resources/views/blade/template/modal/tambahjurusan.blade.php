<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Jurusan/Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jurusan.store') }}" method="POST">
                        @csrf               
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" required name="jurusan" class="form-control" id="jurusan">            
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" required name="kelas" class="form-control" id="kelas">            
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
                  
        </div>
    </div>