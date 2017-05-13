<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'api/v1'], function($app)
{
    $app->get('/', function() {
        return response()->json('polish-radio-api');
    });

    // $app->get('radios','RadioController@index');
    // $app->get('radios/{id}','RadioController@show');

    $app->get('radios', function() {
        $radios = [
            // 'last_updated' => date(DateTime::ISO8601),
            [
              'name' => 'VOX FM',
              'url' => 'http://www.voxfm.pl',
              'stream_url' => 'http://waw03.ic1.scdn.smcloud.net/t049-1.mp3'
            ],
            [
              'name' => 'PR Program 3',
              'url' => 'http://www.polskieradio.pl/9,Trojka',
              'stream_url' => 'http://stream3.polskieradio.pl:8954'
            ]
        ];
        return response()->json($radios);
    });
});
