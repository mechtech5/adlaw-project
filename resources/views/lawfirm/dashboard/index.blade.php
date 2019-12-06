@extends('lawfirm.layouts.main')
@section('content')
<section class="content">
	<div class="row">
	    <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{count($cases)}}</h3>
              <h4>Cases</h4>
              <span>Running: {{count($running_cases)}} | Closed : {{count($closed_case)}} | Transfed/NOC : {{count($transferred_cases)}} | Direction Matter : {{count($direction_cases)}}  | Order Reserved : {{count($order_cases)}}</span>
            </div>
            <div class="icon">
              <i class="fa fa-briefcase"></i>
            </div>
            <a href="{{route('case_mast.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{count($user->clients)}}</h3>

              <h4>Total Clients</h4>
              </br></br>
              <span></span>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{route('clients.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{count($user->messages)}}</h3>

              <h4>Message</h4></br></br>
            </div>
            <div class="icon">
              <i class="fa fa-envelope"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    </div>
    <div class="row">

      <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{count($unbookings) + count($booked) + count($cancelled)}}</h3>
              <h4>Appointment</h4>
              <span>Unconfirmed : {{count($unbookings)}} | Confirmed : {{count($booked)}} | Cancelled Request : {{count($cancelled)}} </span>
            </br><br>
            </div>
            <div class="icon">
              <i class="fa fa-calendar"></i>
            </div>
            <a href="{{route('booking.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-md-4 ">
          <!-- small box -->
          <div class="small-box " style="color:white; background-color: #5c6a77">
            <div class="inner">
              <h3>0</h3>
              <h4>Document</h4>
            </br></br>
            </div>
            <div class="icon">
              <i class="fa fa-file"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
         <div class="col-md-4 ">
      <!-- small box -->
        <div class="small-box" style="background-color: #23bab5; color: white">
          <div class="inner">
            <h3>0</h3>

            <h4>To-dos</h4>
            <span>Pending : 0 | Complete: 0</span>
          </br></br>
          </div>
          <div class="icon">
            <i class="fa fa-list-alt"></i>
          </div>
          <a href="" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
        
    </div>
    <div class="row">
       <div class="col-md-4 ">
  
          <div class="small-box" style="background-color: #df6c6f; color:white;">
            <div class="inner">
              <h3>{{count($user->teams)}} </h3>
              <h4>Teams</h4>
              </br></br>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="{{route('teams.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      <div class="col-md-4 ">  
          <div class="small-box" style="background-color: #2d6c98de; color:white;">
            <div class="inner">
              <h3>{{count($user->members)}} </h3>
              <h4>Members</h4>
              </br></br>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="{{route('teams.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
     
      {{-- <div class="col-md-4 ">
      <!-- small box -->
        <div class="small-box" style="background-color: #5da3d4; color: white">
          <div class="inner">
            <h3>0</h3>

            <h4>Invoices</h4>
            <span>Dialy : 0 | Saint: 0 | Paid: 0 | Partially Paid: 0 | Draft & Partially Paid : 0 |</span>
          </div>
          <div class="icon">
            <i class="fa fa-inr"></i>
          </div>
          <a href="{{route('case_diary.index',['caseBtn' =>'ca'])}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div> --}}
    </div>
      <div class="row">
        <div class="col-md-6" >
            <div class="box box-primary " style="height: 300px;">
            <div class="box-header">
              <i class="fa fa-list"></i>
              <h3 class="box-title">Pending To-Dos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="height: 200px;">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                <li>
                  <label>September 17, 2019</label>
                  <br>
                  <span class="label label-success">2:00 PM</span>
                  <span>Design a nice theme</span>
                 
                {{--   <!-- todo text -->
                  <span class="text">Design a nice theme</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                  <!-- General tools such as edit or delete--> --}}
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
               
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right">More info <i class="fa fa-arrow-circle-right"></i></button>
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add Todo</button>
            </div>
          </div>
        </div>

        <div class="col-md-6" >
            <div class="box box-primary " style="height: 300px;">
            <div class="box-header">
              <i class="fa fa-list"></i>
              <h3 class="box-title">Upcoming Hearing Dates</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="height: 200px;">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                <li>
                  <label>September 17, 2019</label>
                  <br>
                  <span>Original Suit 1231 / 2019 - case</span>
                 
                  <!-- todo text -->
                {{--   <span class="text">Design a nice theme</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small> --}}
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
               
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right">More info <i class="fa fa-arrow-circle-right"></i></button>
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add Hearing</button>

            </div>
          </div>
        </div>
      </div>
    {{--   <div class="row">
        <div class="col-md-12">
          <div class="box box-primary" style="height: 300px;">
            <div class="box-header">
              <h3 class="box-title">Recent Activity</h3>
            </div>
            <div class="box-body" style="height: 200px;">
                 
              <ul class="todo-list">
                <li>
                  <label>September 17, 2019</label>
                  <br>
                  <span>Original Suit 1231 / 2019 - case</span>
                 
                  <!-- todo text -->
                  <span class="text">Design a nice theme</span>
                  <!-- Emphasis label -->
                  <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
               
              </ul>
            </div>
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right">More info <i class="fa fa-arrow-circle-right"></i></button>
               
            </div>
          </div>
        </div>
      </div> --}}
     {{-- @include('calendar.calendar_show') --}}


	</section>

@endsection


