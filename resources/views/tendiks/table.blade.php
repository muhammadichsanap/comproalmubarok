<div class="table-responsive">
    <table class="table" id="tendiks-table">
        <thead>
        <tr>
            <th>Id</th>
        <th>Nama Pendidik</th>
        <th>Jabatan Pendidik</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tendiks as $tendik)
            <tr>
                <td>{{ $tendik->id }}</td>
            <td>{{ $tendik->nama_pendidik }}</td>
            <td>{{ $tendik->jabatan_pendidik }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tendiks.destroy', $tendik->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tendiks.show', [$tendik->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tendiks.edit', [$tendik->id]) }}"
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
