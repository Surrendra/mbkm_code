<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertBlogData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'title' => 'Prune tokens expired for more than specified number of hours',
            'description' => 'Lorem Ipsum',
            'created_user_id' => 1
        ]);
    }
}
