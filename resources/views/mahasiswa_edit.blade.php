<div class="modal-header">
    <h5 class="modal-title">Edit Data</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
</div>
<form action="javascript:formSubmit('modal_edit')" id="modal_edit"
    url="{{ route('mahasiswa.update') }}"
    method="post">
<div class="modal-body">
    @csrf
    <input type="hidden" name="id" value="{{ $data->id }}">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>NPM</label>
                <input type="text" class="form-control" name="npm" placeholder="NPM" value="{{ $data->npm }}" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ $data->nama }}" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" @if ($data->jenis_kelamin === 'Laki-laki') checked @endif>
                    <label class="form-check-label">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" @if ($data->jenis_kelamin === 'Perempuan') checked @endif>
                    <label class="form-check-label">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control"  name="alamat" value="{{ $data->alamat }}" placeholder="Alamat">
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" onclick="formSubmit('modal_edit')" class="btn btn-primary"><i id="msg_modal_edit"></i>  Save changes</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</form>
