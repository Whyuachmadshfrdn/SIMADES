<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use App\Models\User;


class iterasi3Test extends TestCase
{
    use WithFaker;

    public function testCreatepanduan()
    {
        $user = User::where('role', 'admin')->first();
            $response = $this->actingAs($user)
                ->post(route('panduan.store'), [
                    'judul' => $this->faker->word(),
                    'deskripsi' => $this->faker->word(),
                    'foto' => UploadedFile::fake()->create('test4.jpg', 1024),
                ]);
            $response->assertStatus(302);
    }

    public function testLihatpanduan()
    {
        $this->withExceptionHandling();
        $user = User::where('role','admin')->first();
            $response = $this->actingAs($user)
                ->get(route('panduan.show', 1));
            $response->assertStatus(200);
    }

    public function testEdit()
    {
        $user = User::where('role', 'admin')->first();
            $response = $this->actingAs($user)
                ->put(route('panduan.update', 1), [
                    'judul' => $this->faker->word(),
                    'deskripsi' => $this->faker->word(),
                    'foto' => UploadedFile::fake()->create('test4.jpg', 1024),
                ]);
            $response->assertStatus(302);
    }

    public function testDeletepanduan()
    {
        $user = User::where('role','admin')->first();
        $response = $this->actingAs($user)->get(route('panduan.destroy', 1));
        $response->assertStatus(200);
    }

    public function testCreatekategori()
    {
        $user = User::where('role', 'admin')->first();
            $response = $this->actingAs($user)
                ->post(route('add-kategori'), [
                    'jenis_surat' => 'SK IMB',
                    'deskripsi' => $this->faker->word(),
                    'icon' => 'fa-file-text-o',
                    'templete_surat' => UploadedFile::fake()->create('test4.jpg', 1024),
                ]);
            $response->assertStatus(302);
    }

}
