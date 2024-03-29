<div class="table-responsive">
    <table class="table" id="alumnis-table">
        <thead>
        <tr>
            <th>Nama Alumni</th>
        <th>Tahun Lulus</th>
        <th>Smp</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($alumnis as $alumni)
            <tr>
                <td>{{ $alumni->nama_alumni }}</td>
            <td>{{ $alumni->tahun_lulus }}</td>
            <td>{{ $alumni->smp }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['alumnis.destroy', $alumni->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('alumnis.show', [$alumni->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('alumnis.edit', [$alumni->id]) }}"
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
