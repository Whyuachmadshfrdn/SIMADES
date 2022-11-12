<?php

namespace App\Exports;

use App\Models\Warga;
use Maatwebsite\Excel\Concerns\FromCollection;
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

class WargaExport implements FromCollection, WithColumnFormatting, WithColumnWidths, WithHeadings, WithStyles, WithEvents, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // dd(NumberFormat::FORMAT_DATE_DDMMYYYY);
        return Warga::select(
            'kk',
            'nik_warga',
            'nama_warga',
            'jenis_kelamin',
            'tmpt_lahir',
            'tgl_lahir',
            'gol_darah',
            'agama',
            'status_perkawinan',
            'shdk',
            'pendidikan_akhir',
            'pekerjaan',
            'nama_ibu',
            'nama_ayah',
            'alamat',
            'kelurahan',
            'rt'
        )->get();
    }

    public function map($invoice): array
    {
        return [
            $invoice->kk,
            $invoice->nik_warga,
            $invoice->nama_warga,
            $invoice->jenis_kelamin,
            $invoice->tmpt_lahir,
            $invoice->tgl_lahir?$invoice->tgl_lahir->format('Y-m-d') : "2000-01-01",
            $invoice->gol_darah,
            $invoice->agama,
            $invoice->status_perkawinan,
            $invoice->shdk,
            $invoice->pendidikan_akhir,
            $invoice->pekerjaan,
            $invoice->nama_ibu,
            $invoice->nama_ayah,
            $invoice->alamat,
            $invoice->kelurahan,
            $invoice->rt,
            
        ];
    }

    public function columnFormats(): array
    {
        return [
            'A' => '#',
            'B' => '#',
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 18,
            'B' => 18,
            'C' => 20,
            'D' => 15,
            'E' => 15,
            'F' => 11,
            'G' => 12,
            'H' => 9,
            'I' => 21,
            'J' => 16,
            'K' => 20,
            'L' => 23,
            'M' => 20,
            'N' => 20,
            'O' => 43,
            'P' => 12,
            'Q' => 6,
        ];
    }

    public function headings(): array
    {
        return [
            'KK',
            'NIK_WARGA',
            'NAMA_WARGA',
            'JENIS_KELAMIN',
            'TMPT_LAHIR',
            'TGL_LAHIR',
            'GOL_DARAH',
            'AGAMA',
            'STATUS_PERKAWINAN',
            'SHDK',
            'PENDIDIKAN_AKHIR',
            'PEKERJAAN',
            'NAMA_IBU',
            'NAMA_AYAH',
            'ALAMAT',
            'KELURAHAN',
            'RT',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {

                $event->sheet->getDelegate()->getStyle('A1:Q1')
                    ->getAlignment()
                    ->setHorizontal(Alignment::HORIZONTAL_CENTER);
                $event->sheet->getDelegate()->getStyle('A1:Q1')
                    ->getFill()->applyFromArray([
                        'fillType' => 'solid',
                        'rotation' => 0, 
                        'color' => ['rgb' => '0000FF'],
                    ]);
            },
        ];
    }
}
