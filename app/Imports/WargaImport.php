<?php

namespace App\Imports;

use App\Models\Warga;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WargaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Warga([
            "kk" => $row['kk'],
            "nik_warga" => $row['nik_warga'],
            "nama_warga" => $row['nama_warga'],
            "jenis_kelamin" => $row['jenis_kelamin'],
            "tmpt_lahir" => $row['tmpt_lahir'],
            "tgl_lahir" => $row['tgl_lahir'],
            "gol_darah" => $row['gol_darah'],
            "agama" => $row['agama'],
            "status_perkawinan" => $row['status_perkawinan'],
            "shdk" => $row['shdk'],
            "pendidikan_akhir" => $row['pendidikan_akhir'],
            "pekerjaan" => $row['pekerjaan'],
            "nama_ibu" => $row['nama_ibu'],
            "nama_ayah" => $row['nama_ayah'],
            "alamat" => $row['alamat'],
            "kelurahan" => $row['kelurahan'],
            "rt" => $row['rt'],
        ]);
    }
}
