<?php

use App\Click;
use Illuminate\Database\Seeder;

class ClicksTableSeeder extends Seeder
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
        Click::create([
			'link_id' => 2,
            'link_url' => 'https://Google.com',
			'user_id' => 1,
            'ip' => '127.0.0.1',
            'user_token' => '6gYxaB3VHiznHyZm0UkO',
            'user_ua' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0'
		]);
        $timeRec = $timeRec +10;
        Click::create([
			'link_id' => 2,
            'link_url' => 'https://Google.com',
			'user_id' => 1,
            'ip' => '127.0.0.1',
            'user_token' => '6gYxaB3VHiznHyZm0UkO',
            'user_ua' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0',
            'created_at' => date('Y-m-d H:i:s', $timeRec)
        ]);
        $timeRec = $timeRec +10;
        Click::create([
			'link_id' => 3,
            'link_url' => 'https://Yahoo.com',
			'user_id' => 2,
            'ip' => '127.0.0.1',
            'user_token' => 'LoZNrlxT2aB386wv27js',
            'user_ua' => 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110',
            'created_at' => date('Y-m-d H:i:s', $timeRec)
        ]);
        $timeRec = $timeRec +10;
        Click::create([
			'link_id' => 2,
            'link_url' => 'https://Google.com',
			'user_id' => 1,
            'ip' => '127.0.0.1',
            'user_token' => '6gYxaB3VHiznHyZm0UkO',
            'user_ua' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0',
            'created_at' => date('Y-m-d H:i:s', $timeRec)
        ]);
    }
}
