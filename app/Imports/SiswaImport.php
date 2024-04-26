<?php

namespace App\Imports;

use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class SiswaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Siswa([
            'rombel'         => $row['rombel'],
            'nama'           => $row['nama'],
            'nipd'           => $row['nipd'],
            'jk'             => $row['jk'],
            'nisn'           => $row['nisn'],
            'tempat_lahir'   => $row['tempat_lahir'],
            'tanggal_lahir'  => $row['tanggal_lahir'],
            'nik'            => $row['nik'],
            'agama'          => $row['agama'],
            'alamat'         => $row['alamat'],
            'kelurahan'      => $row['kelurahan'],
            'kecamatan'      => $row['kecamatan'],
            'hp'             => $row['hp'],
            'data_ayah'      => $row['data_ayah'],
            'data_ibu'       => $row['data_ibu'],
            'no_kk'          => $row['no_kk'],
            'berat_badan'    => $row['berat_badan'],
            'tinggi_badan'   => $row['tinggi_badan'],
            'created_at'     => $row['created_at'], // jika data kolom waktu penciptaan tersedia
            'updated_at'     => $row['updated_at'], // jika data kolom waktu pembaruan tersedia
        ]);
    }
}
