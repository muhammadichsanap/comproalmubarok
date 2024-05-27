<?php

namespace App\Exports;

use App\Models\Siswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class SiswaExport implements FromCollection
{
    public function collection()
    {
        return Siswa::select(
            'id',
            'rombel', 
            'nama', 
            'nipd', 
            'jk', 
            'nisn', 
            'tempat_lahir', 
            'tanggal_lahir', 
            'nik', 
            'agama', 
            'alamat', 
            'kelurahan', 
            'kecamatan', 
            'hp', 
            'data_ayah', 
            'data_ibu', 
            'no_kk', 
            'berat_badan', 
            'tinggi_badan'
        )->get();
    }
}