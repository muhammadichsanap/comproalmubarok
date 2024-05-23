<table class="table table-responsive-sm table-striped" id="visis-table">
    <thead>
        <tr>
            <th>Visi</th>
        </tr>
    </thead>
    <tbody>
    @foreach($visis as $visi)
        <tr>
            <td>{{ $visi->visi }}</td>
            <td>
                <div class='btn-group'>
                    {{--<a href="{{ route('visis.show', [$visi->id]) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                    </a>
                    <a href="{{ route('visis.edit', [$visi->id]) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-edit"></i>
                    </a>
                    {!! Form::button('<i class="far fa-trash-alt"></i>', [
                        'type' => 'submit',
                        'class' => 'btn btn-danger btn-xs',
                        'onclick' => "return confirm('Are you sure?')"
                    ]) !!}
                    --}}
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>