@extends('layouts.admin')

@section('title')
{{$user->name}} {{$user->lastname}}
@endsection


@section('content')
  
  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
           <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">{{$user->name}} {{$user->lastname}}'s Profile</h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{route('members.index')}}">All Investors</a></li>
                        <li class="breadcrumb-item active">{{$user->name}} {{$user->lastname}}</li>
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
            <div class="col-md-4">
              @if(is_null($user->photo))
                  <img src="{{asset('uploads/placeholders/avatar.png')}}"style="margin:0 auto;display:block" alt="cover img">
               @else
                  <img src="{{asset($user->photo)}}" class="fluid-img" style="margin:0 auto;display:block"  alt="cover img">
              @endif 
            </div> 
            <div class="col-md-8">

                <div class="box">
                    <h5>Basic Information</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name: </th>
                            <th style="text-transform: uppercase;color: #fff;">{{$user->name}} {{$user->lastname}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><span class="event-text">Wallet ID: </span></td>
                            <td>{{$user->walletId}}</td>
                        </tr>
                        <tr>
                            <td><span class="event-text" >Email: </span></td>
                            <td>{{$user->email}}</td>
                        </tr>
                        <tr>
                            <td><span class="event-text" >Phone(Whatsapp): </span></td>
                            <td>{{$user->phone}}</td>
                        </tr>
                        <tr>
                            <td><span class="event-text" >Address: </span></td>
                            <td>{{$user->address}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                       
                  <div class="box">
                    <h5>Account Info</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Balance: </th>
                            <th style="text-transform: uppercase;color: #fff;">{{$user->balance->balance}}</th>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                              <td><span class="event-text" >Last Deposit: </span></td>
                              <td>{{$user->next_of_kin->phone}}</td>
                              <td></td>
                          </tr>
                         <tr>
                            <td><span class="event-text" >Last Withdrawal: </span></td>
                            <td>{{$user->next_of_kin->email}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><span class="event-text" >Tatal Deposits: </span></td>
                            <td>{{$user->next_of_kin->phone}}</td>
                            <td> <a href="{{route('member.deposit.index',$user->id)}}" class="btn btn-sm btn-outline-secondary">View Deposits</a></td>
                        </tr>
                       <tr>
                          <td><span class="event-text" >Total Withdrwals: </span></td>
                          <td>{{$user->next_of_kin->email}}</td>
                          <td> <a href="" class="btn btn-sm btn-outline-secondary">View Withdrawals</a></td>
                      </tr>
                      <tr>
                          <td> <a href="" class="btn btn-sm btn-outline-secondary">Make Deposits</a></td>
                          <td> <a href="" class="btn btn-sm btn-outline-secondary">Make Withdrawals</a></td>
                          <td></td>
                      </tr>
                        </tbody>
                    </table>
                  </div>
                    {{-- @if ($userchild->next_of_kin->count() > 0) --}}
                    @if ($user->next_of_kin->count() > 0)
                    <div class="box">
                    <h5>Next Of Kin</h5>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name: </th>
                                <th style="text-transform: uppercase;color: #fff;">{{$user->next_of_kin->name}}</th>
                            </tr>
                            </thead>
                            <tbody>
                              <tr>
                                  <td><span class="event-text" >Phone: </span></td>
                                  <td>{{$user->next_of_kin->phone}}</td>
                              </tr>
                            <tr>
                                <td><span class="event-text" >Email: </span></td>
                                <td>{{$user->next_of_kin->email}}</td>
                            </tr>
                            </tbody>
                        </table>
                      </div> 
                    @else
 not filled
                    @endif
                  

            </div> 

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

</div>
 


@endsection
<style>
  .box{position: relative; width: 90%; border-radius: 15px; background: transparent; border: 2px solid #3aafa9;padding: 20px;margin-bottom: 30px}
  .table th, .table td {border-top: 1px solid #1d3852!important; padding-left: 0px!important;border-bottom: none!important }
  .box h5{position: absolute;color: #3aafa9;display: inline;background: #27293d;padding: 8px 5px;font-size: 18px;left: 20px;top: -20;}
  .table th:first-child, .table td:first-child{color:#fff; font-weight: 700; text-transform:capitalize!important;}
  .table th:nth-child(2), .table td:nth-child(2){color:#aaa!important;  text-transform: capitalize!important; font-weight: 400!important; }
  </style>

@section('style')
    
@endsection


@section('script')
    <!-- page script -->
  
@endsection