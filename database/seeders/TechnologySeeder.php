<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints(); //taglia la relazione
        Technology::truncate();
        
        $technologies = ['HTML', 'CSS', 'Bootstrap', 'Vue', 'Vite', 'Javascript', 'Axios', 'PHP', 'MySQL', 'SQL', 'Laravel'];

        foreach($technologies as $technology) {
         $new_technology = new Technology();
          
         $new_technology->title = $technology;
         $new_technology->slug = Str::of( $new_technology->title)->slug();



         $new_technology->save();

        }

        Schema::enableForeignKeyConstraints();
    }
}
