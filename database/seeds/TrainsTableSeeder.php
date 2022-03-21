<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company_name' => 'Trenitalia',
                'departure_station' => 'Roma',
                'arrival_station' => 'Napoli',
                'departure_time' => '2022-05-19 06:06:06',
                'arrival_time' => '2022-05-19 08:06:06',
                'code_number' => 'KE9482',
                'carriages' => 20,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station' => 'Milano',
                'arrival_station' => 'Torino',
                'departure_time' => '2022-05-19 06:06:06',
                'arrival_time' => '2022-05-19 08:06:06',
                'code_number' => 'UFG324',
                'carriages' => 20,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station' => 'Torino',
                'arrival_station' => 'Genova',
                'departure_time' => '2022-05-19 06:06:06',
                'arrival_time' => '2022-05-19 08:06:06',
                'code_number' => 'JKS3I9',
                'carriages' => 20,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station' => 'Milano',
                'arrival_station' => 'Bergamo',
                'departure_time' => '2022-05-19 06:06:06',
                'arrival_time' => '2022-05-19 09:06:06',
                'code_number' => 'K374JD',
                'carriages' => 20,
                'in_time' => false,
                'canceled' => false
            ],
            [
                'company_name' => 'Trenitalia',
                'departure_station' => 'Milano',
                'arrival_station' => 'Venezia',
                'departure_time' => '2022-05-19 06:06:06',
                'arrival_time' => '2022-05-19 09:06:06',
                'code_number' => 'NMDS32',
                'carriages' => 20,
                'in_time' => false,
                'canceled' => false
            ],
        ];


        foreach ($trains as $train) {
            $new_train =  new Train();
            $new_train->fill($train);
            $new_train->save();
        }
    }
}
