<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $data = [];
        $images = [
            '01.jpg',
            '02.jpg',
            '03.jpg',
            '04.jpg',
            '05.jpg',
            '06.jpg',
            '07.jpg',
            '08.jpg'
        ];
        for ($i = 1; $i <= 90; $i++) {
            $data[] = [
                'product_id' => $i,
                'name' => $faker->randomElement($images),
            ];
        }
        DB::table('images')->insert($data);
    }
}
