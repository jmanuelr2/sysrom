<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateStatusTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function un_usuario_autenticado_puede_crear_estados()
    {
        $this->withoutExceptionHandling();
        //1. Given
        $user = factory(User::class)->create();
        $this->actingAs($user);

        //2. when
         $this->post(route('statuses.store'),['body'=>'Mi primer estado']);

         //3. Then
        $this->assertDatabaseHas('statuses', [
            'body' => 'Mi primer estado'
        ]);
    }
}
