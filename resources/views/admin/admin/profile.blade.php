@extends('layouts.member')

@section('title')
   {{$user->name}}'s Profile
@endsection


@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Welcome, {{$user->lastname}} </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                    <a href="{{route('profileEdit')}}" class="btn btn-outline-primary btn-sm">Update</a>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main content -->
     <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">

            <div class="col-md-12">
                <div class="profile-main">
                   <div class="row">
                       <div class="col-md-4">
                           <div class="profile-pic">
                              
                               <div class="card" >
                                    @if(is_null(Auth::user()->photo))
                                    <img src="{{asset('uploads/person1.png')}}" class="img-fluid"  alt="{{ Auth::user()->name }}">
                                   @else
                                    <img src="{{asset('uploads/'.Auth::user()->photo)}}" class="img-fluid"  alt="{{ Auth::user()->name }}">
                                   @endif
                                    <div class="card-body">
                                    <h4 class="card-title">{{$user->name}} {{$user->lastname}}</h4>
                                      {{-- <p class="card-text">Some example text.</p> --}}
                                      {{-- <a href="#" class="btn btn-primary">See Profile</a> --}}
                                    </div>
                                  </div>
                           </div>
                       </div>
                       <div class="col-md-8">
                           <div class="main-info">
                                 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt dignissimos ex magnam earum fugit obcaecati
                                 vel unde ad at, aliquid accusamus voluptates libero, numquam assumenda dolore nisi quis quod quo?
                           </div>
                       </div>
                   </div>
                </div>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

</div>
 


@endsection

{{-- #1e1e2f !important; #27293d --}}

@section('style')
        <style>
         .col-md-12 .profile-main{background: #1e1e2f !important; padding:20px}
         .col-md-12 .profile-main .card{background: transparent;color: #aaa; width: 80%}
         .col-md-12 .profile-main .card-body{background: transparent;}
        </style>  
@endsection


@section('script')
    
@endsection