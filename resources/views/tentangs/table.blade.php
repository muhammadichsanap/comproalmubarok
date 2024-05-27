<div class="table-responsive">
    <table class="table" id="tentangs-table">
        <thead>
        <tr>
            <th>Tentang</th>
            {{--  <th colspan="3">Action</th> --}}
        </tr>
        </thead>
        <tbody>
        @foreach($tentangs as $tentang)
            <tr>
                <td>{{ $tentang->tentang }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tentangs.destroy', $tentang->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{--<a href="{{ route('tentangs.show', [$tentang->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        {{--  <a href="{{ route('tentangs.edit', [$tentang->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {{--{!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
