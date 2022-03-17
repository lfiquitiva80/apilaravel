<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use JMac\Testing\Traits\AdditionalAssertions;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EmployeeController
 */
class EmployeeControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    /**
     * @test
     */
    public function index_behaves_as_expected()
    {
        $employees = Employee::factory()->count(3)->create();

        $response = $this->get(route('employee.index'));

        $response->assertOk();
        $response->assertJsonStructure([]);
    }


    /**
     * @test
     */
    public function store_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EmployeeController::class,
            'store',
            \App\Http\Requests\EmployeeStoreRequest::class
        );
    }

    /**
     * @test
     */
    public function store_saves()
    {
        $title = $this->faker->sentence(4);

        $response = $this->post(route('employee.store'), [
            'title' => $title,
        ]);

        $employees = Employee::query()
            ->where('title', $title)
            ->get();
        $this->assertCount(1, $employees);
        $employee = $employees->first();

        $response->assertCreated();
        $response->assertJsonStructure([]);
    }


    /**
     * @test
     */
    public function update_uses_form_request_validation()
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\EmployeeController::class,
            'update',
            \App\Http\Requests\EmployeeUpdateRequest::class
        );
    }

    /**
     * @test
     */
    public function update_behaves_as_expected()
    {
        $employee = Employee::factory()->create();
        $title = $this->faker->sentence(4);

        $response = $this->put(route('employee.update', $employee), [
            'title' => $title,
        ]);

        $employee->refresh();

        $response->assertOk();
        $response->assertJsonStructure([]);

        $this->assertEquals($title, $employee->title);
    }


    /**
     * @test
     */
    public function destroy_deletes_and_responds_with()
    {
        $employee = Employee::factory()->create();

        $response = $this->delete(route('employee.destroy', $employee));

        $response->assertNoContent();

        $this->assertDeleted($employee);
    }
}
