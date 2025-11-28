<div {{ $attributes->merge(['class' => $alertClass()]) }}>
    @if($message)
        <strong>{{ $message }}</strong>
    @endif
    <div class="mt-1">
        {{ $slot }}
    </div>
</div>
