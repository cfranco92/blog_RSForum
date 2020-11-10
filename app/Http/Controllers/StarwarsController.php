<?php
// Developed by Cristian Franco Bedoya
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class StarwarsController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = array(file_get_contents("https://swapi.dev/api/people/1"));
        // var_dump( $data );
        return view('starwars', [
            'posts' => Post::with('user')->latest()->paginate(),
            'data' => $data
        ]);
    }
}
