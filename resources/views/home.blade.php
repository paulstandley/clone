@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="images/noimage.jpg" alt="no image">
        </div>
        <div class="col-9">
            <h2>{{  $user->username  }}</h2>
            <section class="d-flex sec">
                <h3>0 posts</h3>
                <h3>0 followers</h3>
                <h3>0 following</h3>
            </section>
            <h3>Code.co.uk</h3>
            <p>We are a carbon copy We are a carbon copy We are a carbon copy We are a carbon copy We are a carbon copy We are a carbon copy We are a carbon copy We are a carbon copy We are a carbon copy We are a carbon copy We are a carbon copy We are a carbon copy</p>
            <a href="#">https://www.clone.co.uk</a>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img class="w-100" src="images/no-image.jpg" alt="no image">
            </div>
            <div class="col-4">
                <img class="w-100" src="images/no-image.jpg" alt="no image">
            </div>
            <div class="col-4">
                <img class="w-100" src="images/no-image.jpg" alt="no image">
            </div>
        </div>
    </div>
</div>
@endsection
