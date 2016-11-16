/**
 * Created by st0001 on 2016-11-16.
 */
function bar(htmlId,title,series) {
    var chart=new Highcharts.Chart({
        chart: {
            type: 'column',
            renderTo:htmlId
        },
        title: {
            text: title
        },
        credits:{
            enabled:false // 禁用版权信息
        },
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            min: 0,
            title:{
                text:null
            },
            gridLineWidth :0//在图上没有纵轴间隔线
        },

        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom',
            borderWidth: 0
        },
        series:series
    });

    return chart;
}
