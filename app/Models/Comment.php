<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\MainRequest;
class Comment extends Model
{
    public function getComment(MainRequest $request) {
        $jsonObj = new Json();
        $array_data = $jsonObj->getJson();

        // input data  through array
        $name = $request->input('name');
        $email = $request->input('email');
        $social = $request->input('social-network');
        $commentInput = $request->input('commentInput');

        $array = Array (
            "0" => Array (
                "name" => "$name",
                "email" => "$email",
                "social-network" => "$social",
                "comment" => "$commentInput"
            )
        );
        $array_data[] = $array;
        $json = json_encode($array_data);
        //display it 
        // echo "$json";
        //generate json file
        file_put_contents("Comments.json", $json);

    }
}
