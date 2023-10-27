<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Http\Requests\GameRequest;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth'); //! protegge tutti i metodi
        //$this->middleware('auth')->only('create'); //! protegge solo un metodo
        $this->middleware('auth')->except('index', 'show'); //! protegget tutti i mtodi tranne la index
    }

    public function create(){
        return view('game.create');
    }

    public function store(GameRequest $request){
        /* $game = new Game();
        $game->title = $request->title;
        $game->producer = $request->producer;
        $game->description = $request->description;
        $game->price = $request->price;
        $game->truffa = "ti ho fregato";
        $game->save(); */

        if(!$request->file('cover')){
            $img = 'default/default-image.jpg';
        } else {
            $img = $request->file('cover')->store('public/covers');
        }
        // Protected Mass Assignment
        Game::create([
            'title' => $request->title,
            'producer' => $request->producer,
            'description' => $request->description,
            'price' => $request->price,
            //! evaluation -> valutazione
            'cover' => $img,
            'user_id' => Auth::user()->id,
        ]);

        return redirect(route('homepage'))->with('gameCreated', 'Hai inserito correttamente un videogame');
    }

    public function index(){
        $games = Game::all();
        return view('game.index', compact('games'));
    }
}
