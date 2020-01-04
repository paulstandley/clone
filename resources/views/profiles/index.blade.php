@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img class="pl-3" src="https://res.cloudinary.com/pieol2/image/upload/v1576332647/noimage.jpg" alt="no image">
        </div>
        <div class="col-9">
           <div class="d-flex justify-content-between align-items-baseline">
                <h2>{{  $user->username  }}</h2>
                <a href="/profile/{{  $user->id  }}/edit">Edit Profile</a>
                <a class="button btn btn-primary" href="{{ url('p/create') }}">Add New Post</a>
           </div>
            <section class="d-flex sec">
                <h4><strong>{{  $user->posts->count()  }}</strong> posts</h4>
                <h4><strong>0</strong> followers</h4>
                <h4><strong>0</strong> following</h4>
            </section>
            @if ( $user->profile != null )
                <h3>{{  $user->profile->title  }}</h3>
                <p>{{  $user->profile->description  }}</p>
                <a href="https://{{  $user->profile->url  }}" target="_blank">{{  $user->profile->url  }}</a>
            @endif
        </div>
        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{  $post->id  }}">
                        <img class="w-100" src="/storage/{{ $post->image }}" alt="no image">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
