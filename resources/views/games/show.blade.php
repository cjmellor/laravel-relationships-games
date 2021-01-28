<h1>{{ $games->title }}</h1>

<x-message type="success"/>

<h2>@lang('messages.available_at')</h2>

<ul>
    @foreach($games->stores as $store)
        <li><a href="{{ route('stores.show', $store) }}">{{ $store->name }}</a></li>
    @endforeach
</ul>

<a href="{{ route('games.edit', $games) }}">Edit</a> |

<form action="{{ route('games.destroy', $games) }}" method="post">
    @csrf

    @method('DELETE')

    <input type="submit" value="@lang('messages.destroy', ['type' => 'Game]'])">
</form>

| <a href="{{ route('games.index') }}">@lang('messages.back_to_games_list')</a>
