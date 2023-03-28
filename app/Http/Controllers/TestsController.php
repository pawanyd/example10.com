<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;

class TestsController extends Controller
{
    public function terminal(){
        // $result = Process::run('mkdir pawandata');
        $result = Process::run('ls -la');

        // $fake = Process::fake();

        echo "<pre>";
        // print_r($fake);
        print_r($result->output());
    }
}
