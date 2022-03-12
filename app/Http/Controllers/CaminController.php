<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Camin;

class CaminController extends Controller
{
    public function printall()
    {
        $data = Camin::getAllDataCamin();
        //dd($data);
        return view("camin",["data" => $data]);
    }

    public function printspecify($id)
    {
        $data = Camin::getSpecifyDataCamin($id);
        //dd($data);
        return view("specify",["data" => $data]);
    }
}
