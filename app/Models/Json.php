<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
    use HasFactory;
    public function getJson(){
        $current_data=file_get_contents('Comments.json');
        $array_data = json_decode($current_data, true);
        if (is_null($array_data)) return [];
        return $array_data;    
    }
}
