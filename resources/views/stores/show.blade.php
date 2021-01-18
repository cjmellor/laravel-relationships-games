<h1>{{ $store->name }}</h1>

<h2>@lang('messages.for_sale')</h2>

@forelse($store->games as $game)
    <ul>
        <li><a href="{{ route('games.show', $game) }}">{{ $game->title }}</a></li>
    </ul>
@empty
    <h4>@lang('messages.no_games_available')</h4>
@endforelse

<a href="{{ route('stores.index') }}">@lang('messages.back_to_store')</a>
