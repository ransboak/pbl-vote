@extends('pages.main')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card card-body">

            @if (session('success'))
                <div class="col-xl-6">
                    <div class="card-body">
                        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                            <strong>{{session('success')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div> <!-- end card-body-->
            </div> <!-- end col -->
                @elseif(session('error'))
                <div class="col-xl-6">
                    <div class="card-body">
                        <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                            <strong>{{session('error')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div> <!-- end card-body-->
            </div> <!-- end col -->
                @endif

                @if($errors->any())

                <div class="col-xl-6">
                    <div class="card-body">
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                            <strong>{{error}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endforeach
                    </div> <!-- end card-body-->
            </div> <!-- end col -->

                @endif
                
            
            <h4 class="card-title">{{$user->firstName}} {{$user->middleName}} {{$user->lastName}}</h4>
            <p class="card-text">{{$user->staffId}}</p>
            <p class="card-text">{{$user->location}}</p>
            <p class="card-text">{{$user->department}}</p>
            <form action="{{route('registerPaps', ['staff' => $user->id])}}" method="POST">
                @csrf
                <div style="margin-bottom: 1rem">
                    <label for="contact">Enter Phone number</label>
                    <input type="text" class="form-control" name="contact" id="contact" required maxlength="10" minlength="10">
                </div>   
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            
        </div>
    </div>
</div>
@endsection