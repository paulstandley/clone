@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row post_section p-4">
    <div class="col-8">
      <img class="w-100" src="/storage/{{  $post->image  }}" alt="your image">
    </div>
    <div class="col-4">
      <div class="d-flex align-items-center">
        <div class="pr-3">
          <img src="/storage/{{  $post->user->profile->image  }}" alt="profile pick" class="rounded-circle w-100" style="max-width: 50px;">
        </div>
        <div>
          <div class="font-weight-bold">
            <a href="/profile/{{  $post->user->id  }}">
              <span class="text-dark">
                {{  $post->user->username  }}
              </span>
            </a>
          </div>
        </div>
      </div>
      <hr>

      <p>
        <span class="font-weight-bold">
          <a href="/profile/{{  $post->user->id  }}">
            <span class="text-dark">
              {{  $post->user->username  }}
            </span>
          </a>
        </span>
        {{  $post->caption  }}
      </p>
    </div>
  </div>
</div>
@endsection