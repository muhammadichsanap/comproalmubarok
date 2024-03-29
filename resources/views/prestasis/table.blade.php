<div class="table-responsive">
    <table class="table" id="prestasis-table">
        <thead>
        <tr>
            <th>Nama Siswa</th>
        <th>Prestasi</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($prestasis as $prestasi)
            <tr>
                <td>{{ $prestasi->nama_siswa }}</td>
            <td>{{ $prestasi->prestasi }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['prestasis.destroy', $prestasi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prestasis.show', [$prestasi->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('prestasis.edit', [$prestasi->id]) }}"
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
