<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="calendar.css">
    <link rel="stylesheet" href="./assets/js/fullcalendar/lib/main.css">
    <script src="./assets/js/fullcalendar/lib/main.js"></script>
     <script src="./assets/js/bootstrap.bundle.min.js"></script>
     <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <title>Document</title>
      <style>
          
          body{
              background-color:lightgoldenrodyellow;
          }
          table{width: 100%;
                  border: 0.5px black solid;
                  
                  
            }
            thead{
                background-color: lightblue;
            }
            td,th{
                padding-top: 8px;
                padding-bottom: 8px;
                text-align: center;
                border-bottom: 0.5px black solid;
                
            }
            td{
                background-color: white;
            }
            a{
                text-decoration: none;
                color: green;
                text-align: center;
                background-color: lightcyan;
                border: skyblue 1px solid;
                
            }
            div{
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 8px;
                margin: 7px;
                font-size: 24px;
            }
           
        </style>
    
<!--    <script>
        document.addEventListener('DOMContentLoaded',function()
    {
        var calendarE1 =document.getElementById("calendar");
        var calendar=new FullCalendar.Calendar(calendarE1,{
            initialView:'dayGridMonth',
            height:900,
            events:'fetchEvents.php',
        });
        calendar.render();
    });
    </script>-->
</head>
<body>
<!--<div class="container">
<div class="wrapper">
    <div id="calendar"></div>
</div>
</div>-->
<?php
require_once 'phplinkDb.php';
if (isset($_GET['bt2'])) {
    $Winteam = $_GET['winning_team'];
    $Winscore = $_GET['winning_score'];
    $Loseteam = $_GET['loseing_team'];
    $Losescore = $_GET['loseing_score'];
    $date = $_GET['Date'];
    $db = new connectDb('','js_basketball_sc');
    $db->InssertQuery("gameDay", "Winningteam='" . $Winteam . "',Winscore='" . $Winscore . "',Loseingteam='" . $Loseteam . "',Losescore='" . $Losescore . "',Date='".$date."'");

    //echo "成功";
}

  $conn=@new mysqli("localhost","root","");
        if($conn->connect_error)
        {
            die("錯誤訊息: $conn->connect_error <br>");
        }
        else 
        {
            //echo"連線伺服器成功<br>";
            
            $conn->select_db("js_basketball_sc");//選擇資料庫
             $conn->set_charset("utf8");//設定編碼
             $sql="select id as 場次編號, Winningteam as 勝隊, Winscore as 勝隊得分, Loseingteam as 敗隊, Losescore as 敗隊得分, Date as 日期 from gameDay";
             
             if($result=$conn->query($sql))
            {
                 echo "<center><h1><strong>大專聯賽</strong></h1></center>";
                 echo "<table><thead><tr>";
            while($meta=$result->fetch_field()){
                echo "<th>$meta->name</th>";
            }
            echo "<tr></thead><tbody>";
                while($row=$result->fetch_row())//每一筆紀錄
                {   echo "<tr>";
                    for($i=0;$i<count($row);$i++)//每一欄位
                {
                     echo "<td>$row[$i]</td>";
                }
                   /* echo "$row[0]<br>";
                    echo "$row[1]<br>";
                    echo "$row[2]<br>";
                    echo "$row[3]<br>";
                    echo "$row[4]<br>";
                    echo "$row[5]<br>";
                    echo "$row[6]<br>";
                    echo "$row[7]<br>";
                    echo "$row[8]<br>";*/
                   
                echo "</tr>";    
                }
                echo "</tbody></table>";
                $result->free();//釋放記憶體
            }
          $conn->close();      
        }

        echo '<div><a href="web_boostrap.php">back</a></div>';











?>
    
</body>
</html>










