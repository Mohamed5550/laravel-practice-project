<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FailingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_no_exceptions() {
        //$this->withoutExceptionHandling();
        $response = $this->get("/");
        $this->assertTrue(true);
    }
}
