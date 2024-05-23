<?php

namespace App\Imports;

use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class SiswaImport implements ToModel, WithChunkReading
{
    public function model(array $row)
    {
        return new Siswa([
            'id'             => $row[0] ?? null,
            'rombel'         => $row[1] ?? null,
            'nama'           => $row[2] ?? null,
            'nipd'           => $row[3] ?? null,
            'jk'             => $row[4] ?? null,
            'nisn'           => $row[5] ?? null,
            'tempat_lahir'   => $row[6] ?? null,
            'tanggal_lahir'  => $row[7] ?? null,
            'nik'            => $row[8] ?? null,
            'agama'          => $row[9] ?? null,
            'alamat'         => $row[10] ?? null,
            'kelurahan'      => $row[11] ?? null,
            'kecamatan'      => $row[12] ?? null,
            'hp'             => $row[13] ?? null,
            'data_ayah'      => $row[14] ?? null,
            'data_ibu'       => $row[15] ?? null,
            'no_kk'          => $row[16] ?? null,
            'berat_badan'    => $row[17] ?? null,
            'tinggi_badan'   => $row[18] ?? null
        ]);
    }

    public function chunkSize(): int
    {
        return 500; 
    }
}