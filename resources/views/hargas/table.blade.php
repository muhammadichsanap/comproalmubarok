<div class="table-responsive">
    <table class="table" id="hargas-table">
        <thead>
        <tr>
            <th>Pengembangan</th>
        <th>Pemeliharaan Gedung</th>
        <th>Peningkatan Mutu</th>
        <th>Kegiatan Belajar</th>
        <th>Buku Paket</th>
        <th>Seragam Putra</th>
        <th>Seragam Putri</th>
        <th>Spp</th>
        <th>Total Putra</th>
        <th>Total Putri</th>
           {{-- <th colspan="3">Action</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($hargas as $harga)
            <tr>
                <td>{{ $harga->pengembangan }}</td>
            <td>{{ $harga->pemeliharaan_gedung }}</td>
            <td>{{ $harga->peningkatan_mutu }}</td>
            <td>{{ $harga->kegiatan_belajar }}</td>
            <td>{{ $harga->buku_paket }}</td>
            <td>{{ $harga->seragam_putra }}</td>
            <td>{{ $harga->seragam_putri }}</td>
            <td>{{ $harga->spp }}</td>
            <td>{{ $harga->total_putra }}</td>
            <td>{{ $harga->total_putri }}</td>
                {{--<td width="120">
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
                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
