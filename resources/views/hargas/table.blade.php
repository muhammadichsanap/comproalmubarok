<div class="table-responsive">
    <table class="table" id="hargas-table">
        <thead>
        <tr>
            <th>Uang Gedung</th>
        <th>Uang Masuk</th>
        <th>Spp</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($hargas as $harga)
            <tr>
                <td>{{ $harga->uang_gedung }}</td>
            <td>{{ $harga->uang_masuk }}</td>
            <td>{{ $harga->spp }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['hargas.destroy', $harga->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('hargas.show', [$harga->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('hargas.edit', [$harga->id]) }}"
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
