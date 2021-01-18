<h1>Game Stores</h1>

@foreach($stores as $store)
    <ul>
        <li><a href="{{ route('stores.show', $store) }}">{{ $store->name }}</a></li>
    </ul>
@endforeach
