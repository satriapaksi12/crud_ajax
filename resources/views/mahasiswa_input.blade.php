<div class="modal-header">
    <h5 class="modal-title">Tambah Data</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
    </button>
</div>
<form action="javascript:formSubmit('modal_input')" id="modal_input"
    url="{{ route('mahasiswa.create') }}"
    method="post">
<div class="modal-body">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>NPM</label>
                <input type="text" class="form-control" name="npm" placeholder="NPM" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
                    <label class="form-check-label">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
                    <label class="form-check-label">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control"  name="alamat" placeholder="Alamat">
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" onclick="formSubmit('modal_input')" class="btn btn-primary"><i id="msg_modal_input"></i>  Save changes</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</form>
