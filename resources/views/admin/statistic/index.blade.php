@extends('admin.layouts.index')
@section('title', '综合分析')
@section('content') 
<div id="container" style="min-width:400px;height:400px;float:left;"></div>
<div id="source" style="min-width:400px;height:400px；float:right;"></div>

<script>
   // 创建渐变色
    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
            stops: [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });
    // 构建图表
    var chart = Highcharts.chart('container',{
        title: {
            text: '客户行业分析'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    },
                    connectorColor: 'silver'
                }
            }
        },
        series: [{
            type: 'pie',
            name: '客户行业',
            data: [
                ['餐饮',{{$repasts}}],
                ['建筑',{{$architectures}}],
                {
                    name: '石油',
                    y: {{$petroleums}},
                    sliced: true,
                    selected: true
                },
                ['矿石',{{$minerals}}],
                ['电子',{{$electronics}}],
            ]
        }]
    });
</script>
<script>
    var chart = Highcharts.chart('source', {
	title: {
		text: '客户来源占比',
		align: 'center',
		verticalAlign: 'middle',
		y: 50
	},
	tooltip: {
		headerFormat: '{series.name}<br>',
		pointFormat: '{point.name}: <b>{point.percentage:.1f}%</b>'
	},
	plotOptions: {
		pie: {
			dataLabels: {
				enabled: true,
				distance: -50,
				style: {
					fontWeight: 'bold',
					color: 'white',
					textShadow: '0px 1px 2px black'
				}
			},
			startAngle: -90, // 圆环的开始角度
			endAngle: 90,    // 圆环的结束角度
			center: ['50%', '75%']
		}
	},
	series: [{
		type: 'pie',
		name: '客户来源',
		innerSize: '50%',
		data: [
			['介绍',{{$introduces}}],
			['广告引入',{{$advertisings}}],
            ['其他',{{$elses}}],
			
		]
	}]
});

</script>
@endsection