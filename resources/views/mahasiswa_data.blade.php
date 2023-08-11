<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">NPM</th>
            <th scope="col">NAMA</th>
            <th scope="col">JENIS KELAMIN</th>
            <th scope="col">ALAMAT</th>
            <th scope="col">AKSI</th>
        </tr>
    </thead>
    <tbody>
        @if(count($data) > 0)
            <?php $no=1; ?>
            @foreach($data as $v)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $v->npm }}</td>
                <td>{{ $v->nama }}</td>
                <td>{{ $v->jenis_kelamin }}</td>
                <td>{{ $v->alamat }}</td>
                <td><button class="btn btn-info" onclick="edit({{ $v->id }})">Edit</button> <button class="btn btn-danger" onclick="hapus({{ $v->id }})">Hapus</button></td>
            </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6" class="text-center">Data tidak ada...</td>
            </tr>
        @endif
    </tbody>
</table>
