@extends('layouts.layout')

@section('content')
<!-- Default form contact -->
<div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10 col-xl-8">
        <form class="text-center border border-light p-5" method="POST" action="{{ route('posts.store') }}" >
        @csrf
            <p class="h4 mb-4">Add post</p>

            <div class="d-flex justify-content-center">
                <input type="text" id="defaultContactFormName" class="form-control mb-4 w-50" placeholder="Name" name="name">
            </div>            

            <div class="form-group d-flex justify-content-center">
                <textarea class="form-control rounded-0 w-50" id="exampleFormControlTextarea2" rows="3" placeholder="Description" name="description"></textarea>
            </div>

            <div class="form -control d-flex justify-content-center mt-2">
                <input type="file" name="image" id="img">
            </div>

            <div>
                <button class="btn btn-info mt-2" type="submit">Add post</button>
            </div>
                
        </form>
      </div>
    </div>
</div>
@endsection
