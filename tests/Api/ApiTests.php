<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskApiTest extends TestCase
{
protected string $base_url = 'http://localhost:8000';
    use WithFaker;

    /**
     * Test user authentication and token return.
     */
    public function test_authenticates_user_and_returns_a_token()
    {
        $response = $this->postJson("{$this->base_url}/login", [
                "email"=> "johndoe@example.com",
                "password" => "Password123!"
        ]);

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'status',
                     'message',
                     'data' // The token should be here
                 ]);
    }

    /**
     * Test XSRF token retrieval for subsequent requests.
     */
    public function test_gets_xsrf_token_for_subsequent_requests()
    {
        $response = $this->getJson("{$this->base_url}/sanctum/csrf-cookie");

        $response->assertStatus(204); // No content response expected
    }

    /**
     * Test creating a new task.
     */
    public function test_creates_a_new_task()
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer 9|w0ujRSMW1zhhJBKncJm4dRonhyWYG0fGn9rpXxWb28280b19',
        ])->postJson('/api/tasks', [
            'title' => 'task token',
            'description' => 'random',
            'status' => 'pending',
            'due_date' => '2024-04-13',
            'priority' => 'low',
            'user_id' => 1,
        ]);

        $response->assertStatus(201)
                 ->assertJsonPath('status', 'success')
                 ->assertJsonPath('message', 'Task created successfully');
    }

    /**
     * Test updating an existing task.
     */
    public function test_updates_an_existing_task()
    {
        $taskId = 12; // Use a valid task ID
        $response = $this->withHeaders([
            'Authorization' => 'Bearer 9|w0ujRSMW1zhhJBKncJm4dRonhyWYG0fGn9rpXxWb28280b19',
        ])->putJson("{$this->base_url}/api/tasks/$taskId", [
            'title' => 'updated title',
            'description' => 'updated description',
        ]);

        $response->assertStatus(200)
                 ->assertJsonPath('status', 'success')
                 ->assertJsonPath('message', 'Task updated successfully');
    }

    /**
     * Test retrieving a single task.
     */
    public function test_retrieves_a_single_task()
    {
        $taskId = 12; // Use a valid task ID
        $response = $this->withHeaders([
            'Authorization' => 'Bearer 9|w0ujRSMW1zhhJBKncJm4dRonhyWYG0fGn9rpXxWb28280b19',
        ])->getJson("{$this->base_url}/api/tasks/$taskId");

        $response->assertStatus(200)
                 ->assertJsonPath('status', 'success')
                 ->assertJsonPath('message', 'Task fetched successfully');
    }

    /**
     * Test retrieving all tasks.
     */
    public function test_retrieves_all_tasks()
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer 9|w0ujRSMW1zhhJBKncJm4dRonhyWYG0fGn9rpXxWb28280b19',
        ])->getJson("{$this->base_url}/api/tasks");

        $response->assertStatus(200)
                 ->assertJsonPath('status', 'success')
                 ->assertJsonPath('message', 'Tasks fetched successfully');
    }

    /**
     * Test deleting a task.
     */
    public function test_deletes_a_task()
    {
        $taskId = 12; // Use a valid task ID
        $response = $this->withHeaders(['Authorization' => 'Bearer 9|w0ujRSMW1zhhJBKncJm4dRonhyWYG0fGn9rpXxWb28280b19'])->deleteJson("{$this->base_url}/api/tasks/$taskId");

        $response->assertStatus(200)
                 ->assertJsonPath('status', 'success')
                 ->assertJsonPath('message', 'Task deleted successfully');
    }

    /**
     * Test logging out a user.
     */
    public function test_logs_out_the_user()
    {
        $response = $this->withHeaders([
            'Authorization' => 'Bearer 9|w0ujRSMW1zhhJBKncJm4dRonhyWYG0fGn9rpXxWb28280b19',
        ])->postJson('/logout', []);

        $response->assertStatus(204); // No content response expected
    }
}