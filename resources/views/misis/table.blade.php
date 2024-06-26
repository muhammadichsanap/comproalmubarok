<div class="table-responsive">
    <table class="table" id="misis-table">
        <thead>
        <tr>
            <th>Misi</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($misis as $misi)
            <tr>
                <td>{{ $misi->misi }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['misis.destroy', $misi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('misis.show', [$misi->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('misis.edit', [$misi->id]) }}"
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
