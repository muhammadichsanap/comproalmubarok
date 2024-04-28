<div class="table-responsive">
    <table class="table" id="kegiatans-table">
        <thead>
        <tr>
            <th>Nama Kegiatan</th>
        <th>Keterangan</th>
        <th>Gambar</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kegiatans as $kegiatan)
            <tr>
                <td>{{ $kegiatan->nama_kegiatan }}</td>
            <td>{{ $kegiatan->keterangan }}</td>
            <td>
                @if($kegiatan->gambar)
                    <img src="{{ asset('images/'.$kegiatan->gambar) }}" alt="Gambar Kegiatan" style="max-width: 100px;">
                @else
                    <p>No image available</p>
                @endif
            </td>
                <td width="120">
                    {!! Form::open(['route' => ['kegiatans.destroy', $kegiatan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('kegiatans.show', [$kegiatan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('kegiatans.edit', [$kegiatan->id]) }}"
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
