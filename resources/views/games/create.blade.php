<h1>@lang('messages.add_new_game')</h1>

<form action="{{ route('games.store') }}" method="post">
    @csrf

    <section>
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </section>

    <section>
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre">
    </section>

    <section>
        <label for="platform">Platform</label>
        <select name="platform" id="platform">
            <option value="Xbox Series X">Xbox Series X</option>
            <option value="PlayStation 5">PlayStation 5</option>
        </select>
    </section>

    <section>
        <label for="store_id">Stores</label>
        <select name="store_id[]" id="store_id" multiple>
            @foreach($stores as $store)
                <option value="{{ $store->id }}">{{ $store->name }}</option>
            @endforeach
        </select>
    </section>

    <section>
        <button type="submit">@lang('messages.add_game')</button>
    </section>
</form>
