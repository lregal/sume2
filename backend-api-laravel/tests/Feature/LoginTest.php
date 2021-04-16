<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testValidLogin()
    {
        $response = $this->post('/api/auth/login',
                                ['email'=> 'admin@admin.com', 'password'=>'1234']);

        $response->assertStatus(200);
        $content = json_decode($response->getContent(),true);

        $this->assertArrayHasKey('permissions',$content);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInvalidLogin()
    {
        $response = $this->post('/api/auth/login',
                                ['email'=> 'inexisting@user.com', 'password'=>'12341565']);

        $response->assertStatus(401);
    }
}
