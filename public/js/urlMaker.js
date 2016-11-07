/**
 * Created by st0001 on 2016-11-07.
 */
function getUrl(arr){
    var result='';
    $.each(arr,function(i,str){
        result=result+'/'+str;
    });
    return result;
}
