@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="https://res.cloudinary.com/pieol2/image/upload/v1576332647/noimage.jpg" alt="no image">
        </div>
        <div class="col-9">
            <h2>{{  $user->username  }}</h2>
            <section class="d-flex sec">
                <h4>0 posts</h4>
                <h4>0 followers</h4>
                <h4>0 following</h4>
            </section>
            <h3>{{  $user->profile->title  }}</h3>
            <p>{{  $user->profile->description  }}</p>
            <a href="#">{{  $user->profile->url  }}</a>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img class="w-100" src="https://res.cloudinary.com/pieol2/image/upload/v1576332658/no-image.jpg" alt="no image">
            </div>
            <div class="col-4">
                <img class="w-100" src="https://res.cloudinary.com/pieol2/image/upload/v1576332658/no-image.jpg" alt="no image">
            </div>
            <div class="col-4">
                <img class="w-100" src="https://res.cloudinary.com/pieol2/image/upload/v1576332658/no-image.jpg" alt="no image">
            </div>
        </div>
    </div>
</div>
@endsection
