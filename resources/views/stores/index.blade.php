@extends('layouts.main')

<h1>Game Stores</h1>

<x-message type="success"/>

@foreach($stores as $store)
    <ul>
        <li>
            <a href="{{ route('stores.show', $store) }}">{{ $store->name }}</a>
        </li>
    </ul>
@endforeach

<a href="{{ route('stores.create') }}">@lang('messages.add_new_store')</a> |
<a href="{{ route('games.index') }}">@lang('messages.list_of_games')</a>
