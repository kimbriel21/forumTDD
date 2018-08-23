<?php

namespace Tests\Feature;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadsTest extends TestCase
{


    /** @test*/
    public function a_user_can_view_all_threads()
    {
        $thread = factory('App\Thread')->create();
        $threadCount = Thread::count();
        $response = $this->get('/threads');
        $response->assertSee($thread->title);
        $this->assertEquals($threadCount, $threadCount);

    }

    /** @test*/
    public function a_user_can_view_one_thread()
    {
        $thread = factory('App\Thread')->create();
        $response2 = $this->get('/threads/' . $thread->id);
        $response2->assertSee($thread->title);
    }
}
