@extends('pages.main')
@section('content')
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Attendees <span style="color:red">({{$usersCount}})</span></h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Staff</li>
                </ol>
            </div>
            
        </div>
    </div>
</div>     
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
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
                

                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Staff ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Location</th>
                            <th>Department</th>
                            <th>Unit</th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->staffId}}</td>
                            <td>{{$user->firstName}} {{$user->middleName}} {{$user->lastName}}</td>
                            <td>{{$user->contact}}</td>
                            <td>{{$user->location}}</td>
                            <td>{{$user->department}}</td>
                            <td>{{$user->unit}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

                

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->


@endsection
