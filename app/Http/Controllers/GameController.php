<?php

namespace App\Http\Controllers;

use Exception;
use Throwable;
use App\Models\Game;
use App\Models\Store;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Foundation\Application;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $games = Game::orderBy('title')->get();

        return view('games.index')->with('games', $games);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $stores = Store::get(['id', 'name']);
        $genres = Genre::get(['id', 'name'])->sortBy('name');

        return view('games.create')->with([
            'consoles' => (new Game())->consoleList(),
            'genres' => $genres,
            'stores' => $stores,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     * @throws Throwable
     */
    public function store(Request $request)
    {
        $game = new Game();

        $game->title = $request->title;
        $game->platform = $request->platform;
        $game->genre()->associate($request->genre_id);

        $game->saveOrFail();

        $game->stores()->attach($request->store_id);

        return redirect()->route('games.index')
            ->with('success', __('messages.success_added', ['type' => $request->title]));
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
            'game' => $game,
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
        $genres = Genre::get(['id', 'name'])->sortBy('name');

        return view('games.edit')->with([
            'consoles' => $game->consoleList(),
            'game' => $game,
            'genres' => $genres,
            'stores' => $stores,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Game  $game
     * @return RedirectResponse
     * @throws Throwable
     */
    public function update(Request $request, Game $game)
    {
        $game->title = $request->title;
        $game->platform = $request->platform;
        $game->genre()->associate($request->genre_id);

        $game->saveOrFail();

        $game->stores()->sync($request->store_id);

        return redirect()->route('games.show', $game)
            ->with('success', __('messages.success_updated', ['type' => $game->title]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Game  $game
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(Game $game)
    {
        $game->stores()->detach();

        $game->delete();

        return redirect()->route('games.index')
            ->with('success', __('messages.success_deleted', ['type' => $game->title]));
    }
}
