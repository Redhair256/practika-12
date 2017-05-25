<?php
use App\User_id;
use Illuminate\Database\Seeder;

class UserIdsTableSeeder extends Seeder
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
        User_id::create([
            'token' => '6gYxaB3VHiznHyZm0UkO',
            'browser' => 'Google Chrome',
            'os' => 'Windows7',
            'link_id' => 2,
         ]);
        $timeRec = $timeRec +10;
        User_id::create([
            'token' => 'LoZNrlxT2aB386wv27js',
            'browser' => 'Mozilla Firefox',
            'os' => 'Windows8',
            'link_id' => 2,
            'created_at' => date('Y-m-d H:i:s', $timeRec)
        ]);
    }
}
