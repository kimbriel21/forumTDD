<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 10)->create();
        factory(\App\Thread::class, 10)->create();

        foreach (\App\Thread::get() as $thread)
        {
            factory(\App\Reply::class, 10)->create(['thread_id' => $thread->id]);
        }
    }
}
