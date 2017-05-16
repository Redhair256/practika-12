<?php
use App\Link;
use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Links::create([
			'token' => 0112,
			'target_url' => 'Yandex.ru'
		]);
        Links::create([
            'token' => 0113,
            'target_url' => 'Google.com'
        ]);
        Links::create([
            'token' => 0114,
            'target_url' => 'Yahoo.com'
        ]);
        Links::create([
            'token' => 0115,
            'target_url' => 'Bing.com'
        ]);
    }
}
