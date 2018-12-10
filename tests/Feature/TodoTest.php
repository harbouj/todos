<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TodoTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_get_all_the_todos()
    {
        $todos = factory("App\Todo", 2)->create();
        $this->get("/todos")
            ->assertStatus(200)
            ->assertJson($todos->toArray());
    }

    /** @test */
    public function can_create_todo()
    {
        $todo = factory("App\Todo")->make()->toArray();

        $this->post('/todos', $todo)
            ->assertStatus(201)
            ->assertJson($todo);

        $this->assertDatabaseHas('todos', $todo);
    }
    /** @test */
    public function can_update_a_todo()
    {
        $todo = factory('App\Todo')->create()->toArray();
        $updated_todo = factory('App\Todo')->make()->toArray();
        $this->patch('/todos/'. $todo['id'], $updated_todo)
            ->assertStatus(200)
            ->assertJson($updated_todo);
        $this->assertDatabaseHas('todos', $updated_todo);
        $this->assertDatabaseMissing('todos', $todo);
    }
}
