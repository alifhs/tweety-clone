@extends('layouts.app')

@section('content')
    <div>
    <h5>Edit Profile</h5>
   <form action="{{ route('profile', $user) }}" class="form-group" enctype="multipart/form-data" method="POST">

        @csrf

        @method('PATCH')

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text"
            class="form-control" name="name" id=name" value="{{ auth()->user()->name }}" aria-describedby="helpId" required placeholder="">
            @error('name')
                <small id="helpId" class="form-text text-muted">{{ $message }}</small>
            @enderror
        
        </div>


        <div class="form-group">
          <label for="">UserName</label>
          <input type="text"
            class="form-control" name="username" id="username" value="{{ auth()->user()->username }}" aria-describedby="helpId" required placeholder="">
            @error('username')
            <small id="helpId" class="form-text text-muted">{{ $message }}</small>
          @enderror
    
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="email"
            class="form-control" name="email" id="email" value="{{ auth()->user()->email }}" aria-describedby="helpId" required placeholder="">
            @error('email')
            <small id="helpId" class="form-text text-muted">{{ $message }}</small>
          @enderror
    
        </div>

        <div class="form-group">
          <label for="avatar">Avatar</label>
          <input type="file" name="avatar" id="avatar" class="form-control" placeholder="" aria-describedby="helpId">
          
        </div>
       <div class="form-group">
          <label for="">Password</label>
          <input type="password"
            class="form-control" name="password" id="password"  aria-describedby="helpId" required placeholder="">
            @error('password')
            <small id="helpId" class="form-text text-muted">{{ $message }}</small>
          @enderror
       </div>
        <div class="form-group">
          <label for="password_confirmation">Password Confirmation</label>
          <input type="password"
            class="form-control" name="password_confirmation" id="password_confirmation"  aria-describedby="helpId" required placeholder="">
            @error('password_confirmation')
            <small id="helpId" class="form-text text-muted">{{ $message }}</small>
          @enderror
    
        </div> 

        <button type="submit" class="btn btn-primary">Submit</button> 

   </form>
</div>

@endsection