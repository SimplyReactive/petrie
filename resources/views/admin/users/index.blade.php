@extends('layouts.admin')

@section('style')
@endsection

@section('pageTitle', 'Users')
@section('pageSummary', 'An interface to manage all users of this site.')

@section('breadCrumbs')
	@parent
	<li><a href="/admin/users">Users</a></li>
	<li class="active">Index</li>
@stop

@section('content')
	<div class="row">
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
				<th>User</th>
				<th>Status</th>
				<th>Actions</th>
				</thead>
				<tbody>
				@foreach ($users as $user)
					<tr>
						<td><a href="{{ route('admin.users.show', [$user->hash]) }}">{{ $user->email }}</a></td>
						<td>{{ $user->status }} </td>
						<td>
							{{-- Edit Button --}}
							<button class="btn btn-default" type="button" onClick="location.href='{{ route('admin.users.edit', [$user->hash]) }}'">Edit</button>

							{{-- Suspend Button --}}
							@if ($user->status != 'Suspended')
								<button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.suspend', [$user->hash]) }}'">Suspend</button>
							@else
								<button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.unsuspend', [$user->hash]) }}'">Un-Suspend</button>
							@endif

							{{-- Ban Button --}}
							@if ($user->status != 'Banned')
								<button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.ban', [$user->hash]) }}'">Ban</button>
							@else
								<button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.unban', [$user->hash]) }}'">Un-Ban</button>
							@endif

							{{-- Delete Button --}}
							<button class="btn btn-default action_confirm" href="{{ route('sentinel.users.destroy', [$user->hash]) }}" data-token="{{ Session::getToken() }}" data-method="delete">Delete</button>
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection

@section('script')
@endsection