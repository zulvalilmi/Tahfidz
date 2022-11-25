<div class="modal fade" id="edit{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Jurusan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jurusan.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input value="{{ $row->jurusan }}" type="text" required name="jurusan" class="form-control" id="jurusan">
                            <input type="hidden" name="id" value="{{ $row->id }}">
                        </div>                
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input value="{{ $row->kelas }}" type="text" required name="kelas" class="form-control" id="jurusan">
                            <input type="hidden" name="id" value="{{ $row->id }}">
                        </div>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
                    </form>
        </div>
    </div>