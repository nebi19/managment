@extends('layout.admin')

@section('contents')
   {{--  <h1>{{$title}}</h1> --}}
<div class="content">
   @if(count($errors)>0)
   <div class="alert alert-danger">
     
     <ul>
       @foreach($errors->all() as $errors)
       <li>{{$errors}}</li>
       @endforeach
     </ul>
   </div>
   @endif
    @if(\Session::has('success'))
   <div class="alert alert-success">
     <p>{{\Session::get('success')}}</p>
   </div>
   @endif 
		<h2>
		<a class="btn btn-success" href="/addemploy">ADD  Employee</a>
		</h2>
 
	 
  <br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Exprience</th>
        <th>Gender</th>
        <th>Hiring Date</th>
        <th>Salary/month</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="myTable">
      @foreach($employ as $employee)
      <tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->fristname}}</td>
        <td>{{$employee->exprience}}</td>
        <td>{{$employee->gender}}</td>
        <td>{{$employee->hiring_data}}</td>
        <td>{{$employee->monthly_salary}}</td>
        <td >
         <a href="/editemploy/{{$employee->id}}" class="btn btn-primary">Edit</a>
         <a href="/deletemploy/{{$employee->id}}" class="btn btn-danger">Delete</a>

       </td>
     </tr>
     @endforeach
       
    </tbody>
  </table>
 <div class="row">
   <div class="col-lg-6 col-lg-offset-3 text-center">{{$employ->links()}}</div>
</div>

</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
	</div>
	
 
 @endsection