<?php

use Illuminate\Database\Seeder;

class AnimalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert(
            [
                'name'=>'cachuchin',
                'gender'=>'F',
                'arrivalState'=>1,
                'arrivalDate'=>'01-01-2000',
                'responsiblePerson'=>'Ana Perez',
                'responsiblePersonContact'=>'68073431',
                'responsiblePersonType'=>1,
                'generalDescription'=>'srkcvgbnmfghjghjbgnhjm',
                'foundAddress'=>'C. 1 Av. Avenida',
                'species_id'=>1
            ]
        );
    }
}
