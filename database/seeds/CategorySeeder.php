<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('categories')->delete();
//        factory(Category::class, 20)->create();
        $categories = [
            ['id' => 1, 'category' => 'Arte'],
            ['id' => 2, 'category' => 'Cualidades'],
            ['id' => 3, 'category' => 'Defectos'],
            ['id' =>4, 'category' => 'Miseláneas'],
            ['id' =>5, 'category' => 'Naturaleza'],
            ['id' =>6, 'category' => 'Pensamientos'],
            ['id' =>7, 'category' => 'Sentimientos'],
            ['id' =>8, 'category' => 'Tiempo'],
            ['id' =>9, 'category' => 'Piropos'],
            ['id' =>10, 'category' => 'Chistes'],
        ];

        foreach ($categories as $category){
            Category::create($category);
        }
    }
}
