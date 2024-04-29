<div class="table-responsive">
    <table class="table" id="sekolahs-table">
        <thead>
        <tr>
            <th>Nama Sekolah</th>
        <th>Alamat Sekolah</th>
        <th>Akreditasi</th>
        <th>Kurikulum</th>
        <th>Jumlah Siswa</th>
        <th>Jam Belajar</th>
        <th>No Wa</th>
        <th>Email</th>
        <th>Gambar</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sekolahs as $sekolah)
            <tr>
                <td>{{ $sekolah->nama_sekolah }}</td>
            <td>{{ $sekolah->alamat_sekolah }}</td>
            <td>{{ $sekolah->akreditasi }}</td>
            <td>{{ $sekolah->kurikulum }}</td>
            <td>{{ $sekolah->jumlah_siswa }}</td>
            <td>{{ $sekolah->jam_belajar }}</td>
            <td>{{ $sekolah->no_wa }}</td>
            <td>{{ $sekolah->email }}</td>
            <td>{{ $sekolah->gambar }}</td>
            <td>
                @if($sekolah->gambar)
                    <img src="{{ asset('images/'.$sekolah->gambar) }}" alt="Gambar Sekolah" style="max-width: 100px;">
                @else
                    <p>No image available</p>
                @endif
            </td>
                <td width="120">
                    {!! Form::open(['route' => ['sekolahs.destroy', $sekolah->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sekolahs.show', [$sekolah->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sekolahs.edit', [$sekolah->id]) }}"
                           class='btn btn-default btn-xs'>
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
