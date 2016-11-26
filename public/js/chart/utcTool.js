/**
 * Created by st0001 on 2016-11-25.
 */
function dateToUtc(date){
    var arr=date.split('-');
    var utc=Date.UTC(arr[0],arr[1],arr[2],0,0);
    return utc;
}

function timeToUtc(time){
    var arr=time.split(':');
    var utc=Date.UTC(0,0,0,arr[0],arr[1]);
    return utc;
}
