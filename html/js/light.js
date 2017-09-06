Highcharts.chart('container',{

	title: {
		text: 'Data received  from the daughter board'
	},
	subtitle: {
		text:'Source: University of Sao Paulo'
	},
yAxis: {
	title: {
		text: 'Data'
	}
},
legend: {
	layout: 'vertical',
	align: 'right',
	verticalAlign: 'middle'
},

plotOptions: {
	series: {
		pointStart: 04/07/2017
	}
},
series: [{
	name: 'LightSensor',
	data: [43,52,57,42,56,67,78,09]
	},
	{
	name: 'TempSensor',
	data:[34,46,76,98,76,87,98,76]
	},
	{
	name: 'HumiditySensor',
	data:[34,87,76,43,87,98,54,67]
	}]
});

