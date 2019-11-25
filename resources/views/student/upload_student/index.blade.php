@extends('lawschools.layouts.main')
@section('content')
<section class="content">
@include('student.header')
<style >
	.info-box{
		box-shadow: 0 1px 7px 3px rgba(0,0,0,0.10);
	}
	.info-box-text{
		font-size: 16px;
		font-weight: bold;
		padding-top: 5px;

	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">Upload Student</h4>
			</div>
			<div class="panel-body">	
				<form action="{{route('import_student')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-md-8" style="margin-top: 10px;">
							<h4><b>Import Student</b></h4>
							<br>
							<label>Upload File</label>
							<input type="file" name="file" >
							@error('file')
								<span class="text-danger">
									<strong>{{$message}}</strong>
								</span>
							@enderror
							<br>
							<input type="submit" value="Submit" class="btn btn-sm btn-primary">
							<br>
							{{-- <h5>Before upload read terms & conditions:</h5>
							<p>Courses Types : Post Graduat</p>
 --}}
						</div>	
						<div class="col-md-4 " style="margin-top: 10px;">
							<div class="row">
								<a href="#">
									<div class="col-md-12">
										<div class="info-box " >
											<span class="info-box-icon bg-green"><i class="fa fa-download"></i></span>
											<div class="info-box-content">
											<span class="info-box-text">SAMPLE DOWNLOAD</span>										
										</div>							
										</div>
									</div>
								</a>
								<br>
								<a href="#">
									<div class="col-md-12">
										<div class="info-box " >
											<span class="info-box-icon bg-purple"><i class="fa fa-download"></i></span>
											<div class="info-box-content">
											<span class="info-box-text">Export All Student</span>										
										</div>							
										</div>
									</div>
								</a>

								<a href="#">
									<div class="col-md-12">
										<div class="info-box " >
											<span class="info-box-icon bg-purple"><i class="fa fa-download"></i></span>
											<div class="info-box-content">
											<span class="info-box-text">Export Student Batch, <br> Year & semester wise
											</span>										
										</div>							
										</div>
									</div>
								</a>
							</div>
						</div>
					</div> 
					
				</form>
			</div>
		</div>
	</div>
</div>
</section>
@endsection