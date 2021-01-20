@if($type === 'success' && session()->has('success'))
    <div {{ $attributes }}>
        {{ session()->get('success') }}
    </div>
@endif
