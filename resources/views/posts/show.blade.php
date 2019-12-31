@extends('layouts.app')

@section('content')
<div class="container">
  <section class="post_section p-4">
    <img class="w-100" src="/storage/{{  $post->image  }}" alt="profile image">
  </section>
</div>
@endsection