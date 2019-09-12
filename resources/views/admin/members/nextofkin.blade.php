@extends('layouts.member')

@section('title')
Profile
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create New</h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="">All Events</a></li>
                        <li class="breadcrumb-item active">Create New</li>
                        </ol>
                    </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          
            <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Create</h3>
      
                  <div class="card-tools">
                      <a href="{{URL::previous()}}" class="btn btn-outline-primary"> <i class="fa fa-arrow-left"></i> Back</a>
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-th"></i></button>
                  </div>
                </div>
  {{-- -------------------------------------- --}}
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="row">
                   <div class="col-md-8 offset-md-2">
                        
                        <form method="POST" action="" >
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input type="text" id="name" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Phone Number</label>
                                <input type="text" id="phone" placeholder="Enter Phone Number" class="form-control @error('title') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="text" id="email" placeholder="Enter Emailr" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Create" class="btn btn-primary">
                            </div>

                        </form>

                   </div>
                  </div><!-- /.row -->
                </div><!-- /.card-body -->
 {{-- ---------------------------------------- --}}
                <div class="card-footer">
                 
                </div>
              </div>

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

</div>
 

@endsection
