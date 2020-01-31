<?php

namespace Tests\Feature;

use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    use WithFaker;

    /** @test */
    public function a_user_can_added_company()
    {
        $this->withoutExceptionHandling();
        $attributes = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'type' => 1,
            'status' => 1
        ];

        \Log::info($attributes);
        $response = $this->post('companies', $attributes);

        $response->assertOk();
        $this->assertCount(1, Company::all());
    }
}
