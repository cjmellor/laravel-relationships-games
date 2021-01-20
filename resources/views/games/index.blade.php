<h1>@lang('messages.list_of_games')</h1>

@if(session()->has('success'))
    {{ session()->get('success') }}<br><br>
@endif

@foreach($games as $game)
    <ul>
        <li>
            <a href="{{ route('games.show', $game) }}">{{ $game->title }}</a> |
            <a href="{{ route('games.edit', $game) }}">Edit</a> |
            <a href="{{ route('games.destroy', $game) }}">Delete</a>
        </li>
    </ul>
@endforeach

<a href="{{ route('games.create') }}">@lang('messages.add_new_game')</a>
