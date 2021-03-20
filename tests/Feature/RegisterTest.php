<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_register()
    {
        $response = $this->post(route('register'), [
            'name' => 'test123',
            'email' => 'test123@gmail.com',
            'password' => 'test123',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('login.form'));
    }

    public function test_register_used_email()
    {
        $response = $this->post(route('register'), [
            'name' => 'test123',
            'email' => 'test@gmail.com',
            'password' => 'test123',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('register.form'));
    }
}
