    var start = document.getElementById("start");
    var timeout = document.getElementById("timeout");
    var minute = document.getElementById("minute");
    var second = document.getElementById("second");
    var second24 = document.getElementById("second24");
    var reset12 = document.getElementById("reset12");
    var reset24 = document.getElementById("reset24");
    var reset14 = document.getElementById("reset14");
    var change = document.getElementById("change");
    var spare = document.getElementById("spare");

    var time_sum=720;
    var time_24=24;
    var go=true;

function cut()
{
        time_sum-= 1;
        var minutes=Math.floor(time_sum/60);
        var seconds=time_sum%60;
        time_24-=1;
        if(time_sum===0)
        {
            clearInterval(t);
            go = true;
            time_24 = 24;
            start.innerHTML="continute";
            reset12.style="background-color:yellow";
            reset24.style="background-color:yellow";
            start.style="background-color:#00F0F0";
            change.style="";
            timeout.style="";
            second24.style="background-color:red";
            minute.style="background-color:red";
            second.style="background-color:red";
            spare.style="background-color:red";
            spare.innerHTML="end";
        }
        if(time_24===0)
        {
            clearInterval(t);
            go=true;
            time_24=24;
            start.innerHTML="continute";
            reset12.style="background-color:yellow";
            reset24.style="background-color:lightblue";
            reset14.style="background-color:lightblue";
            start.style="background-color:#00F0F0;font-size:20px";
            change.style="";
            timeout.style="";
            second24.style="background-color:white";
            minute.style="background-color:white";
            second.style="background-color:white";
            spare.style="background-color:grey;fon-sizes:18px";
            spare.innerHTML="violation";

        }
        minute.innerHTML=minutes;
        second.innerHTML=seconds;
        if(time_24<=5)
        {
            second24.style.color='red';
        }
        else
        {
            second.style.color="red";
        }
        second24.innerHTML=time_24;
}
start.onclick=function()
{
    if(go)
    {
        if(time_sum<=0)
        {
            clearInterval(t);
        }
        else
        {
            t=setInterval(cut,1000);
            go=false;
            start.innerHTML="start";
            start.style='background-color:rgb(97, 97, 93)';
            timeout.style="background-color:lightblue";
            change.style="background-color:lightblue";
            reset12.style="";
            reset24.style="";
            reset14.style="";
            second24.style="";
            minute.style="";
            second.style="";
            spare.style="background-color:lightgreen";
            spare.innerHTML="GO";
        }
    }
    timeout.onclick=function()
    {
    if(time_sum<=0)
    {
        
    }
    else
    {
        clearInterval(t);
        start.innerHTML="continute";
        reset12.style="background-color:lightblue";
        reset24.style="background-color:lightblue";
        reset14.style="background-color:lightblue";
        start.style="backgroud-color:rgb(235, 57, 57)";
        change.style="background-color:grey";
        timeout.style="";
        if(!go)
        {
            spare.innerHTML="RELAX";
            spare.style="background-color:yellow;font-size:20px";
            
        }
            go=true;
        }
    }
}
    change.onclick=function()
    {
        if(!go)
        {
            if(time_sum<=24)
            {
                time_24=time_sum;
            }
            else
            {
                time_24=24;
            }
            go=false;
        }
    }
    reset12.onclick=function()
    {
        if(go)
        {
         clearInterval(t);
         time_sum=721;
         time_24=25;
         cut();
         go=true;
         start.innerHTML="start";
         reset12.style="";
         reset24.style="";
         reset14.style="";
         start.style="background-color:rgb(235, 57, 57)";
         change.style="";
         timeout.style="";
         second.innerHTML="00";
         minute.style="";
         second.style="";
         second24.style="";
         spare.style="";
         spare.innerHTML="GO";
        }
    }
    reset24.onclick=function()
    {
        if(go)
        {
         clearInterval(t);
         if(time_sum<=24)
         {
             time_24=time_sum+1;
         }
         else
         {
             time_24=25;
         }
         time_sum+=1;
         cut();
         go=true;
         start.innerHTML="continute";
         }
     }
     reset14.onclick=function()
     {
         if(go)
         {
             clearInterval(t);
             if(time_sum<=14)
             {
                 time_24=time_sum+1;
             }
             else
             {
                 time_24=15;
             }
             time_sum+=1;
             cut();
             go=true;
             start.innerHTML="continute";
         }
     }
     //SCORE 
    //  var score_a=0;
    //  var score_b=0;
    //  var score1=document.getElementById('score1').getElementsByClassName('score11');
    //  var score2=document.getElementById('score2').getElementsByClassName('score11');
    //  var add1=document.getElementById('score1').getElementsByClassName('add');
    //  add1[0].onclick=function()
    //  {
    //      score_a+=3;
    //      score1[0].innerHTML=score_a;
    //  }
    //   add1[1].onclick=function()
    //  {
    //      score_a+=2;
    //      score1[0].innerHTML=score_a;
    //  }
    //   add1[2].onclick=function()
    //  {
    //      score_a+=1;
    //      score1[0].innerHTML=score_a;
    //  }
    //   add1[3].onclick=function()
    //  {
    //         if(score_a>0)
    //         {     
    //         score_a-=1;
    //         score1[0].innerHTML=score_a;
    //             if(score_a==0)
    //             {
    //                 score[0].innerHTML="00";
    //             }
    //     }
    //  }
    //  add1[4].onclick=function()
    //  {
    //      score_a=0;
    //      score1[0].innerHTML="00";
    //  }
    //  var add2=document.getElementById('score2').getElementsByClassName('add');
    //  add2[0].onclick=function()
    //  {
    //      score_b+=3;
    //      score2[0].innerHTML=score_b;
    //  }
    //   add2[1].onclick=function()
    //  {
    //      score_b+=2;
    //      score2[0].innerHTML=score_b;
    //  }
    //   add2[2].onclick=function()
    //  {
    //      score_b+=1;
    //      score2[0].innerHTML=score_b;
    //  }
    //   add2[3].onclick=function()
    //  {
    //         if(score_b>0)
    //         {     
    //         score_b-=1;
    //         score2[0].innerHTML=score_b;
    //             if(score_b==0)
    //             {
    //                 score[0].innerHTML="00";
    //             }
    //     }
    //  }
    //  add2[4].onclick=function()
    //  {
    //      score_b=0;
    //      score2[0].innerHTML="00";
    //  }
     
     
    //team foul
    var homefoul=document.getElementById('teamfoulhome');
    var teamfoul1=document.getElementById('teamfoul2home');
    var teamfoul=0;
    teamfoul1.onclick=function()
    {
       teamfoul=teamfoul+1;
       teamfoul1.innerHTML=teamfoul;
    }
    
    teamfoul1.ondblclick=function()
    {
       teamfoul=0;
       teamfoul1.innerHTML=teamfoul;
    }
    
     var homefoul2=document.getElementById('teamfoul');
    var teamfoul12=document.getElementById('teamfoul2');
    var teamfoulg=0;
    teamfoul12.onclick=function()
    {
       teamfoulg=teamfoulg+1;
       teamfoul12.innerHTML=teamfoulg;
    }
    
    teamfoul12.ondblclick=function()
    {
       teamfoulg=0;
       teamfoul12.innerHTML=teamfoulg;
    }
 
 