@extends('layouts.app');


@section('content')


    <p>Explroe Pelople You May Know</p>

    <div>
        @foreach ($users as $user)

            <a href="/profiles/{{ $user->username }}"> 
            <div class="d-flex align-items-center mb-3">
                <img src="/storage/{{ $user->avatar ? $user->avatar: '/avatars/default.png' }}" style="width: 60px" alt="{{ $user->name }}'s Avatar">
                <b>{{'@'. $user->username }}</b>
            </div>
            </a>
        @endforeach
    </div>

@endsection