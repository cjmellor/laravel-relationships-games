@extends('layouts.main')

@section('title', 'Game: ' . $game->title)

<h1>{{ $game->title }}</h1>

<x-message type="success"/>

<h2>Genre</h2>
<p>{{ $game->genre->name }}</p>

<h2>Available on</h2>
<ul>
    @foreach($game->consoles as $console)
        <li>{{ $console->name }}</li>
    @endforeach
</ul>

<h2>@lang('messages.available_at', [
    'count' => $game->stores->count(),
    'store_plural' => Str::plural('store', $game->stores->count())
])</h2>

<ul>
    @foreach($game->stores as $store)
        <li><a href="{{ route('stores.show', $store) }}">{{ $store->name }}</a></li>
    @endforeach
</ul>

<a href="{{ route('games.edit', $game) }}">Edit</a> |

<form action="{{ route('games.destroy', $game) }}" method="post">
    @csrf

    @method('DELETE')

    <input type="submit" value="@lang('messages.destroy', ['type' => 'Game'])">
</form>

| <a href="{{ route('games.index') }}">@lang('messages.back_to_games_list')</a>
