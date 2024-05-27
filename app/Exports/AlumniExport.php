<?php

namespace App\Exports;

use App\Models\Alumni;
use Maatwebsite\Excel\Concerns\FromCollection;

class AlumniExport implements FromCollection
{
    public function collection()
    {
        return Alumni::select('nama_alumni', 'tahun_lulus', 'smp')->get();
    }

    public function headings(): array
    {
        return [
            'Nama Alumni',
            'Tahun Lulus',
            'Smp',
        ];
    }   
}