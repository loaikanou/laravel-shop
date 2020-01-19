<?php

use App\Order;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'user_id' => 1,
            'date' => Carbon::today(),
            'address' => 'Riyadh, KSA',
            'status' => 1
        ]);

        Order::create([
            'user_id' => 1,
            'date' => Carbon::today(),
            'address' => 'Dubai, UAE',
            'status' => 1
        ]);

        Order::create([
            'user_id' => 2,
            'date' => Carbon::today(),
            'address' => 'Almadenah, KSA',
            'status' => 1
        ]);
    }
}
