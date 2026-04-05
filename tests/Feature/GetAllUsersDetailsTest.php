<?php

namespace Tests\Feature;

use Tests\TestCase;

class GetAllUsersDetailsTest extends TestCase
{
  public function test_get_all_users_details(){
           $response = $this-> getJson(uri: '/api/get-all-users');
           dd($response->json());
  }
}
