@extends('layouts.main')

@section('title', 'Editing ' . $game->title)

<h1>Editing "{{ $game->title }}"</h1>

<x-message type="success"/>

<form action="{{ route('games.update', $game) }}" method="post">
    @csrf

    @method('PATCH')

    <section>
        <label for="title">Title</label>
        <input id="title" name="title" type="text" value="{{ $game->title ?? '' }}">
    </section>

    <section>
        <label for="genre_id">Genre</label>
        <select name="genre_id" id="genre_id">
            <option disabled value="null">---Choose---</option>
            @foreach($genres as $genre)
                <option {{ $genre->id === $game->genre->id ? 'selected' : ''  }} value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
    </section>

    <section>
        <label for="console_id">Platform</label>
        <select id="console_id" multiple name="console_id[]">
            @foreach($consoles as $console)
                <option
                    {{ $game->consoles->firstWhere('id', $console->id) !== null ? 'selected' : '' }} value="{{ $console->id }}">{{ $console->name }}</option>
            @endforeach
        </select>
    </section>

    <section>
        <label for="store_id">Stores</label>
        <select id="store_id" multiple name="store_id[]">
            @foreach($stores as $store)
                <option {{ $game->stores->firstWhere('id', $store->id) != null ? 'selected' : '' }} value="{{ $store->id }}">{{ $store->name }}</option>
            @endforeach
        </select>
    </section>

    <section>
        <button type="submit">@lang('messages.edit', ['type' => 'Game'])</button>
    </section>

    <section>
        <a href="{{ route('games.show', $game) }}">@lang('messages.back_to', ['type' => 'Game'])</a>
    </section>
</form>

