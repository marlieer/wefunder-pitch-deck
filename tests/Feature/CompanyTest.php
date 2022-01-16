<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Company;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CompanyTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_company()
    {
        $company = Company::factory()->make()->toArray();
        $response = $this->postJson(route('company.store'), $company);

        $response->assertStatus(200)
            ->assertJson(['created' => true]);
        $this->assertDatabaseHas('companies', $company);
    }

    public function test_index_company() 
    {
        $companies = Company::factory()->count(10)->create();
        $response = $this->getJson(route('company.index'));
        $response->assertStatus(200)
            ->assertJson($companies->toArray());
    }
}
