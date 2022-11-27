<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Pengajuan;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use Maatwebsite\Excel\Concerns\FromQuery;

class CetakLaporanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $tgl_awal;
    protected $tgl_akhir;

    public function __construct($tgl_awal, $tgl_akhir)
    {
        $this->tgl_awal= $tgl_awal;
        $this->tgl_akhir= $tgl_akhir;
    }

    public function collection()
    {
        $pengajuan = Pengajuan::join('users', 'user_id', '=', 'pengajuan.user_id' )
        ->where('status', 'selesai')
        ->where('users.role', 'warga')
        ->whereBetween('pengajuan.created_at',[ $this->tgl_awal,$this->tgl_akhir])
        ->select(
            'users.name',
            'pengajuan.status',
            'pengajuan.file',
            'pengajuan.created_at'
        )->get();
        return $pengajuan;
    }
}
