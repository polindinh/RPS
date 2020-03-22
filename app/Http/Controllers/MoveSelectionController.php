<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoveSelectionController extends Controller
{
    function CompMove(){
        $moves = [
            "Rock",
            "Paper",
            "Scissors",
        ];
        $index = rand(0, sizeof($moves)-1);
        return response()->json(["move"=>$moves[$index]]);
    }
}
