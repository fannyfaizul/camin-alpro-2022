<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camin extends Model
{
    use HasFactory;

    private static $dataCamin = [
        [
            "id" => 1,
            "nama" => "Mohammad Fany Faizul Akbar",
            "nrp" => "5025201225",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020",
            "kotalahir" => "Bojonegoro",
            "tgllahir" => "21/05/2003",
            "goldar" => "-",
        ],
        [
            "id" => 2,
            "nama" => "Luthfiyyah Hanifa Amari",
            "nrp" => "5025201090",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020",
            "kotalahir" => "Bengkulu",
            "tgllahir" => "23/08/2002",
            "goldar" => "-",
        ],
        [
            "id" => 3,
            "nama" => "Naufal Faadhilah",
            "nrp" => "5025201221",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020",
            "kotalahir" => "Surabaya",
            "tgllahir" => "29/06/2002",
            "goldar" => "-",
        ],
        [
            "id" => 4,
            "nama" => "Andhika Ditya Bagaskara D.",
            "nrp" => "5025201096",
            "jurusan" => "Teknik Informatika",
            "angkatan" => "2020",
            "kotalahir" => "Surabaya",
            "tgllahir" => "27/03/2002",
            "goldar" => "-",
        ],
    ];
    public static function getAllDataCamin()
    {
        return self::$dataCamin;
    }
    public static function getSpecifyDataCamin($nrp)
    {
        return self::$dataCamin[$nrp];
    }
}
