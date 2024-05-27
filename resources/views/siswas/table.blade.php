<div class="table-responsive">
    <table class="table" id="siswas-table">
        <thead>
        <tr>
            <th>Rombel</th>
            <th>Nama</th>
            <th>Nipd</th>
            <th>Jk</th>
            <th>Nisn</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Nik</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Hp</th>
            <th>Data Ayah</th>
            <th>Data Ibu</th>
            <th>No Kk</th>
            <th>Berat Badan</th>
            <th>Tinggi Badan</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($siswas as $siswa)
            <tr>
                <td>{{ $siswa->rombel }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->nipd }}</td>
                <td>{{ $siswa->jk }}</td>
                <td>{{ $siswa->nisn }}</td>
                <td>{{ $siswa->tempat_lahir }}</td>
                <td>{{ $siswa->tanggal_lahir }}</td>
                <td>{{ $siswa->nik }}</td>
                <td>{{ $siswa->agama }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>{{ $siswa->kelurahan }}</td>
                <td>{{ $siswa->kecamatan }}</td>
                <td>{{ $siswa->hp }}</td>
                <td>{{ $siswa->data_ayah }}</td>
                <td>{{ $siswa->data_ibu }}</td>
                <td>{{ $siswa->no_kk }}</td>
                <td>{{ $siswa->berat_badan }}</td>
                <td>{{ $siswa->tinggi_badan }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['siswas.destroy', $siswa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('siswas.show', [$siswa->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('siswas.edit', [$siswa->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
