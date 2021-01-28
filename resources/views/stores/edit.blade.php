@extends('layouts.main')

@section('title', 'Editing Store: ' . $store->name)

<h1>Editing: {{ $store->name }}</h1>

<x-message type="success"/>

<form action="{{ route('stores.update', $store) }}" method="post">
    @csrf

    @method('PATCH')

    <section>
        <label for="name">Store Name</label>
        <input id="name" name="name" type="text" value="{{ $store->name }}">
    </section>

    <section>
        <label for="location">Location</label>
        <input id="location" name="location" type="text" value="{{ $store->location }}">
    </section>

    <section>
        <input type="submit" value="@lang('messages.edit', ['type' => 'Store'])">
    </section>

    <section>
        <a href="{{ route('stores.show', $store) }}">@lang('messages.back_to', ['type' => 'Store'])</a>
    </section>
</form>
