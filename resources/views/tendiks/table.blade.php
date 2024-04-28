<div class="table-responsive">
    <table class="table" id="tendiks-table">
        <thead>
            <tr>
                <th>Nama Pendidik</th>
                <th>Jabatan Pendidik</th>
                <th>Gambar</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tendiks as $tendik)
                <tr>
                    <td>{{ $tendik->nama_pendidik }}</td>
                    <td>{{ $tendik->jabatan_pendidik }}</td>
                    <td>
                        @if($tendik->gambar)
                            <img src="{{ asset('images/'.$tendik->gambar) }}" alt="Gambar Tendik" style="max-width: 100px;">
                        @else
                            <p>No image available</p>
                        @endif
                    </td>
                    <td>
                        <div class='btn-group'>
                            <a href="{{ route('tendiks.show', [$tendik->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('tendiks.edit', [$tendik->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::open(['route' => ['tendiks.destroy', $tendik->id], 'method' => 'delete']) !!}
                                {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>