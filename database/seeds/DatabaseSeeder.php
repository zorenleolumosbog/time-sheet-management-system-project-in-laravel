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
        $this->call(ProjectSeed::class);
        $this->call(RoleSeed::class);
        $this->call(WorkTypeSeed::class);
        $this->call(TimeEntrySeed::class);
        $this->call(UserSeed::class);
    }
}
