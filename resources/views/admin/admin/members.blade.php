@extends('layouts.admin')

@section('title')
Investors
@endsection


@section('content')
  

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
      <div class="col-sm-6">
          <h1 class="m-0 text-dark">Create New</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
          <li class="breadcrumb-item active">All Investors</li>
          </ol>
      </div><!-- /.col -->
      </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


  <!-- Main content -->
  <section class="content">
          <div class="row">
            <div class="col-12">
                  <div class="card">
                          <div class="card-header d-flex">
                            <h3 class="card-title" style="line-height:35px">Data Table With Full Features</h3>
                            <a href="" class="btn btn-outline-primary  ml-auto">Create New</a>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">

                              <table id="example1" class="table table-bordered table-striped">
                                  <thead>
                                  <tr>
                                    <th>S/N</th>
                                    <th>FIRST NAME</th>
                                    <th>LAST NAME</th>
                                    <th>VIEW</th>
                                    <th>DELETE</th>
                                  </tr>
                                  </thead>
                                  
                                      @if(count($users) > 0)
                                      <tbody>
                                          @foreach($users as $user)
                                          <tr>
                                              <td>{{$loop->iteration}}</td>
                                              {{-- <td>
                                                  @if(is_null($user->image))
                                                      <img src="{{asset('placeholder-img/users/v1.jpg')}}" width="60" height="60" alt="cover img">
                                                  @else
                                                      <img src="{{asset('storage/'.$user->image)}}" width="60" height="60" alt="cover img">
                                                  @endif
                                              </td> --}}
                                              <td>{{$user->name}}</td>
                                              <td>{{$user->lastname}}</td>
                                              {{-- <td>{{$user->lastname}}</td> --}}
                                              {{-- <td>{{$user->}}</td> --}}
                                              <td><a href="{{route('members.show',$user->id)}}" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="view" ><i class="fa fa-th"></i> View</a></td>
                                              {{-- <td><a href="" class="btn btn-outline-secondary  btn-sm  float-right  mr-1" title="edit" ><i class="fa fa-pencil"></i> Edit</a></td> --}}
                                              <td><button class="btn btn-outline-secondary btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deleteuserModal-{{$user->id}}"><i class="fa fa-trash"></i> Delete</button></td> 
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  @else
                                  <tbody>
                                      <tr >
                                          <th scope="row" colspan="9" class="text-center py-5">
                                             <h1 style="margin-bottom: 4px;"> No Investors Yet</h1>
                                              {{-- <a href="{{route('pastors.create')}}" style="font-size: 18px; color: #3aafa9;text-decoration: none">Create New </a> --}}
                                          </th>
                                      </tr>
                                  </tbody>
                                  @endif
                                  <tfoot>
                                  <tr>
                                      <th>S/N</th>
                                      <th>FIRST NAME</th>
                                      <th>LAST NAME</th>
                                      <th>VIEW</th>
                                      <th>DELETE</th>
                                  </tr>
                                  </tfoot>
                                </table>
                          
                          </div> <!-- /.card-body -->
                        </div><!-- /.card -->
            </div><!-- /.col -->
          </div><!-- /.row -->
  </section>

</div>

@endsection


@section('style')
    
@endsection


@section('script')
    <!-- page script -->
<script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection