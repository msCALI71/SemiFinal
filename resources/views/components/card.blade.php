<div class="card mb-3">
    @isset($header)
        <div class="card-header">{{ $header }}</div>
    @endisset
    <div class="card-body">{{ $slot }}</div>
    @isset($footer)
        <div class="card-footer">{{ $footer }}</div>
    @endisset
</div>
