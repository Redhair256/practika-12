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
        Link::create([
			'token' => 0112,
			'target_url' => '...'
		]);
    }
}
