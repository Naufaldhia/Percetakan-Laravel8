<?php

namespace App\Exports;


use App\Models\Pengaturan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PengaturanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pengaturan::all();
    }
}
