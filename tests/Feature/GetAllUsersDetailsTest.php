<?php

namespace Tests\Feature;

use Tests\TestCase;

class GetAllUsersDetailsTest extends TestCase
{
    public function test_get_all_users_details()
    {
        $response = $this->getJson('/api/get-all-users');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'users' => [
                         '*' => [
                             'id',
                             'name',
                             'email',
                             'role'
                         ]
                     ]
                 ]);
    }
}
