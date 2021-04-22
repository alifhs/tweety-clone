<div class="border border-blue p-2 rounded">
    {{-- tweet box --}}
    <form method="POST" action="/tweets">
        @csrf
        <textarea required name="body" id="" class="form-control input-group-text" placeholder="Describe yourself here..."></textarea>
        <hr>
        @error('body')
        <small class="alert alert-warning " >{{ $message }}</small>    
        @enderror
        
        <header class="d-flex justify-content-between mt-3">
            <img src="https://i.pravatar.cc/48" class="rounded-circle" alt="">
            <button type="submit" class="btn btn-success btn-sm">TweetNow</button>
        </header>

    </form>

   


   
</div>