/**
 * Created by st0001 on 2016-11-28.
 */

function column(htmlId,title,series) {
    var chart=new Highcharts.Chart({

        title: {
            text: title,
            x: -20 //center
        },
        chart:{
            type:"column",
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
        colors: ['#058DC7', '#FF9655', '#ED561B', '#DDDF00',
            '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4'],
        plotOptions: {
            column:{
                marker:{
                    enabled:true,
                    radius:3
                },
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
        yAxis: {
            title:{
                text:null
            },
            gridLineWidth :0,//在图上没有纵轴间隔线
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },

        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                    this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal;
            }
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

