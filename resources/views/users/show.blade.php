@extends('layouts.app')
@section('title', 'Profile: ' . $user->name)

@section('content')
<x-card>
    <x-slot name="header">
        <h4>{{ $user->name }}'s Profile</h4>
        <small>{{ $user->email }}</small>
    </x-slot>

    @php $componentType = $user->active ? 'alert' : 'button'; @endphp
    <x-dynamic-component :component="$componentType" type="info">
        {{ $user->name }} is {{ $user->active ? 'active' : 'inactive' }}.
    </x-dynamic-component>

    <hr>
    @if($user->active)
        <p><strong>Status:</strong> Active</p>
    @else
        <p><strong>Status:</strong> Inactive</p>
    @endif

    @unless($user->active)
        <div class="alert alert-warning">This user is currently inactive. Contact admin if this is unexpected.</div>
    @endunless

    <h5>Bio</h5>
    @isset($user->bio)
        @if(trim($user->bio) !== '') <p>{!! nl2br(e($user->bio)) !!}</p> @else <p><em>No bio provided.</em></p> @endif
    @else <p><em>No bio found.</em></p> @endisset

    @isset($user->birthdate)
        @php $age = \Carbon\Carbon::parse($user->birthdate)->age; @endphp
        <p><strong>Age:</strong> {{ $age }}</p>
    @endisset

    <x-slot name="footer">
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back to users</a>
    </x-slot>
</x-card>
@endsection
