@extends('layouts.main')

@section('title', 'Store: ' . $game->title)

<h1>{{ $store->name }}</h1>

<h2>@lang('messages.for_sale')</h2>

<x-message type="success"/>

@forelse($store->games as $game)
    <ul>
        <li><a href="{{ route('games.show', $game) }}">{{ $game->title }}</a></li>
    </ul>
@empty
    <h4>@lang('messages.no_games_available')</h4>
@endforelse

<a href="{{ route('stores.edit', $store) }}">@lang('messages.edit', ['type' => 'Store'])</a> |

<form action="{{ route('stores.destroy', $store) }}" method="post">
    @csrf

    @method('DELETE')

    <input type="submit" value="@lang('messages.destroy', ['type' => 'Store'])">
</form>

| <a href="{{ route('stores.index') }}">@lang('messages.back_to_store')</a>
