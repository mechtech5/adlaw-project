@extends(Auth::user()->user_catg_id==2 ? 'lawyer.main' : 'lawcompany.main')
@section('content')
<section class="content">
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border" >
				<h3 style="margin-top: 10px;">Edit Case Notes 
				
					@if($page_name == 'clients')
						<a href="{{route('case_mast.show', $case_notes->case_id.',clients')}}" class="btn btn-sm btn-info pull-right">Back</a>
					@else
						<a href="{{route('case_mast.show', $case_notes->case_id.',case_diary')}}" class="btn btn-sm btn-info pull-right">Back</a>
					@endif

				</h3>
			</div>		
			<div class="box-body">
				<form action="{{route('case_notes.update', ['notes_id'=>$case_notes->case_notes_id])}}" method="post">
					@csrf
					@method('PATCH')					
					<div class="row form-group ">						
						<div class="col-md-6 col-xs-6 col-sm-6">
							<label for="case_note_heading">Case Notes Heading <span class="text-danger">*</span></label>
							<input type="text" name="case_note_heading" class="form-control" placeholder="Enter Note Heading" value="{{ old('case_note_heading') ?? $case_notes->case_note_heading }}" >
							@error('case_note_heading')
								<span class="invalid-feedback text-danger" role="alert">
								<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="col-md-6 col-xs-6 col-sm-6">
							<label for="case_notes_type">Case Notes Type <span class="text-danger">*</span></label>
							<select class="form-control" name="case_notes_type">
								<option value="0">Select Case Notes Type</option>
								<option value="p" {{$case_notes->case_notes_type == 'p' ? 'selected' : '' }}>Personal</option>
								<option value="c" {{$case_notes->case_notes_type == 'c' ? 'selected' : ''}}>Customer</option>
							</select>
							@error('case_notes_type')
								<span class="invalid-feedback text-danger" role="alert">
								<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="row form-group">
						<div class="col-xs-12">
							<label for="case_notes"> Case Notes <span class="text-danger">*</span></label>
							<textarea name="case_notes" rows="4" cols="50" class="form-control " placeholder="Case notes..."  id="summernote">{{old('case_notes') ?? $case_notes->case_notes}}</textarea>
							@error('case_notes')
								<span class="invalid-feedback text-danger" role="alert">
								<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
							<input type="hidden" name="cust_id" value="{{ $case_notes->cust_id }}">
							<input type="hidden" name="case_id" value="{{$case_notes->case_id}}" >
							<input type="hidden" name="page_name" value="{{$page_name}}">
							<button type="submit" class="btn btn-primary btn-md">Update</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
@endsection