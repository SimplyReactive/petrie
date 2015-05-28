@extends('layouts.admin')

@section('style')
@endsection

@section('pageTitle', 'Dashboard')
@section('pageSummary', 'A summary of recent activity')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Area Chart
				</div>
				<div class="panel-body">
					<div id="morris-area-chart"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-9 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Bar Chart Example
				</div>
				<div class="panel-body">
					<div id="morris-bar-chart"></div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-12 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Donut Chart Example
				</div>
				<div class="panel-body">
					<div id="morris-donut-chart"></div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
@endsection