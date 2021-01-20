<h1>@lang('messages.add_new_game')</h1>

<form action="{{ route('stores.store') }}" method="post">
    @csrf

    <section>
        <label for="name">@lang('messages.store_name')</label>
        <input id="name" name="name" type="text">
    </section>

    <section>
        <label for="location">@lang('messages.store_location')</label>
        <input id="location" name="location" type="text">
    </section>

    <input type="submit" value="@lang('messages.add_game')">
</form>
