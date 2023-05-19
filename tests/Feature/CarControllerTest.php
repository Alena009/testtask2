<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\User;
use Illuminate\Http\Response;

class CarControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public User $user;
    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    public function test_unauthorized_user_cant_make_mock_get_cars()
    {
        $this->json('get', 'api/mock-get-cars')
            ->assertStatus(401);
    }

    public function test_authorized_user_can_make_mock_get_cars()
    {
        $this->actingAs($this->user, 'api');

        $this->json('get', 'api/mock-get-cars')
            ->assertStatus(Response::HTTP_OK)
            ->assertJsonStructure(
                [
                    '*' => [
                        'id',
                        'make',
                        'model',
                        'year',
                    ]
                ]
            );
    }

    public function test_mock_add_car()
    {
        $this->actingAs($this->user, 'api');

        $payload = [
            'make'  => 'BMW',
            'model' => 'X5',
            'year'  => 2023
        ];

        $this->json('post', 'api/mock-add-car', $payload)
            ->assertStatus(Response::HTTP_CREATED)
            ->assertJsonStructure(
                [
                    'id',
                    'make',
                    'model',
                    'year',
                ]
            );

        $this->assertDatabaseHas('cars', $payload);
    }

    public function test_mock_get_car()
    {
        $this->actingAs($this->user, 'api');

        $testCar = Car::create([
            'make' => 'Tesla',
            'model' => 'Model X',
            'year' => 2023
        ]);

        $this->json('get', 'api/mock-get-car/' . $testCar->id)
            ->assertStatus(Response::HTTP_CREATED)
            ->assertJsonStructure(
                [
                    'id' => $testCar->id,
                    'make' => $testCar->make,
                    'model' => $testCar->model,
                    'year' => $testCar->year,
                ]
            );
    }
}
