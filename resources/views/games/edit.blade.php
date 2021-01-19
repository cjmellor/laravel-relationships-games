<h1>Editing "{{ $games->title }}"</h1>

@if(session()->has('success'))
    {{ session()->get('success') }}<br><br>
@endif

<form action="{{ route('games.update', $games) }}" method="post">
    @csrf

    @method('PATCH')

    <section>
        <label for="title">Title</label>
        <input id="title" name="title" type="text" value="{{ $games->title ?? '' }}">
    </section>

    <section>
        <label for="genre">Genre</label>
        <input id="genre" name="genre" type="text" value="{{ $games->genre ?? '' }}">
    </section>

    <section>
        <label for="platform">Platform</label>
        <select id="platform" name="platform">
            <option disabled selected value="null">---Choose---</option>
            @foreach($consoles as $console)
                <option {{ ($games->platform == $console) ? 'selected' : '' }} value="{{ $console }}">{{ $console }}</option>
            @endforeach
        </select>
    </section>

    <section>
        <label for="store_id">Stores</label>
        <select id="store_id" multiple name="store_id[]">
            @foreach($stores as $store)
                <option {{ $games->stores->firstWhere('id', $store->id) != null ? 'selected' : '' }} value="{{ $store->id }}">{{ $store->name }}</option>
            @endforeach
        </select>
    </section>

    <section>
        <button type="submit">@lang('messages.edit_game')</button>
    </section>
</form>

