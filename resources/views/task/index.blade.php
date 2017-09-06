@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                All Tasks
                <a href="{{url('task/create')}}" class="btn btn-info pull-right">Create Task</a>
                </div>

                <div class="panel-body">
					<table class="table table-bordered table table-striped">
						<tr>
							<td>#</td>
							<td>Name</td>
							<td>Description</td>
							<td>Data Created </td>
							<td>Data Updated</td>
							<td>Update</td>
							<td>Delete</td>
						</tr>
		                @forelse($tasks as $task)
							<tr>
								<td>{{$task->id}}</td>
								<td>{{$task->name}}</td>
								<td>{{$task->description}}</td>
								<td>{{$task->created_at}}</td>
								<td>{{$task->updated_at}}</td>
								<td><a class="btn btn-sm btn-warning" href="{{url('/task')}}/{{$task->id}}/edit">Edit</a></td>
								<td>
									<form action="{{url('/task')}}/{{$task->id}}" method="POST">
										{{csrf_field()}}
										{{method_field('DELETE')}}
										<input class="btn btn-sm btn-danger" type="submit" value="Delete">
									</form>
								</td>
							</tr>

		                @empty
							<tr><td class="danger" colspan="7"> No Task Found.</td></tr>
		                @endforelse
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection