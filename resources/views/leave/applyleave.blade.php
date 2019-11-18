 <style type="text/css">
 	.aa{
		margin-right: 100px	;
		margin-left: 100px;
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
 	}
 
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
 
[type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
    width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  margin-left: 50%;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #45a049;
}

 
/* Clear floats after the columns */
 

 
}
 </style>
  @extends('layout.admin')

@section('contents')
  <div class="row">
  	<div class="well" style="margin-right: 10%;margin-left: 10%"><h1>Apply for Leave</h1></div>
  </div>
  <form action="post" class="aa">
	<div class="form-group">
		<label  >Select Leave Type:</label>
		<select class="form-control"  >
			<option>Sick leave </option>
			<option>Maternity/Paternity*</option>
			<option>Morrning Leave</option>
			<option>leave time for family illness</option>
			<option>Annual Leave</option>
		</select>
	</div>
	<div class="form-group">
	<div class="row">
		<div class="col-lg-6">
  		<label>From Date</label>
  		<input type="date" name="dateofbirth" id="from"> 
  	</div>
  	<div class="col-lg-6">
  		<label>To Date</label>
  		<input type="Date" name="">	
  	</div>
	</div>
	</div> 
  	
  	  <div class="form-group">
  		<label>Description</label>
  		<textarea class="form-control" rows="5" id="comment"></textarea>
  	</div><br>
  	    
  		<input type="submit" name="" value="Submit">	
  	 
  </form>
  
  @endsection