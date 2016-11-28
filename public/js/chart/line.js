/**
 * Created by st0001 on 2016-11-16.
 */
function lineChart(htmlId,title,series) {

    var chart=new Highcharts.Chart({

        title: {
            text: title,
            x: -20 //center
        },
        chart:{
            type:"spline",
            renderTo : htmlId
        },
        credits:{
            enabled:false // 禁用版权信息
        },

        xAxis:{
//        	labels:{
//        		enabled:false
//        	}
            type: 'datetime',
            dateTimeLabelFormats: { // don't display the dummy year
                month: '%b %e'
            }
        },
        colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00',
            '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
        plotOptions: {
            spline:{
                marker:{
                    enabled:true,
                    radius:3
                }
            }
        },
        yAxis: {
            title:{
                text:null
            },
            gridLineWidth :0//在图上没有纵轴间隔线
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom',
            borderWidth: 0
        },
        series: series
    });
    return chart;
}
