<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use App\Functions\Helpers as Help;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //** metodo per popolare un db tramite seeder usando dei faker */
        for ($i = 0; $i < 5; $i++) {
            $new_train = new Train();
            $new_train->azienda = $faker->company();
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->dateTimeThisMonth('now');
            $new_train->orario_di_arrivo = $faker->dateTimeThisMonth('+6 days');
            $new_train->numero_carrozze = $faker->numberBetween(1, 20);
            $new_train->codice_treno = $faker->randomNumber(6);
            $new_train->in_orario = false;
            $new_train->cancellato = true;
            $new_train->save();
        }
    }
}
//**Metodo statico per popolare un db tramite seeder */
// {
//     $new_train = new Train();
//     $new_train->azienda = 'Trenitalia';
//     $new_train->stazione_di_partenza = 'Milano';
//     $new_train->stazione_di_arrivo = 'Napoli';
//     $new_train->orario_di_partenza = '2022-12-12 08:00:00';
//     $new_train->orario_di_arrivo = '2022-12-12 16:00:00';
//     $new_train->numero_carrozze = 10;
//     $new_train->codice_treno = '684351';
//     $new_train->in_orario = false;
//     $new_train->cancellato = true;
//     $new_train->save();
// }

//** metodo con json per popolare un db usiamo questa sintassi: */
// $trains = json_decode(file_get_contents(__DIR__ . '/train.json'), true);
// foreach ($trains as $train) {
// $new_train = new Train();
// $new_train->azienda = $train['azienda'];
// $new_train->stazione_di_partenza = $train['stazione_di_partenza'];
// $new_train->stazione_di_arrivo = $train['stazione_di_arrivo'];
// $new_train->orario_di_partenza = $train['orario_di_partenza'];
// $new_train->orario_di_arrivo = $train['orario_di_arrivo'];
// $new_train->numero_carrozze = $train['numero_carrozze'];
// $new_train->codice_treno = $train['codice_treno'];
// $new_train->in_orario = $train['in_orario'];
// $new_train->cancellato = $train['cancellato'];
// $new_train->save();
// }

//** metodo con csv per popolare un db */
// $path = __DIR__ . '/trains.csv';
// $data = Help::getCsvData($path);
// dd($data);
// foreach ($data as $index => $train) {
//     if ($index !== 0) {
//         $new_train = new Train();
//         $new_train->address = $train[2];
//         $new_train->city = $train[4];
//         $new_train->state = $train[5];
//         $new_train->description = $train[10];
//         $new_train->price = $train[11];
//         $new_train->square_meters = $train[6];
//         $new_train->save();
//     }