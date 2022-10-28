<?php

namespace App\Http\Controllers\WebScrapping;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
class ScraperController extends Controller
{
    //
    public function index()
    {
       
        $output_data = system('python C:\Users\a\Downloads\bike-laravel-main\bike-laravel-main\app\Http\Controllers\WebScrapping\scrap.py');

        //dd(($output_data));
        $array =  explode(",",$output_data);
        $journalName = preg_replace('/\s+/', '', $array);
        //dd($journalName);
       // $finalarray = str_replace("[","",$journalName);
        //dd($finalarray);
      // dump($output_data);
        return view('Client/Sponsor/index',compact('journalName'));
       

    
    }
    public function showsponsor()
    {
       // $output_data = shell_exec('C:\Users\a\Downloads\bike-laravel-main\bike-laravel-main\app\Http\Controllers\WebScrapping\scrap.py');
        $command = escapeshellcmd('python C:\Users\a\Downloads\bike-laravel-main\bike-laravel-main\app\Http\Controllers\WebScrapping\scrap.py');
        $output = shell_exec($command);
        $testarray = preg_replace('/\s+/', ' ', $output);

        //dd($journalName);
       
        $array =  explode(" ",$testarray);

       // dd($array);
      //  $journalName = preg_replace('/\s+/', '', $array);
      return view('Client/Sponsor/index',compact('array'));
    }
}
