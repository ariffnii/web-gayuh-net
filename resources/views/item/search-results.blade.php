<ul>
    @foreach ($items as $item)
        <li>{{ $item->name }} - {{ $item->description }}</li>
    @endforeach
</ul>