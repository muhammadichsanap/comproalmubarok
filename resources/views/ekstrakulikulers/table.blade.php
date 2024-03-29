<div class="table-responsive">
    <table class="table" id="ekstrakulikulers-table">
        <thead>
        <tr>
            <th>Nama Ekstrakulikuler</th>
        <th>Keterangan Ekstrakulikuler</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ekstrakulikulers as $ekstrakulikuler)
            <tr>
                <td>{{ $ekstrakulikuler->nama_ekstrakulikuler }}</td>
            <td>{{ $ekstrakulikuler->keterangan_ekstrakulikuler }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ekstrakulikulers.destroy', $ekstrakulikuler->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ekstrakulikulers.show', [$ekstrakulikuler->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ekstrakulikulers.edit', [$ekstrakulikuler->id]) }}"
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
