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

            </div>
            <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
              @foreach($post->comments as $comment) 
              <div class="col">
                  <div class="d-flex flex-start">
                    <img class="rounded-circle shadow-1-strong me-3"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" width="40"
                      height="40" />
                    <div class="flex-grow-1 flex-shrink-1">
                      <div>
                        <div class="d-flex justify-content-between align-items-center">
                          <p class="mb-1 text-primary fw-bold">
                            {{ $post->user->name }} <span class="small text-black">- 2 hours ago</span>
                          </p>
                          <a href="#!"><i class="fas fa-reply fa-xs"></i><span class="small"> reply</span></a>
                        </div>
                        <p class="small mb-5">
                          {{ $comment->comment }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                @foreach ($comment->replies as $reply)
                <div class="col">

                  <div class="d-flex flex-start mx-5">
                    <a class="me-3" href="#">
                      <img class="rounded-circle shadow-1-strong"
                      src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(11).webp" alt="avatar"
                      width="30" height="30" />
                  </a>
                  <div class="flex-grow-1 flex-shrink-1">
                    <div>
                      <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-1 text-primary">
                          {{ $post->user->name }} <span class="small text-black">- 3 hours ago</span>
                        </p>
                      </div>
                      <p class="small mb-5">
                        {{ $reply->comment }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
                @endforeach
                @endforeach

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
                {{-- <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </section>

  @endsection