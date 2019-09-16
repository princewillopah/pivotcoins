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
          <h1 class="m-0 text-dark">{{$depositor->name}} {{$depositor->lastname}}'s Deposits Records</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
          <li class="breadcrumb-item"><a href="{{route('members.index')}}">All members</a></li>
          <li class="breadcrumb-item"><a href="{{route('members.show',$depositor->id)}}">{{$depositor->name}} {{$depositor->lastname}}</a></li>
          <li class="breadcrumb-item active">{{$depositor->name}} {{$depositor->lastname}}'s deposits</li>
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
                          <h3 class="card-title" style="line-height:35px">{{$deposits->count() > 1?'All '.$deposits->count().' Records':$deposits->count().' Record'}}</h3>
                            {{-- <a href="" class="btn btn-outline-primary  ml-auto">Create New</a> --}}
                            <td><button class="btn btn-outline-primary  btn-sm ml-auto" title="delete" data-toggle="modal" data-target="#createModal-{{$depositor->id}}"><i class="fa fa-trash"></i> Add Deposit</button></td>
                                              
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">

                              <table id="example1" class="table table-bordered table-striped">
                                  <thead>
                                  <tr>
                                    <th>S/N</th>
                                    <th>AMOUNT</th>
                                    <th>DATE OF DEPOSIT</th>
                                    <th>EDIT DEPOSIT</th>
                                    <th>DELETE DEPOSIT</th>
                                  </tr>
                                  </thead>
                                  
                                      @if(count($deposits) > 0)
                                      <tbody>
                                          @foreach($deposits as $deposit)
                                          <tr>
                                              <td>{{$loop->iteration}}</td>
                                              <td>{{$deposit->deposit_amount}}</td>
                                              <td>{{date_format($deposit->created_at,'F d, Y') }} </td>
                                              <td><button class="btn btn-outline-primary  btn-sm mr-1" title="Edit" data-toggle="modal" data-target="#editModal-{{$deposit->id}}"><i class="fa fa-trash"></i> Edit</button></td>
                                              <td><button class="btn btn-outline-danger btn-sm mr-1" title="delete" data-toggle="modal" data-target="#deleteDepositModal-{{$deposit->id}}"><i class="fa fa-trash"></i> Delete</button></td>  
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  @else
                                  <tbody>
                                      <tr >
                                          <th scope="row" colspan="9" class="text-center py-5">
                                             <h1 style="margin-bottom: 4px;"> No Deposit made Yet</h1>
                                              {{-- <a href="{{route('pastors.create')}}" style="font-size: 18px; color: #3aafa9;text-decoration: none">Create New </a> --}}
                                          </th>
                                      </tr>
                                  </tbody>
                                  @endif
                                  <tfoot>
                                  <tr>
                                      <th>TOTAL</th>
                                      <th colspan="4">{{$totalDeposit}}</th>
                                      {{-- <th></th>
                                      <th></th>
                                      <th></th> --}}
                                  </tr>
                                  </tfoot>
                                </table>
                          
                          </div> <!-- /.card-body -->
                        </div><!-- /.card -->
            </div><!-- /.col -->
          </div><!-- /.row -->
  </section>

</div>










{{-- -------------------------create modal -------------------------------------------------}}
<div class="modal fade" id="createModal-{{$depositor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header" >
              <h5 class="modal-title" >Make Deposit</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="{{route('member.deposit.store',$depositor->id)}}" method="post">
              @csrf
              <div class="modal-body">
              <div class="form-group col-md-12">
                  <label for="deposit_amount">Amount:</label>
                  <input type="text" class="form-control{{ $errors->has('deposit_amount') ? ' is-invalid' : '' }}"  id="deposit_amount" name="deposit_amount" >
                  @if ($errors->has('deposit_amount'))
                      <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('deposit_amount') }}</strong>
                     </span>
                  @endif
              </div>
          </div>
          <div class="modal-footer" >
              <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;Cancel&nbsp;</button>
                  <button type="submit" class="btn btn-outline-danger btn-sm">Add</button>
          </div>
          </form>
      </div>
  </div>
</div>
{{-- --------------------------edit-------------------------------------------------------}}
{{-- ------------------------------modal -------------------------------------------------}}
 @foreach($deposits as $deposit)
<div class="modal fade" id="editModal-{{$deposit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" >
                <h5 class="modal-title" >Make Deposit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('member.deposit.update',[$depositor->id,$deposit->id])}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                <div class="form-group col-md-12">
                    <label for="deposit_amount">Amount:</label>
                <input type="text" class="form-control{{ $errors->has('deposit_amount') ? ' is-invalid' : '' }}"  id="deposit_amount" name="deposit_amount" value="{{$deposit->deposit_amount}}">
                    @if ($errors->has('deposit_amount'))
                        <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('deposit_amount') }}</strong>
                       </span>
                    @endif
                </div>
            </div>
            <div class="modal-footer" >
                <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;Cancel&nbsp;</button>
                    <button type="submit" class="btn btn-outline-danger btn-sm">Edit</button>
            </div>
            </form>
        </div>
    </div>
  </div>
  @endforeach
  {{-- ---------------------------end===== --}}
    @foreach($deposits  as $deposit )
       <div class="modal fade" id="deleteDepositModal-{{$deposit->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header" >
                       <h5 class="modal-title">Delete Deposit</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       You are about deleting this deposit made on <span style="color:#2b7a78!important; font-weight: 600">{{date_format($deposit->created_at,'F d, Y') }} </span> <br>    
                       <span style="color: #fff; font-weight: bold;padding-top: 10px"> Do You Want To Proceed?</span>
                   </div>
                   <div class="modal-footer" >
                       <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">&nbsp;&nbsp;No&nbsp;&nbsp;</button>
                       <form action="{{route('member.deposit.destroy',[$deposit->user_id,$deposit->id])}}" method="post">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-outline-danger btn-sm">Yes, Delete it</button>
                       </form>

                   </div>
               </div>
           </div>
       </div>

  @endforeach




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

{{-- ==================================== --}}

     

  
 