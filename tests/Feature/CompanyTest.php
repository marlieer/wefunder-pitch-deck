<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_company()
    {
        $company = Company::factory()->make()->toArray();
        $response = $this->postJson('/api/company', $company);

        $response->assertStatus(200)
            ->assertJson(['created' => true]);
        $this->assertDatabaseHas('companies', $company);
    }
}
