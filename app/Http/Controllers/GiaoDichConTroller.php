<?php

namespace App\Http\Controllers;

use App\Models\GiaoDich;
use Carbon\Carbon;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class GiaoDichConTroller extends Controller
{
    public function index(){
        $client = new Client();
        $payload = [
            "USERNAME"      => "THANHTRUONG2311",
            "PASSWORD"      => "Lethanhtruong2311@@",
            "DAY_BEGIN"     => Carbon::today()->format('d/m/Y'),
            "DAY_END"       => Carbon::today()->format('d/m/Y'),
            "NUMBER_MB"     => "1910061030119"
        ];

        try {
            $response = $client->post('http://103.137.185.71:2603/mb', [
                'json' => $payload
            ]);

            $data = json_decode($response->getBody(), true);
            $du_lieu= $data['data'];
            foreach ($du_lieu as $key => $value) {
                $giaoDich = GiaoDich::where('pos',$value['pos'])->first();
                if(!$giaoDich){
                    GiaoDich::create([
                        'creditAmount'  => $value['creditAmount'],
                        'description'   => $value['description'],
                        'pos'           => $value['pos'],
                    ]);
                }
                // GiaoDich::firstOrCreate([
                //     'creditAmount'  => $value['creditAmount'],
                //     'description'   => $value['description'],
                //     'pos'           => $value['pos'],
                // ],
                // [
                //     'creditAmount'  => $value['creditAmount'],
                //     'description'   => $value['description'],
                //     'pos'           => $value['pos'],
                // ] );
            }
        } catch (Exception $e) {
            echo $e;
        }
}
}
