@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-danger fs-7 fw-bold space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
