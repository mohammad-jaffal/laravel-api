<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function pal() {

        $strs = array("aba", "ccba", "eefee", "gfefg", "opq");
        $count = 0;
        foreach ($strs as $str1) {
                if($str1 == strrev($str1)) {
                    $count = $count + 1; 
            }
        }
        echo $count;
    }


    public function secs() {
        $sec = time() + (31536000*238) - (105*86400);
        echo $sec;
    }


    public function texts() { 
    $response = file_get_contents('https://icanhazdadjoke.com/slack');
    // $data = json_decode($response);
    // echo json_encode($data['attachments']);
    $data = json_decode($response, $assoc = false);
    echo json_encode($data['attachments']);
    
    }


    public function beers() { 
        $response = file_get_contents('https://api.punkapi.com/v2/beers');
        $data = json_decode($response, $assoc = false);
        $nb = rand(0, count($data)-1);
        echo json_encode($data[$nb]);
    }


    public function teams() { 
        $i=0;
        $j=0;
        $added = [];
        $students = ["st1", "st2", "st3", "st4", "st5", "st6", "st7", "st8", "st9"];
        while(count($students)!=0){

            echo array_pop($students);
            
            if(count($students)!=0){
                echo(" ---- ");
            echo array_pop($students);
            }
            echo("<br>");

        }
    }


    public function pablo() { 
        $students = ["st1", "st2", "st3", "st4", "st5", "st6", "pablo", "pablo", "pablo", "pablo"];
        $nb = rand(0, 9);
        echo $students[$nb];

    }


}