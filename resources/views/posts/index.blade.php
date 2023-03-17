@extends('layouts.layout')

@section('content')
<section style="background-color: #eee;">
  @foreach ($posts as $post)
    <div class="container my-5 py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-10 col-xl-8">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-start align-items-center">
                <img class="rounded-circle shadow-1-strong me-3"
                  src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="60"
                  height="60" />
                <div>
                    
                    <h6 class="fw-bold text-primary mb-1">{{$post->user->name}}</h6>
                    <p class="text-muted small mb-0">
                        Shared publicly - {{$post->created_at}}
                    </p>
                  </div>
                </div>
  
                <p class="mt-3 mb-4 pb-2">
                  {{ $post->description }}
                </p>

                <div class="text-center mt-3 mb-4 pb-2">
                  <img src="images/{{ $post->image }}" alt="" width="50%">
              </div>
  
              <div class="small d-flex justify-content-start">
                <a href="#!" class="d-flex align-items-center me-3">
                  <i class="far fa-comment-dots me-2"></i>
                  <p class="mb-0">Comment</p>
                </a>
              </div>
            </div>
            <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
              <p>Comment</p>
              <div class="d-flex flex-start w-100">
                <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp" alt="avatar" width="40"
                height="40" />
                <div class="form-outline w-100">
                  <textarea class="form-control" id="textAreaExample" rows="4"
                  style="background: #fff;"></textarea>
                  <label class="form-label" for="textAreaExample">Message</label>
                </div>
              </div>
              <div class="float-end mt-2 pt-1">
                <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>

  @endsection