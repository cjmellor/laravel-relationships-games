<h1>{{ $games->title }}</h1>

<h2>@lang('messages.available_at')</h2>

<ul>
    @foreach($games->stores as $game)
        <li>{{ $game->name }}</li>
    @endforeach
</ul>
