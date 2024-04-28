<div class="table-responsive">
    <table class="table" id="prestasis-table">
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Prestasi</th>
                <th>Gambar</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prestasis as $prestasi)
                <tr>
                    <td>{{ $prestasi->nama_siswa }}</td>
                    <td>{{ $prestasi->prestasi }}</td>
                    <td>
                        @if($prestasi->gambar)
                            <img src="{{ asset('images/'.$prestasi->gambar) }}" alt="Gambar Prestasi" style="max-width: 100px;">
                        @else
                            <p>No image available</p>
                        @endif
                    </td>
            <td>
                <div class='btn-group'>
                    <a href="{{ route('prestasis.show', [$prestasi->id]) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-eye"></i>
                    </a>
                    <a href="{{ route('prestasis.edit', [$prestasi->id]) }}" class='btn btn-default btn-xs'>
                        <i class="far fa-edit"></i>
                    </a>
                    <form action="{{ route('prestasis.destroy', [$prestasi->id]) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-xs">
                            <i class="far fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
