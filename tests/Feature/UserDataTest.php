<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserDataTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_users_data()
    {
        $response = $this->get('/api/get_user');

        $response->assertJsonStructure([
            'status',
            'data'=>[
                [
                    'id',
                    'user_id',
                    'status',
                    'position',
                    'user' => [
                        'id',
                        'name',
                        'email',
                        'created_at',
                        'updated_at'
                    ]
                ]
            ],
        ]);
    }

    public function test_get_users_data_empty()
    {
        $response = $this->get('/api/get_user');

        $response->assertJsonStructure([
            'status',
            'data'=>[],
        ]);
    }

    public function test_get_user_data()
    {
        $response = $this->get('/api/get_user/1');

        $response->assertJsonStructure([
            'status',
            'data'=>[
                'id',
                'user_id',
                'status',
                'position',
                'user' => [
                    'id',
                    'name',
                    'email',
                    'created_at',
                    'updated_at'
                ]
            ],
        ]);
    }

    public function test_get_user_data_empty()
    {
        $response = $this->get('/api/get_user/999');

        $response->assertJsonStructure([
            'status',
            'data'=>[],
        ]);
    }

    public function test_post_user_data()
    {
        $response = $this->post('/api/post_user_data/1',[
            'position'=>'test',
            'status'=>'active'
        ]);

        $response->assertJsonStructure([
            'status',
            'data'=>[
                'id',
                'user_id',
                'status',
                'position',
                'user' => [
                    'id',
                    'name',
                    'email',
                    'created_at',
                    'updated_at'
                ]
            ],
        ]);
    }

    public function test_post_user_data_error()
    {
        $response = $this->post('/api/post_user_data/999',[
            'position'=>'test',
            'status'=>'active'
        ]);

        $response->assertJsonStructure([
            'status',
            'messages'=>[],
        ]);
    }

    public function test_put_user_data()
    {
        $response = $this->put('/api/put_user_data/1/1',[
            'position'=>'testaaa',
            'status'=>'active'
        ]);

        $response->assertJsonStructure([
            'status',
            'data'=>[
                'id',
                'user_id',
                'status',
                'position',
                'user' => [
                    'id',
                    'name',
                    'email',
                    'created_at',
                    'updated_at'
                ]
            ],
        ]);
    }

    public function test_put_user_data_empty()
    {
        $response = $this->put('/api/put_user_data/999/999',[
            'position'=>'testaaa',
            'status'=>'active'
        ]);

        $response->assertJsonStructure([
            'status',
            'data'=>[],
        ]);
    }

    public function test_delete_user_data()
    {
        $response = $this->delete('/api/delete_user_data/2');

        $response->assertJsonStructure([
            'status',
            'data'=>[],
        ]);
    }

    public function test_delete_user_data_empty()
    {
        $response = $this->delete('/api/delete_user_data/999');

        $response->assertJsonStructure([
            'status',
            'data'=>[],
        ]);
    }


}
