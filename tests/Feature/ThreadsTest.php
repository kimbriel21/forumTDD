<?php

namespace Tests\Feature;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadsTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->thread = factory('App\Thread')->create();
    }

    /** @test*/
    public function a_user_can_view_all_threads()
    {
        $this->get('/threads')
            ->assertSee($this->thread->title);

    }

    /** @test*/
    public function a_user_can_view_one_thread()
    {
        $this->get('/thread/' . $this->thread->id)
            ->assertSee($this->thread->body);
    }

    /** @test*/
    public function a_user_can_read_and_reply_that_are_associated_with_the_threads()
    {
        $reply = factory('App\Reply')->create(['thread_id' => $this->thread->id]);
        $this->get('/thread/' . $this->thread->id)
        ->assertSee($reply->body);
    }
}
