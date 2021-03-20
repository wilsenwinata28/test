<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_login()
    {
        $response = $this->post(route('login'), [
            'email' => 'test@gmail.com',
            'password' => 'test123',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('dashboard'));
    }

    public function test_login_wrong_password()
    {
        $response = $this->post(route('login'), [
            'email' => 'test@gmail.com',
            'password' => 'test1234',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('login.form'));
    }

    public function test_logout()
    {
        $response = $this->get(route('logout'));

        $response->assertStatus(302);
        $response->assertRedirect(route('login.form'));
    }


}
