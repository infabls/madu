<?php

namespace Database\Seeders;

use App\Models\Orders;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

/**
 * Class OrdersTableSeeder.
 */
class OrdersSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run()
    {
        $this->disableForeignKeys();

        // Add the master administrator, Orders id of 1
        Orders::create([
            'id' => '1',
            'worksId' => '1',
            'name' => 'Алексей',
            'phone' => '87775552233',
            'email' => 'opa@mail.ru',
        ]);
        Orders::create([
            'id' => '2',
            'worksId' => '2',
            'name' => 'Виктор',
            'phone' => '87775552255',
            'email' => 'test@mail.ru',
        ]);

        $this->enableForeignKeys();
    }
}
