/**
 * Created by st0001 on 2016-11-25.
 */
function pieChart(title,htmlId,name,value){

    var pieData=[];

    //将data中的值取到pieData中
    for(var i=0;i<name.length;i++){
        pieData.push([name[i],value[i]]);
    }

    $('#'+htmlId).highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: title
        },credits:{
            enabled:false // 禁用版权信息
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend:true
            }
        },
        series: [{
            type: 'pie',
            data: pieData
        }]
    });
}
