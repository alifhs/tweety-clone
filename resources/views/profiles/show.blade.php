@extends('layouts.app')

@section('content')

    <header>
        <img src="/images/banner.png" alt="ami ekta banner" class="img-fluid rounded">
    </header>

    <div class="d-flex justify-content-between align-items-center mt-2">
        <div class="" >
            <h2>{{ $user->name }}</h2>
            <p>Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>
        <div class="">
            <img src="/storage/{{ $user->avatar }}" class="rounded-circle" style="width: 80px" alt="">
            {{-- <img src="https://i.pravatar.cc/48" class="rounded-circle" style="width: 80px" alt=""> --}}
        </div>
        <div class="d-flex " >
            

            @if (auth()->user()->is($user))
               
           
            <a href="{{ route('profile', $user) }}/edit" class="btn btn-primary btn-sm ml-2"  role="button">Edit Profile</a>
            @endif
            <form action="/profiles/{{ $user->username }}/follow" method="POST">

                @csrf
                @if (auth()->user()->isNot($user))
                <button type="submit" class="btn btn-primary btn-sm ml-2">
                    {{ auth()->user()->following($user) ? "unfollow" : "follow" }}
                </button>
                @endif

            </form>
        </div>

    </div>

    <div>
        <p style="margin:auto ; text-align: center;">Good Human Being</p>
    </div>


    @include('_timeline', ['tweets' => $user->tweets()->withLikes()->paginate(50)])



@endsection
