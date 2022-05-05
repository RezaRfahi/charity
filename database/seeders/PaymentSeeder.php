<?php

namespace Database\Seeders;

use App\Models\Payment;
use Carbon\Factory;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::factory()->count(20)->create();
    }
}
