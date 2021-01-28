<h1>@lang('messages.list_of_games')</h1>

@if(session()->has('success'))
    {{ session()->get('success') }}<br><br>
@endif

@foreach($games as $game)
    <ul>
        <li>
            <a href="{{ route('games.show', $game) }}">{{ $game->title }}</a>
        </li>
    </ul>
@endforeach

<a href="{{ route('games.create') }}">@lang('messages.add_new_game')</a> |
<a href="{{ route('stores.index') }}">@lang('messages.back_to_store')</a>
