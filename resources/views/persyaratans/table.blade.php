<div class="table-responsive">
    <table class="table" id="persyaratans-table">
        <thead>
        <tr>
            <th>Syarat</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($persyaratans as $persyaratan)
            <tr>
                <td>{{ $persyaratan->syarat }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['persyaratans.destroy', $persyaratan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('persyaratans.show', [$persyaratan->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('persyaratans.edit', [$persyaratan->id]) }}"
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
