
<style type="text/css">
 
</style> 
@extends('layout.admin')

@section('contents')
<div class="content">
	 <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>         
        <th>Employe Name</th>
        <th>Leave type</th>
        <th>Posting date</th>
        <th>status</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody >
      	@foreach ($leave as $leav)
        	<tr>
             <td>{{$leav->id}}</td>
             <td>{{$leav->from}}</td>
             <td>{{$leav->type}}</td>
             <td>{{$leav->submission_date}}</td>
             <td>{{$leav->status}}</td>
             <td><a href="/editemploy/" class="btn btn-primary">view</a></td>
          </tr>
        @endforeach
    </tbody>
  </table>
  <div class="row">
   <div class="col-lg-6 col-lg-offset-3 text-center">{{$leave->links()}}</div>
</div>

  </div>
@endsection