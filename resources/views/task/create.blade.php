@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                Create Task
                </div>

                <div class="panel-body">
					<form action="{{url('task')}}" method="POST">
						  {{ csrf_field() }}
					  <div class="form-group">
					    <label for="name">Task Name</label>
					    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Task Description</label>
					    <textarea class="form-control" rows="3" name="description"></textarea>
					  </div>
					  <button type="submit" class="btn btn-success">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection