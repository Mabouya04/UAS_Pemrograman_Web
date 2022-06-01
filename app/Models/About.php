<?php

namespace App\Models;

class About{ 

    private static 
    $data = [
        ['nama'=>'Muhammad Ilham Nor Ramadhani', 'nim'=> '2010817110008', 'email'=> '2010817110008@mhs.ulm.ac.id'],
        ['nama'=>'Muhammad Hidayatullah', 'nim'=> '2010817110008', 'email'=> '2010817110008@mhs.ulm.ac.id'],
        ['nama'=>'Hasan Adli', 'nim'=> '2010817110008', 'email'=> '2010817110008@mhs.ulm.ac.id']];

    public static function getAll(){
        return collect(self::$data);
    }
}
