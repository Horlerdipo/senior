<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $query = "
INSERT INTO `configs` (`id`, `type`, `key`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'payment', 'paystack_public_key', 'pk_test_827262a6601858a4561bfb93b4199efa258b6f75', 1, '2021-06-25 17:23:26', '2021-06-25 17:23:26'),
(2, 'Payment', 'paystack_secret_key', 'sk_test_4454a97a5eed44ea44628cf1823bf316678cf3b2', 1, '2021-06-25 17:25:06', '2021-06-25 17:25:06'),
(3, 'Payment', 'paystack_payment_url', 'https://api.paystack.co', 1, '2021-06-25 17:26:02', '2021-06-25 17:26:02');";
        DB::unprepared($query);



    }
}
