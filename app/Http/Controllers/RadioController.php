<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Support\Facades\DB;

class RadioController extends Controller
{
    private $responsecode = 200;
    private $header = ['Content-Type' => 'application/json; charset=UTF-8'];
    private $options = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK;

    public function home()
    {
        $welcome = [
            'polish-radio-api' => '0.1',
            'last_updated' => date(DateTime::ISO8601),
        ];

        return response()->json($welcome, $this->responsecode, $this->header, $this->options);
    }

    public function index()
    {

        $radios = DB::table('radios')->select(['name', 'url', 'stream_url', 'logo_url'])->get();

        return response()->json($radios, $this->responsecode, $this->header, $this->options);
    }
}
