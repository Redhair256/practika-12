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
            'token' => str_random(20),
            'browser' => 'Google Chrome',
            'os' => 'Windows7',
            'link_id' => 2,
            'target_url' => 'https//google.com'
        ]);
        $timeRec = $timeRec +10;
        Click::create([
            'token' => str_random(20);
            'browser' => 'Mozilla Firefox',
            'os' => 'Windows8',
            'link_id' => 2,
            'target_url' => 'https//google.com',
            'updated_at' => date('Y-m-d H:i:s', $timeRec),
            'created_at' => date('Y-m-d H:i:s', $timeRec)
        ]);
    }
}
