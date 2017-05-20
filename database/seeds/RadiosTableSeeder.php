<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Radio;

class RadiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Radio::create([
            'name' => 'VOX FM',
            'url' => 'http://www.voxfm.pl',
            'stream_url' => 'http://waw03.ic1.scdn.smcloud.net/t049-1.mp3',
            'logo_url' => '',
        ]);
        Radio::create([
            'name' => 'PR 3 Trójka',
            'url' => 'http://www.polskieradio.pl/9,Trojka',
            'stream_url' => 'http://stream3.polskieradio.pl:8954',
            'logo_url' => '',
        ]);
    }
}
