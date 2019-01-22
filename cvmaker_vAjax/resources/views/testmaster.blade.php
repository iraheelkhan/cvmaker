@extends('layout.master')
@section('content')
	<div class="col-sm-6 col-lg-3">
	    <div class="overview-item overview-item--c1">
	        <div class="overview__inner">
	            <div class="overview-box clearfix">
	                <div class="icon">
	                   <i class="fas fa-users"></i>
	                </div>
	                <div class="text">
	                    <h2>10368</h2>
	                    <span>members online</span>
	                </div>
	            </div>
	            <div class="overview-chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
	                <canvas id="widgetChart1" height="724" width="920" class="chartjs-render-monitor" style="display: block; width: 460px; height: 362px;"></canvas>
	            </div>
	        </div>
	    </div>
	</div>

@endsection