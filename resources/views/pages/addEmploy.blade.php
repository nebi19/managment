@extends('layout.admin')

@section('contents')
	<div class="content" style="margin-right: 200px; margin-left: 200px;">
		<h2>
		<a class="btn btn-success" href="/viewdetail">View Employee</a>
		<a class="btn btn-success pull-right" href="/viewdetail">Back</a>
		</h2>
		<form action="/add_employe" method="post" >
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">Frist name</label>
				<input type="text" name="fristname" id="name" class="form-control" required>
				<label for="name">Middle name</label>
				<input type="text" name="Middlename" id="roll" class="form-control" required>
				<label for="name">Last name</label>
				<input type="text" name="lastname" id="roll" class="form-control" required>
				 <label for="sel1"> Gender:</label>
				<select class="form-control" id="sel1" name="gender">
					<option>Femel</option>
					<option>Male</option>
				</select>
				<label for="name">Annual salary</label>
				<input type="text" name="salary" id="roll" class="form-control" required>
				<label for="name">exprience</label>
				<input type="text" name="exprience" id="roll" class="form-control" required>
				 <div class="form-group">
				<label for="name">Hiring date</label>
				<input type="date" name="hiring_date" id="hiring_date" class="form-control" required>
			</div>
				 <button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>

 
</div>

  
 @endsection