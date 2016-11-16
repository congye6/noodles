/**
 * Created by st0001 on 2016-11-16.
 */
function lineChart(htmlId,series,title) {
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
