<div class="table-responsive">
    <table class="table" id="visiMisis-table">
        <thead>
        <tr>
            <th>Visi</th>
        <th>Misi</th>
        <th>Tentang</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($visiMisis as $visiMisi)
            <tr>
                <td>{{ $visiMisi->visi }}</td>
            <td>{{ $visiMisi->misi }}</td>
            <td>{{ $visiMisi->tentang }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['visiMisis.destroy', $visiMisi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('visiMisis.show', [$visiMisi->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('visiMisis.edit', [$visiMisi->id]) }}"
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
