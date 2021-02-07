<h1>@lang('messages.add_new_game')</h1>

<form action="{{ route('games.store') }}" method="post">
    @csrf

    <section>
        <label for="title">Title</label>
        <input id="title" name="title" type="text" value="{{ $game->title ?? '' }}">
    </section>

    <section>
        <label for="genre_id">Genre</label>
        <select name="genre_id" id="genre_id">
            <option disabled selected value="null">---Choose Genre---</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
    </section>

    <section>
        <label for="console_id">Consoles</label>
        <select id="console_id" multiple name="console_id[]">
            @foreach($consoles as $console)
                <option value="{{ $console->id }}">{{ $console->name }}</option>
            @endforeach
        </select>
    </section>

    <section>
        <label for="store_id">Stores</label>
        <select id="store_id" multiple name="store_id[]">
            @foreach($stores as $store)
                <option value="{{ $store->id }}">{{ $store->name }}</option>
            @endforeach
        </select>
    </section>

    <section>
        <button type="submit">@lang('messages.add_game', ['type' => 'Game'])</button>
    </section>
</form>

