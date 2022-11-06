<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{

    public function index()
    {

        //$data = DB::table('country')->get();
        //$data = DB::table('country')->limit(5)->get();
//        $data = DB::table('country')
//            ->select("Code", "Name")
//            ->limit(5)
//            ->get();
//            $data = DB::table('country')
//            ->select("Code", "Name")
//            ->first();
//            $data = DB::table('country')
//            ->select("Code", "Name")
//            ->orderBy('Code', 'desc')
//            ->first();
//            $data = DB::table('city')
//            ->select("ID", "Name")
//            ->find(2);
//            $data = DB::table('city')
//            ->select("ID", "Name")
//            ->where('id', 2)
//            ->get();
//            $data = DB::table('city')
//            ->select("ID", "Name")
//            ->where('id', '<', 5)
//            ->get();
//            $data = DB::table('city')
//            ->select("ID", "Name")
//            ->where([
//                ['id', '>', 1],
//                ['id', '<', 5],
//            ])
//            ->get();
//            $data = DB::table('city')
//            ->where('id', '<', 5)
//                ->value('Name');

//        $data = DB::table('country')
//            ->limit(10)
//            ->pluck('Name', "Code");


        /**
         * агрегатные фун-ии
         */
//        $data = DB::table('country')
//            ->count();
//        $data = DB::table('country')
//            ->min('Population');
//        $data = DB::table('country')
//            ->sum('Population');
//        $data = DB::table('country')
//            ->avg('Population');


        /**
         * группировка таблиц
         */

//        $data = DB::table('city')
//            ->select('CountryCode')
//            ->distinct()
//        ->get();

        /**
         * соединение таблиц
         */
        $data = DB::table('city')
        ->select('city.ID', 'city.Name as CityName', 'country.Code', 'country.Name as CountryName')
        ->limit(10)
        ->join('country', 'city.CountryCode', '=', 'country.Code')
        ->orderBy('city.ID')
        ->get();




        dd($data);
    }
}
