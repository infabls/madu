<?php

namespace Database\Seeders;

use App\Models\Grant;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

/**
 * Class GrantsTableSeeder.
 */
class GrantsSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, Grants id of 1
        Grant::create([
            'id' => '1',
            'name' => 'Грант 1 в процессе проведения',
            'status' => 'started',
            'starts_at' => now(),
            'ends_at' => now()->subDays(30),
        ]);
        Grant::create([
            'id' => '2',
            'name' => 'Грант 2 закончен',
            'status' => 'ended',
            'starts_at' => date("2020-11-22 12:00:00"),
            'ends_at' => date("2020-12-22 12:00:00"),
            'winner_id' => '2',
        ]);
        Grant::create([
            'id' => '3',
            'name' => 'Грант 3 еще не начался',
            'status' => 'notstarted',
            'starts_at' => date("2020-12-24 12:00:00"),
            'ends_at' => date("2021-01-24 12:00:00"),
        ]);

        $this->enableForeignKeys();
    }
}
