/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function startTime()
{
var tm=new Date();
var h=tm.getHours();
var m=tm.getMinutes();
var s=tm.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('time').innerHTML=h+":"+m; 
t=setTimeout('startTime()',500);
}
function checkTime(i)
{
if (i<10)
{
i="0" + i;
}
return i;
}

function elementEvent(idd, e){
    
    var params = {
        id:idd,
        event:e
    };
    $.ajax({
        type: 'GET',
        url: '../AjaxCore.php',
        dataType: 'json',
        data:params,
        success: function(data){
            $.each(data, function(){ 
                $('#'+this.element_id+'').attr('class', this.ongoing_class);
                $('#'+this.element_id+'').text(this.ongoing_value);
        });
    },
        error: function(){
            alert('oops');
        }
    });
}