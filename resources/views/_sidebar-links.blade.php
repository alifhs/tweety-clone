<ul style="" class="list-group">
    <li class="list-group-item   mb-3">
        <a href="{{ route('home') }}" class="font-weight-bold"> Home</a>
    </li>
    <li class="list-group-item  mb-3">
        <a href="/explore" class="font-weight-bold">Explore </a>
    </li>
    <li class="list-group-item  mb-3">
        <a href="" class="font-weight-bold"> Notifications</a>
    </li>
    <li class="list-group-item  mb-3">
        <a href="" class="font-weight-bold">Messages</a>
    </li>
    <li class="list-group-item  mb-3">
        <a href="{{ route('profile', auth()->user()) }}" class="font-weight-bold">Profile</a>
    </li>
    <li class="list-group-item  mb-3">
        <a href="" class="font-weight-bold">Bookmarks</a>
    </li>
    <li class="list-group-item  mb-3">
        <a href="" class="font-weight-bold">Lists</a>
    </li>


</ul>
