@extends('pages.main')
@section('content')
    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Dashboard</h4>

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
                

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#exampleModalCenter" style="margin-bottom: 1rem">
                    Add Record
                </button>

                <table id="basic-datatable" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Staff ID</th>
                            <th>Name</th>
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
                            <td>{{$user->location}}</td>
                            <td>{{$user->department}}</td>
                            <td>{{$user->unit}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">Enter Staff ID</h5>
                                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{route('getStaff')}}" method="POST">
                                @csrf
                            <div class="modal-body">
                               <input type="text" class="form-control" name="staffId" id="staffId" placeholder="Enter Staff ID" value="PBL/" autofocus>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Search</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<!-- end row-->


@endsection
