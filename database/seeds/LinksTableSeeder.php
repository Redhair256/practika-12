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
        $timeRec = time();
        Link::create([
			'token' => 0112,
			'target_url' => 'https://Yandex.ru'
		]);
        $timeRec = $timeRec +10;
        Link::create([
            'token' => 0113,
            'target_url' => 'https://Google.com',
            'created_ad' => date('Y-m-d H:i:s', $timeRec)
        ]);
        $timeRec = $timeRec +10;
        Link::create([
            'token' => 0114,
            'target_url' => 'https://Yahoo.com',
            'created_ad' => date('Y-m-d H:i:s', $timeRec)
        ]);
        $timeRec = $timeRec +10;
        Link::create([
            'token' => 0115,
            'target_url' => 'https://Bing.com',
            'created_ad' => date('Y-m-d H:i:s', $timeRec)
        ]);
    }
}
