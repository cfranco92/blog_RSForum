<?php
// Developed by Cristian Franco Bedoya
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StarwarsController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $api = Http::get('https://swapi.dev/api/people/1');
        $data = array($api);
        return view('starwars', compact('data'));
    }
}
