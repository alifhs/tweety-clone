<div class="border border-blue rounded mt-2">
    @forelse ($tweets as $tweet)
         @include('_tweet')
    @empty
        <p class="py-2">No Tweets yet</p>
    @endforelse

  {{-- {{ $tweets->links() }} --}}
</div>