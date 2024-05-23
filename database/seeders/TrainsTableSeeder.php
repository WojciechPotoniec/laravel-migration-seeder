<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_train = new Train();
        $new_train->azienda = 'Trenitalia';
        $new_train->stazione_di_partenza = 'Milano';
        $new_train->stazione_di_arrivo = 'Napoli';
        $new_train->orario_di_partenza = '2022-12-12 08:00:00';
        $new_train->orario_di_arrivo = '2022-12-12 16:00:00';
        $new_train->numero_carrozze = 10;
        $new_train->codice_treno = '684351';
        $new_train->in_orario = false;
        $new_train->cancellato = true;
        $new_train->save();
    }
}
