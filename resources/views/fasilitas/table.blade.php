<div class="table-responsive">
    <table class="table" id="fasilitas-table">
        <thead>
        <tr>
            <th>Nama Fasilitas</th>
        <th>Keterangan Fasilitas</th>
        <th>Jumlah Fasilitas</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($fasilitas as $fasilitas)
            <tr>
                <td>{{ $fasilitas->nama_fasilitas }}</td>
            <td>{{ $fasilitas->keterangan_fasilitas }}</td>
            <td>{{ $fasilitas->jumlah_fasilitas }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['fasilitas.destroy', $fasilitas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fasilitas.show', [$fasilitas->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('fasilitas.edit', [$fasilitas->id]) }}"
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
