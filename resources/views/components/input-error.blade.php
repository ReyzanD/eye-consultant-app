@props(['messages' => null, 'for' => null])

@if($messages)
    @foreach((array) $messages as $message)
        @if($message)
            <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
        @endif
    @endforeach
@elseif($for)
    @error($for)
        <p {{ $attributes->merge(['class' => 'text-sm text-red-600']) }}>{{ $message }}</p>
    @enderror
@endif
