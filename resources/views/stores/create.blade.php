<form action="{{ route('stores.store') }}" method="post">
    @csrf

    <label for="name">Title</label>
    <input id="name" name="name" type="text"><br>

    <label for="location">Store location</label>
    <input id="location" name="location" type="text"><br>

    <input type="submit" value="Add">
</form>
