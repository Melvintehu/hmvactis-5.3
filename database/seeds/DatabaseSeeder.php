<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        // $this->call(NewsTableSeeder::class);
        // $this->call(PagesTableSeeder::class);
        // $this->call(SponsorsTableSeeder::class);
        // $this->call(CommitteesTableSeeder::class);
        // $this->call(CommitteesMembersTableSeeder::class);
        //$this->call(BoardsTableSeeder::class);
        $this->call(BoardMembersTableSeeder::class);
    }
}
