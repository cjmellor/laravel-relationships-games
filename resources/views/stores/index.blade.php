@extends('layouts.main')

<h1>Game Stores</h1>

@foreach($stores as $store)
    <ul>
        <li>
            <a href="{{ route('stores.show', $store) }}">{{ $store->name }}</a>
        </li>
    </ul>
@endforeach

<a href="{{ route('stores.create') }}">@lang('messages.add_new_store')</a>
