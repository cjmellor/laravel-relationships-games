<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Store;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $games = Game::with('stores')
            ->orderBy('title')
            ->get();

        return view('games.index')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Game  $game
     * @return Application|Factory|View
     */
    public function create(Game $game)
    {
        $stores = Store::get(['id', 'name']);

        return view('games.create')->with([
            'consoles' => $game->consoleList(),
            'games' => $game,
            'stores' => $stores,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Game::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'platform' => $request->platform,
        ])->stores()->sync($request->store_id);

        return redirect()->route('games.index')
            ->with('success', __('messages.success_game_added', ['game' => $request->title]));
    }

    /**
     * Display the specified resource.
     *
     * @param  Game  $game
     * @return Application|Factory|View|int
     */
    public function show(Game $game)
    {
        return view('games.show')->with([
            'games' => $game
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Game  $game
     * @return Application|Factory|View
     */
    public function edit(Game $game)
    {
        $stores = Store::get(['id', 'name']);

        return view('games.edit')->with([
            'consoles' => $game->consoleList(),
            'games' => $game,
            'stores' => $stores,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Game  $game
     * @return RedirectResponse
     */
    public function update(Request $request, Game $game)
    {

        $game->title = $request->title;
        $game->genre = $request->genre;
        $game->platform = $request->platform;

        $game->saveOrFail();

        $game->stores()->sync($request->store_id);

        return redirect()->back()->with('success', 'Game updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Game  $game
     * @return Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
