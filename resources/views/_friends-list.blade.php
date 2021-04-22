<ul class="list-group">

    @auth
        
    
    
    @forelse (auth()->user()->follows as $user)
        

        <li class="list-group-item   mb-3">
            <div>
                <img src="https://i.pravatar.cc/48" class="rounded-circle" alt="">
                <a href="{{ route('profile', $user) }}">{{ $user->name }}</a>
            </div>
        </li>

    @empty
    <p>No Friends Yet</p>

    @endforelse
    @endauth
</ul>
