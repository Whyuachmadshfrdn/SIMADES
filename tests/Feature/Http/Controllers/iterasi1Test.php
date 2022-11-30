<?php

namespace Tests\Feature\Http\Controllers;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
// use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Foundation\Testing\WithoutMiddleware;
// use Maatwebsite\Excel\Facades\Excel;
// use App\Imports\WargaImport;
use App\Models\User;
use Tests\TestCase;

class iterasi1Test extends TestCase
{
    
    use WithFaker;

    public function testCreatewarga()
    {
        $user = User::where('role', 'admin')->first();
            $response = $this->actingAs($user)
                ->post(route('add-warga'), [
                    'kk' => '1234567890123456',
                    'nik_warga' => '1234567890123456',
                    'nama_warga' => $this->faker->name(),
                    'jenis_kelamin' => 'Laki-laki',
                    'tmpt_lahir' => 'girimukti',
                    'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                    'gol_darah' => 'A',
                    'agama' => 'islam',
                    'status_perkawinan' => 'Kawin',
                    'shdk' => 'Anak',
                    'pendidikan_akhir' => 'SMA',
                    'pekerjaan' => 'mahasiswa',
                    'nama_ibu' => 'ibu',
                    'nama_ayah' => 'ayah',
                    'alamat' => $this->faker->address(),
                    'kelurahan' => 'girimukti',
                    'rt' => '07',
                    'foto' => UploadedFile::fake()->create('test4.jpg', 1024),
                ]);
            $response->assertStatus(302); 
    }

    public function testLihatwarga()
    {
        $this->withExceptionHandling();
        $user = User::where('role','admin')->first();
            $response = $this->actingAs($user)
                ->get(route('warga-detail', 150));
            $response->assertStatus(200);
    }

    public function testEditwarga()
    {
        $user = User::where('role', 'admin')->first();
            $response = $this->actingAs($user)
                ->post(route('updatewarga', 150), [
                    'kk' => '1234567890123456',
                    'nik_warga' => '1234567890123456',
                    'nama_warga' => $this->faker->name(),
                    'jenis_kelamin' => 'Laki-laki',
                    'tmpt_lahir' => 'girimukti',
                    'tgl_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
                    'gol_darah' => 'A',
                    'agama' => 'islam',
                    'status_perkawinan' => 'Kawin',
                    'shdk' => 'Anak',
                    'pendidikan_akhir' => 'SMA',
                    'pekerjaan' => 'mahasiswa',
                    'nama_ibu' => 'ibu',
                    'nama_ayah' => 'ayah',
                    'alamat' => $this->faker->address(),
                    'kelurahan' => 'girimukti',
                    'rt' => '07',
                ]); 
            $response->assertStatus(302);
    }

    public function testDeletewarga()
    {
        $user = User::where('role','admin')->first();
        $response = $this->actingAs($user)->get(route('wargadelete', 150));
        $response->assertStatus(302);
    }


    // public function testImportwarga()
    // {
    //     Excel::fake();
    
    //     $this->actingAs($this->givenUser())
    //         ->get('/wargas/import/xlsx');

    //     Excel::assertImported('filename.xlsx', 'diskName');
        
    //     Excel::assertImported('filename.xlsx', 'diskName', function(WargaImport $import) {
    //         return true;
    //     });
        
    //     Excel::assertImported('filename.xlsx', function(WargaImport $import) {
    //         return true;
    //     });
    // }
}
