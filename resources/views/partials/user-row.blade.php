<a href="{{ route('users.show', $user->id) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
    <div>
        <div class="fw-bold">{{ $user->name }}</div>
        <div class="small text-muted">{{ $user->email }}</div>

        @isset($user->bio)
            @if(trim($user->bio) !== '')
                <div class="small text-success">Has bio</div>
            @else
                <div class="small text-muted">No bio yet</div>
            @endif
        @else
            <div class="small text-muted">No bio yet</div>
        @endisset
    </div>

    <div>
        @if($user->active)
            <span class="badge bg-success">Active</span>
        @else
            <span class="badge bg-secondary">Inactive</span>
        @endif
    </div>
</a>
