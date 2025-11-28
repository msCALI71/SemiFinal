@extends('layouts.app')
@section('title', 'Users')

@section('content')
    <x-alert type="info" message="Listing users on the system">You can click any user to view the profile.</x-alert>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Users</h2>
        <x-button class="btn-lg" onclick="console.log('View Profiles clicked')">View Profiles</x-button>
    </div>

    <div class="list-group mb-3">
        @each('partials.user-row', $users, 'user', 'partials.no-users')
    </div>

    <p>Total users: @if($users->isNotEmpty()) @foreach($users as $u) @if($loop->first) {{ $loop->count }} @endif @endforeach @else 0 @endif</p>


    @push('scripts')
        <script>console.log('Users index script pushed from users.index');</script>
    @endpush
@endsection
