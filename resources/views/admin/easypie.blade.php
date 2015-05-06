@extends('layouts.admin')

@section('pageTitle', 'Easy Pie Chart')
@section('pageSummary', 'Examples of how to use the jQuery.Easy-Pie-Chart plugin')

@section('style')
	<style>
		.easy-pie-chart {
			position: relative;
			text-align: center;
		}

		.easy-pie-chart canvas {
			position: absolute;
			top: 0;
			left: 0;
		}

		.chart {
			float: left;
			margin: 10px;
		}

		.percentage, .label {
			text-align: center;
			color: #333;
			font-weight: 100;
			font-size: 1.2em;
			margin-bottom: 0.3em;
		}
	</style>
@endsection

@section('script')
	<script type="text/javascript">
		$(function() {
			$('#easypiechart-blue').easyPieChart({
				scaleColor: false,
				trackColor: false,
				lineCap: 'butt',
				barColor: '#30a5ff'
			});
			$('#easypiechart-orange').easyPieChart({
				scaleColor: false,
				animate: 2000,
				barColor: '#ffb53e'
			});
			$('#easypiechart-teal').easyPieChart({
				scaleColor: '#1ebfae',
				lineCap: 'square',
				barColor: '#1ebfae'
			});
			$('#easypiechart-red').easyPieChart({
				scaleColor: '#d5d5d5',
				trackColor: 'pink',
				barColor: '#f9243f'
			});
			setTimeout(function() {
				var newNum = 40;
				var oldNum = parseInt($('#easypiechart-red span.percent').text());
				$('#easypiechart-red').data('easyPieChart').update(newNum);
				var percent_number_step = $.animateNumber.numberStepFactories.append('%');;
				$('#easypiechart-red span.percent').prop('number', oldNum)
					.animateNumber(
					{
						number: newNum,
						numberStep: percent_number_step
					}, 800);
			}, 2000);
		});
	</script>
@endsection

@section('content')
	<div class="row">
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<h4>Example 1</h4>
					<div class="easypiechart" id="easypiechart-blue" data-percent="82" ><span class="percent">82%</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<h4>Example 2</h4>
					<div class="easypiechart" id="easypiechart-orange" data-percent="55" ><span class="percent">55%</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<h4>Example 3</h4>
					<div class="easypiechart" id="easypiechart-teal" data-percent="84" ><span class="percent">84%</span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-md-3">
			<div class="panel panel-default">
				<div class="panel-body easypiechart-panel">
					<h4>Example 4</h4>
					<div class="easypiechart" id="easypiechart-red" data-percent="96" ><span class="percent">96%</span>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection