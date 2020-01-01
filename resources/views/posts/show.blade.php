@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row post_section p-4">
    <div class="col-8">
      <img class="w-100" src="/storage/{{  $post->image  }}" alt="your image">
    </div>
    <div class="col-4">
      <div>
        <h3>{{  $post->user->username  }}</h3>
        <p>{{  $post->caption  }}</p>
      </div>
    </div>
  </div>
</div>
@endsection