<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>قياس الوعي السيبراني</title>
  <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
  <!-- <script src="Code.js"></script> -->
  <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
        google.charts.load('current', {'packages':['table']});
        google.charts.setOnLoadCallback(drawTable);

        function drawTable() {
          var data = new google.visualization.DataTable();
          data.addColumn('number', 'Student ID');
          data.addColumn('string', 'Student name');
          data.addColumn('string', 'Student email');
          data.addColumn('number', 'Student age');
          data.addColumn('string', 'college');
          data.addColumn('string', 'First section, question one');
          data.addColumn('string', 'First section, question two');
          data.addColumn('string', 'First section, question three');
          data.addColumn('string', 'Second section, question one');
          data.addColumn('string', 'Second section, question two');
          data.addColumn('string', 'Second section, question three');
          while($row = mysql_fetch_array($result))
          {
            data.addRows([
              ["$row['ID']","$row['Name']", "$row['Email']", "$row['Age']", "$row['College']", "$row['P1Q1']", "$row['P1Q2']", "$row['P1Q3']", "$row['P2Q1']", "$row['P2Q2']", "$row['P2Q3']" ]
            ]);
          }



          var table = new google.visualization.Table(document.getElementById('table_div'));

          table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
        }
      </script> -->
      <style>
      th {
text-align: center;
padding: 15px;
}
td {
  padding: 15px;
}
      </style>
    </head>

<body>


<!-- <h2><?php  if(isset($msg)) echo $msg; ?></h2> -->
  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <!-- <nav class="navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#info">بيانات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#basic">اساسيات</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#know">المفاهيم</a>
            </li>
          </ul>

        </div>
      </nav> -->


      <!-- Title -->

<div class="row justify-content-center" style="text-align: center;">
      <div style="text-align: center;">
          <img class="img-fluid" src="logo.png" alt="uni-logo" style="position: relative;">
<h1 class="big-heading">قياس الوعي السيبراني</h1>
        </div>

        

        

      </div>


    </div>
  </section>

  <br>
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-6">

          <?php
          // header('Content-Type: text/html; charset=utf-8');
        include("Config.php");
        $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
      $db_name='4072248_db'; //Should contain the "Database Name" value
      $db_user='4072248_db'; //Should contain the "Database User" value
      $db_pass='123456789db'; //Should contain the "Database Password" value

      $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        $query ="SELECT AVG(`P1`) FROM `t1` WHERE College ='ENG'";
        $result=mysqli_query($conn,$query);
        $row = mysqli_fetch_array($result);

        $query1 ="SELECT AVG(`P1`) FROM `t1` WHERE College ='bus'";
        $result1=mysqli_query($conn,$query1);
        $row1 = mysqli_fetch_array($result1);

        $query2 ="SELECT AVG(`P1`) FROM `t1` WHERE College ='com'";
        $result2=mysqli_query($conn,$query2);
        $row2 = mysqli_fetch_array($result2);

        $query3 ="SELECT AVG(`P1`) FROM `t1` WHERE College ='med'";
        $result3=mysqli_query($conn,$query3);
        $row3 = mysqli_fetch_array($result3);

        $query4 ="SELECT AVG(`P1`) FROM `t1` WHERE College ='phar'";
        $result4=mysqli_query($conn,$query4);
        $row4 = mysqli_fetch_array($result4);

        $query5 ="SELECT AVG(`P1`) FROM `t1` WHERE College ='den'";
        $result5=mysqli_query($conn,$query5);
        $row5 = mysqli_fetch_array($result5);

        $query6 ="SELECT AVG(`P1`) FROM `t1` WHERE College ='sci'";
        $result6=mysqli_query($conn,$query6);
        $row6 = mysqli_fetch_array($result6);

        $query7 ="SELECT AVG(`P1`) FROM `t1` WHERE College ='edu'";
        $result7=mysqli_query($conn,$query7);
        $row7 = mysqli_fetch_array($result7);

        $query8 ="SELECT AVG(`P1`) FROM `t1` WHERE College ='hum'";
        $result8=mysqli_query($conn,$query8);
        $row8 = mysqli_fetch_array($result8);

        $query9 ="SELECT AVG(`P1`) FROM `t1` WHERE College ='art'";
        $result9=mysqli_query($conn,$query9);
        $row9 = mysqli_fetch_array($result9);

        $query10 ="SELECT AVG(`P1`) FROM `t1` WHERE College ='app'";
        $result10=mysqli_query($conn,$query10);
        $row10 = mysqli_fetch_array($result10);

        //var barColors = ['red', 'green','blue','orange','brown','grey', 'olive','steelblue','tan','yellowgreen','navy'];



      echo "<canvas id='myChart' style='width:100%;max-width:600px'></canvas>";

        echo "<script>
      var xValues = ['كلية الهندسة', 'كلية ادارة الاعمال', 'كلية هندسة و علوم الحاسب', 'كلية الطب البشري', 'كلية الصيدلة', 'كلية طب الأسنان', 'كلية العلوم الطبية التطبيقية', 'كلية التربية', 'كلية العلوم والدراسات الإنسانية', 'كلية الآداب و العلوم', 'الكلية التطبيقية'];
      var yValues = [". $row[0] . ",".$row1[0].", ".$row2[0].", ".$row3[0].", ".$row4[0].", ".$row5[0].", ".$row6[0].", ".$row7[0].", ".$row8[0].", ".$row9[0].", ".$row10[0]."];
      var barColors ='steelblue';



      new Chart('myChart', {
        type: 'bar',
        data: {
          labels: xValues,
          datasets: [{
            backgroundColor: barColors,
            data: yValues
          }]
        },
        options: {
          scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

          legend: {display: false},
          title: {
            display: true,
            text: 'أساسيات الأمن السيبراني'
          }
        }
      });
      </script>";

      echo"<br>";
      echo "<canvas id='myChart1' style='width:100%;max-width:600px'></canvas>";

      $q ="SELECT AVG(`P2`) FROM `t1` WHERE College ='ENG'";
      $r=mysqli_query($conn,$q);
      $ro = mysqli_fetch_array($r);

      $q1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='bus'";
      $r1=mysqli_query($conn,$q1);
      $ro1 = mysqli_fetch_array($r1);

      $q2 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='com'";
      $r2=mysqli_query($conn,$q2);
      $ro2 = mysqli_fetch_array($r2);

      $q3 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='med'";
      $r3=mysqli_query($conn,$q3);
      $ro3 = mysqli_fetch_array($r3);

      $q4 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='phar'";
      $r4=mysqli_query($conn,$q4);
      $ro4 = mysqli_fetch_array($r4);

      $q5 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='den'";
      $r5=mysqli_query($conn,$q5);
      $ro5 = mysqli_fetch_array($r5);

      $q6 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='sci'";
      $r6=mysqli_query($conn,$q6);
      $ro6 = mysqli_fetch_array($r6);

      $q7 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='edu'";
      $r7=mysqli_query($conn,$q7);
      $ro7 = mysqli_fetch_array($r7);

      $q8 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='hum'";
      $r8=mysqli_query($conn,$q8);
      $ro8 = mysqli_fetch_array($r8);

      $q9 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='art'";
      $r9=mysqli_query($conn,$q9);
      $ro9 = mysqli_fetch_array($r9);

      $q10 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='app'";
      $r10=mysqli_query($conn,$q10);
      $ro10 = mysqli_fetch_array($r10);

      echo "<script>
      var xValues = ['كلية الهندسة', 'كلية ادارة الاعمال', 'كلية هندسة و علوم الحاسب', 'كلية الطب البشري', 'كلية الصيدلة', 'كلية طب الأسنان', 'كلية العلوم الطبية التطبيقية', 'كلية التربية', 'كلية العلوم والدراسات الإنسانية', 'كلية الآداب و العلوم', 'الكلية التطبيقية'];
      var yValues = [". $ro[0] . ",".$ro1[0].", ".$ro2[0].", ".$ro3[0].",".$ro4[0].", ".$ro5[0].", ".$ro6[0].", ".$ro7[0].", ".$ro8[0].", ".$ro9[0].", ".$ro10[0]."];
      var barColors ='steelblue';



      new Chart('myChart1', {
      type: 'bar',
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

        legend: {display: false},
        title: {
          display: true,
          text: 'برامج الفدية'
        }
      }
      });
      </script>";
        ?>

        </div>

        <div class="col-lg-6">

        <?php
        // header('Content-Type: text/html; charset=utf-8');
      include("Config.php");
    $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
    $db_name='4072248_db'; //Should contain the "Database Name" value
    $db_user='4072248_db'; //Should contain the "Database User" value
    $db_pass='123456789db'; //Should contain the "Database Password" value

      
      $qu ="SELECT AVG(`P3`) FROM `t1` WHERE College ='ENG'";
      $re=mysqli_query($conn,$qu);
      $roo = mysqli_fetch_array($re);

      $qu1 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='bus'";
      $re1=mysqli_query($conn,$qu1);
      $roo1 = mysqli_fetch_array($re1);

      $qu2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='com'";
      $re2=mysqli_query($conn,$qu2);
      $roo2 = mysqli_fetch_array($re2);

      $qu3 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='med'";
      $re3=mysqli_query($conn,$qu3);
      $roo3 = mysqli_fetch_array($re3);

      $qu4 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='phar'";
      $re4=mysqli_query($conn,$qu4);
      $roo4 = mysqli_fetch_array($re4);

      $qu5 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='den'";
      $re5=mysqli_query($conn,$qu5);
      $roo5 = mysqli_fetch_array($re5);

      $qu6 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='sci'";
      $re6=mysqli_query($conn,$qu6);
      $roo6 = mysqli_fetch_array($re6);

      $qu7 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='edu'";
      $re7=mysqli_query($conn,$qu7);
      $roo7 = mysqli_fetch_array($re7);

      $qu8 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='hum'";
      $re8=mysqli_query($conn,$qu8);
      $roo8 = mysqli_fetch_array($re8);

      $qu9 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='art'";
      $re9=mysqli_query($conn,$qu9);
      $roo9 = mysqli_fetch_array($re9);

      $qu10 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='app'";
      $re10=mysqli_query($conn,$qu10);
      $roo10 = mysqli_fetch_array($re10);


      //var barColors = ['red', 'green','blue','orange','brown','grey', 'olive','steelblue','tan','yellowgreen','navy'];



    echo "<canvas id='myChart3' style='width:100%;max-width:600px'></canvas>";

    echo "<script>
    var xValues = ['كلية الهندسة', 'كلية ادارة الاعمال', 'كلية هندسة و علوم الحاسب', 'كلية الطب البشري', 'كلية الصيدلة', 'كلية طب الأسنان', 'كلية العلوم الطبية التطبيقية', 'كلية التربية', 'كلية العلوم والدراسات الإنسانية', 'كلية الآداب و العلوم', 'الكلية التطبيقية'];
    var yValues = [". $roo[0] . ",".$roo1[0].", ".$roo2[0].", ".$roo3[0].", ".$roo4[0].", ".$roo5[0].", ".$roo6[0].", ".$roo7[0].", ".$roo8[0].", ".$roo9[0].", ".$roo10[0]."];
    var barColors ='steelblue';



    new Chart('myChart3', {
      type: 'bar',
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

        legend: {display: false},
        title: {
          display: true,
          text: 'التصيد'
        }
      }
    });
    </script>";

    echo"<br>";
    echo "<canvas id='myChart4' style='width:100%;max-width:600px'></canvas>";

    $que ="SELECT AVG(`P4`) FROM `t1` WHERE College ='eng'";
    $res=mysqli_query($conn,$que);
    $roww = mysqli_fetch_array($res);

    $que1 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='bus'";
    $res1=mysqli_query($conn,$que1);
    $roww1 = mysqli_fetch_array($res1);

    $que2 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='com'";
    $res2=mysqli_query($conn,$que2);
    $roww2 = mysqli_fetch_array($res2);

    $que3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='med'";
    $res3=mysqli_query($conn,$que3);
    $roww3 = mysqli_fetch_array($res3);

    $que4 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='phar'";
    $res4=mysqli_query($conn,$que4);
    $roww4 = mysqli_fetch_array($res4);

    $que5 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='den'";
    $res5=mysqli_query($conn,$que5);
    $roww5 = mysqli_fetch_array($res5);

    $que6 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='sci'";
    $res6=mysqli_query($conn,$que6);
    $roww6 = mysqli_fetch_array($res6);

    $que7 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='edu'";
    $res7=mysqli_query($conn,$que7);
    $roww7 = mysqli_fetch_array($res7);

    $que8 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='hum'";
    $res8=mysqli_query($conn,$que8);
    $roww8 = mysqli_fetch_array($res8);

    $que9 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='art'";
    $res9=mysqli_query($conn,$que9);
    $roww9 = mysqli_fetch_array($res9);

    $que10 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='app'";
    $res10=mysqli_query($conn,$que10);
    $roww10 = mysqli_fetch_array($res10);


    echo "<script>
    var xValues = ['كلية الهندسة', 'كلية ادارة الاعمال', 'كلية هندسة و علوم الحاسب', 'كلية الطب البشري', 'كلية الصيدلة', 'كلية طب الأسنان', 'كلية العلوم الطبية التطبيقية', 'كلية التربية', 'كلية العلوم والدراسات الإنسانية', 'كلية الآداب و العلوم', 'الكلية التطبيقية'];
    var yValues = [". $roww[0] . ",".$roww1[0].", ".$roww2[0].", ".$roww3[0].",".$roww4[0].", ".$roww5[0].", ".$roww6[0].", ".$roww7[0].", ".$roww8[0].", ".$roww9[0].", ".$roww10[0]."];
    var barColors ='steelblue';



    new Chart('myChart4', {
    type: 'bar',
    data: {
      labels: xValues,
      datasets: [{
        backgroundColor: barColors,
        data: yValues
      }]
    },
    options: {
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

      legend: {display: false},
      title: {
        display: true,
        text: 'الوصول عن بعد'
      }
    }
    });
    </script>";

?>


</div>
<div class="col-lg-6">

<?php
// header('Content-Type: text/html; charset=utf-8');
include("Config.php");
$db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
$db_name='4072248_db'; //Should contain the "Database Name" value
$db_user='4072248_db'; //Should contain the "Database User" value
$db_pass='123456789db'; //Should contain the "Database Password" value

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$quer ="SELECT AVG(`P5`) FROM `t1` WHERE College ='ENG'";
$resu=mysqli_query($conn,$quer);
$rroo = mysqli_fetch_array($resu);

$quer1 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='bus'";
$resu1=mysqli_query($conn,$quer1);
$rroo1 = mysqli_fetch_array($resu1);

$quer2 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='com'";
$resu2=mysqli_query($conn,$quer2);
$rroo2 = mysqli_fetch_array($resu2);

$quer3 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='med'";
$resu3=mysqli_query($conn,$quer3);
$rroo3 = mysqli_fetch_array($resu3);

$quer4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='phar'";
$resu4=mysqli_query($conn,$quer4);
$rroo4 = mysqli_fetch_array($resu4);

$quer5 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='den'";
$resu5=mysqli_query($conn,$quer5);
$rroo5 = mysqli_fetch_array($resu5);

$quer6 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='sci'";
$resu6=mysqli_query($conn,$quer6);
$rroo6 = mysqli_fetch_array($resu6);

$quer7 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='edu'";
$resu7=mysqli_query($conn,$quer7);
$rroo7 = mysqli_fetch_array($resu7);

$quer8 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='hum'";
$resu8=mysqli_query($conn,$quer8);
$rroo8 = mysqli_fetch_array($resu8);

$quer9 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='art'";
$resu9=mysqli_query($conn,$quer9);
$rroo9 = mysqli_fetch_array($resu9);

$quer10 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='app'";
$resu10=mysqli_query($conn,$quer10);
$rroo10 = mysqli_fetch_array($resu10);


//var barColors = ['red', 'green','blue','orange','brown','grey', 'olive','steelblue','tan','yellowgreen','navy'];



echo "<canvas id='myChart5' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['كلية الهندسة', 'كلية ادارة الاعمال', 'كلية هندسة و علوم الحاسب', 'كلية الطب البشري', 'كلية الصيدلة', 'كلية طب الأسنان', 'كلية العلوم الطبية التطبيقية', 'كلية التربية', 'كلية العلوم والدراسات الإنسانية', 'كلية الآداب و العلوم', 'الكلية التطبيقية'];
var yValues = [". $rroo[0] . ",".$rroo1[0].", ".$rroo2[0].", ".$rroo3[0]." , ".$rroo4[0].", ".$rroo5[0].", ".$rroo6[0].", ".$rroo7[0].", ".$rroo8[0].", ".$rroo9[0].", ".$rroo10[0]."];
var barColors ='steelblue';



new Chart('myChart5', {
type: 'bar',
data: {
labels: xValues,
datasets: [{
  backgroundColor: barColors,
  data: yValues
}]
},
options: {
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

legend: {display: false},
title: {
  display: true,
  text: 'الامن السيبراني المادي'
}
}
});
</script>";

?>
</div>

<div class="col-lg-6">

<?php


echo "<canvas id='myChart6' style='width:100%;max-width:600px'></canvas>";

$qque ="SELECT COUNT(`College`) FROM `t1` WHERE College ='eng'";
$rres=mysqli_query($conn,$qque);
$rrow = mysqli_fetch_array($rres);

$qque1 ="SELECT COUNT(`College`) FROM `t1` WHERE College ='bus'";
$rres1=mysqli_query($conn,$qque1);
$rrow1 = mysqli_fetch_array($rres1);

$qque2 ="SELECT COUNT(`College`) FROM `t1` WHERE College ='com'";
$rres2=mysqli_query($conn,$qque2);
$rrow2 = mysqli_fetch_array($rres2);

$qque3 ="SELECT COUNT(`College`) FROM `t1` WHERE College ='med'";
$rres3=mysqli_query($conn,$qque3);
$rrow3 = mysqli_fetch_array($rres3);

$qque4 ="SELECT COUNT(`College`) FROM `t1` WHERE College ='phar'";
$rres4=mysqli_query($conn,$qque4);
$rrow4 = mysqli_fetch_array($rres4);

$qque5 ="SELECT COUNT(`College`) FROM `t1` WHERE College ='den'";
$rres5=mysqli_query($conn,$qque5);
$rrow5 = mysqli_fetch_array($rres5);

$qque6 ="SELECT COUNT(`College`) FROM `t1` WHERE College ='sci'";
$rres6=mysqli_query($conn,$qque6);
$rrow6 = mysqli_fetch_array($rres6);

$qque7 ="SELECT COUNT(`College`) FROM `t1` WHERE College ='edu'";
$rres7=mysqli_query($conn,$qque7);
$rrow7 = mysqli_fetch_array($rres7);

$qque8 ="SELECT COUNT(`College`) FROM `t1` WHERE College ='hum'";
$rres8=mysqli_query($conn,$qque8);
$rrow8 = mysqli_fetch_array($rres8);

$qque9 ="SELECT COUNT(`College`) FROM `t1` WHERE College ='art'";
$rres9=mysqli_query($conn,$qque9);
$rrow9 = mysqli_fetch_array($rres9);

$qque10 ="SELECT COUNT(`College`) FROM `t1` WHERE College ='app'";
$rres10=mysqli_query($conn,$qque10);
$rrow10 = mysqli_fetch_array($rres10);


echo "<script>
var xValues = ['كلية الهندسة', 'كلية ادارة الاعمال', 'كلية هندسة و علوم الحاسب', 'كلية الطب البشري', 'كلية الصيدلة', 'كلية طب الأسنان', 'كلية العلوم الطبية التطبيقية', 'كلية التربية', 'كلية العلوم والدراسات الإنسانية', 'كلية الآداب و العلوم', 'الكلية التطبيقية'];
var yValues = [". $rrow[0] . ",".$rrow1[0].", ".$rrow2[0].", ".$rrow3[0].",".$rrow4[0].", ".$rrow5[0].", ".$rrow6[0].", ".$rrow7[0].", ".$rrow8[0].", ".$rrow9[0].", ".$rrow10[0]."];
var barColors = ['red', 'green','blue','orange','brown','grey', 'olive','steelblue','tan','yellowgreen','navy'];



new Chart('myChart6', {
  type: 'pie',
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues

    }]
  },
  options: {
  
    title: {
      display: true,
      text: 'عدد المشاركين'
    }
  }
});
</script>";
?>

</div>
</div>
</div>
<br>
<br>
<hr style="height:2px;border-width:0;width:50%;color:gray;background-color:gray">
<br>
<br>
<div class="container-fluid">    
<div class="row">
<div class="col-lg-6">

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$ENGquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='ENG'";
$ENGresult=mysqli_query($conn,$ENGquery);
$ENGrow = mysqli_fetch_array($ENGresult);

$ENGquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='ENG'";
$ENGresult1=mysqli_query($conn,$ENGquery1);
$ENGrow1 = mysqli_fetch_array($ENGresult1);

$ENGquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='ENG'";
$ENGresult2=mysqli_query($conn,$ENGquery2);
$ENGrow2 = mysqli_fetch_array($ENGresult2);

$ENGquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='ENG'";
$ENGresult3=mysqli_query($conn,$ENGquery3);
$ENGrow3 = mysqli_fetch_array($ENGresult3);

$ENGquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='ENG'";
$ENGresult4=mysqli_query($conn,$ENGquery4);
$ENGrow4 = mysqli_fetch_array($ENGresult4);


echo "<canvas id='myENGChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $ENGrow[0] . ",".$ENGrow1[0].", ".$ENGrow2[0].", ".$ENGrow3[0].", ".$ENGrow4[0].", ".$ENGrow5[0].", ".$ENGrow6[0].", ".$ENGrow7[0].", ".$ENGrow8[0].", ".$ENGrow9[0].", ".$ENGrow10[0]."];
var barColors ='steelblue';



new Chart('myENGChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

  legend: {display: false},
  title: {
    display: true,
    text: 'كلية الهندسة'
  }
}
});
</script>";

?>

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$BUSquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='BUS'";
$BUSresult=mysqli_query($conn,$BUSquery);
$BUSrow = mysqli_fetch_array($BUSresult);

$BUSquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='BUS'";
$BUSresult1=mysqli_query($conn,$BUSquery1);
$BUSrow1 = mysqli_fetch_array($BUSresult1);

$BUSquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='BUS'";
$BUSresult2=mysqli_query($conn,$BUSquery2);
$BUSrow2 = mysqli_fetch_array($BUSresult2);

$BUSquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='BUS'";
$BUSresult3=mysqli_query($conn,$BUSquery3);
$BUSrow3 = mysqli_fetch_array($BUSresult3);

$BUSquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='BUS'";
$BUSresult4=mysqli_query($conn,$BUSquery4);
$BUSrow4 = mysqli_fetch_array($BUSresult4);


echo "<canvas id='myBUSChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $BUSrow[0] . ",".$BUSrow1[0].", ".$BUSrow2[0].", ".$BUSrow3[0].", ".$BUSrow4[0].", ".$BUSrow5[0].", ".$BUSrow6[0].", ".$BUSrow7[0].", ".$BUSrow8[0].", ".$BUSrow9[0].", ".$BUSrow10[0]."];
var barColors ='steelblue';



new Chart('myBUSChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

  legend: {display: false},
  title: {
    display: true,
    text: 'كلية إدارة الأعمال'
  }
}
});
</script>";

?>

</div>

<div class="col-lg-6">

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$COMquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='COM'";
$COMresult=mysqli_query($conn,$COMquery);
$COMrow = mysqli_fetch_array($COMresult);

$COMquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='COM'";
$COMresult1=mysqli_query($conn,$COMquery1);
$COMrow1 = mysqli_fetch_array($COMresult1);

$COMquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='COM'";
$COMresult2=mysqli_query($conn,$COMquery2);
$COMrow2 = mysqli_fetch_array($COMresult2);

$COMquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='COM'";
$COMresult3=mysqli_query($conn,$COMquery3);
$COMrow3 = mysqli_fetch_array($COMresult3);

$COMquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='COM'";
$COMresult4=mysqli_query($conn,$COMquery4);
$COMrow4 = mysqli_fetch_array($COMresult4);


echo "<canvas id='myCOMChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $COMrow[0] . ",".$COMrow1[0].", ".$COMrow2[0].", ".$COMrow3[0].", ".$COMrow4[0].", ".$COMrow5[0].", ".$COMrow6[0].", ".$COMrow7[0].", ".$COMrow8[0].", ".$COMrow9[0].", ".$COMrow10[0]."];
var barColors ='steelblue';



new Chart('myCOMChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

  legend: {display: false},
  title: {
    display: true,
    text: 'كلية هندسة وعلوم الحاسب'
  }
}
});
</script>";

?>

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$MEDquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='MED'";
$MEDresult=mysqli_query($conn,$MEDquery);
$MEDrow = mysqli_fetch_array($MEDresult);

$MEDquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='MED'";
$MEDresult1=mysqli_query($conn,$MEDquery1);
$MEDrow1 = mysqli_fetch_array($MEDresult1);

$MEDquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='MED'";
$MEDresult2=mysqli_query($conn,$MEDquery2);
$MEDrow2 = mysqli_fetch_array($MEDresult2);

$MEDquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='MED'";
$MEDresult3=mysqli_query($conn,$MEDquery3);
$MEDrow3 = mysqli_fetch_array($MEDresult3);

$MEDquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='MED'";
$MEDresult4=mysqli_query($conn,$MEDquery4);
$MEDrow4 = mysqli_fetch_array($MEDresult4);


echo "<canvas id='myMEDChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $MEDrow[0] . ",".$MEDrow1[0].", ".$MEDrow2[0].", ".$MEDrow3[0].", ".$MEDrow4[0].", ".$MEDrow5[0].", ".$MEDrow6[0].", ".$MEDrow7[0].", ".$MEDrow8[0].", ".$MEDrow9[0].", ".$MEDrow10[0]."];
var barColors ='steelblue';



new Chart('myMEDChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

  legend: {display: false},
  title: {
    display: true,
    text: 'كلية الطب البشري'
  }
}
});
</script>";

?>

</div>



</div>

<div class="row">
<div class="col-lg-6">

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$PHARquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='PHAR'";
$PHARresult=mysqli_query($conn,$PHARquery);
$PHARrow = mysqli_fetch_array($PHARresult);

$PHARquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='PHAR'";
$PHARresult1=mysqli_query($conn,$PHARquery1);
$PHARrow1 = mysqli_fetch_array($PHARresult1);

$PHARquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='PHAR'";
$PHARresult2=mysqli_query($conn,$PHARquery2);
$PHARrow2 = mysqli_fetch_array($PHARresult2);

$PHARquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='PHAR'";
$PHARresult3=mysqli_query($conn,$PHARquery3);
$PHARrow3 = mysqli_fetch_array($PHARresult3);

$PHARquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='PHAR'";
$PHARresult4=mysqli_query($conn,$PHARquery4);
$PHARrow4 = mysqli_fetch_array($PHARresult4);


echo "<canvas id='myPHARChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $PHARrow[0] . ",".$PHARrow1[0].", ".$PHARrow2[0].", ".$PHARrow3[0].", ".$PHARrow4[0].", ".$PHARrow5[0].", ".$PHARrow6[0].", ".$PHARrow7[0].", ".$PHARrow8[0].", ".$PHARrow9[0].", ".$PHARrow10[0]."];
var barColors ='steelblue';



new Chart('myPHARChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

  legend: {display: false},
  title: {
    display: true,
    text: 'كلية الصيدلة'
  }
}
});
</script>";

?>

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$DENquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='DEN'";
$DENresult=mysqli_query($conn,$DENquery);
$DENrow = mysqli_fetch_array($DENresult);

$DENquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='DEN'";
$DENresult1=mysqli_query($conn,$DENquery1);
$DENrow1 = mysqli_fetch_array($DENresult1);

$DENquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='DEN'";
$DENresult2=mysqli_query($conn,$DENquery2);
$DENrow2 = mysqli_fetch_array($DENresult2);

$DENquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='DEN'";
$DENresult3=mysqli_query($conn,$DENquery3);
$DENrow3 = mysqli_fetch_array($DENresult3);

$DENquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='DEN'";
$DENresult4=mysqli_query($conn,$DENquery4);
$DENrow4 = mysqli_fetch_array($DENresult4);


echo "<canvas id='myDENChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $DENrow[0] . ",".$DENrow1[0].", ".$DENrow2[0].", ".$DENrow3[0].", ".$DENrow4[0].", ".$DENrow5[0].", ".$DENrow6[0].", ".$DENrow7[0].", ".$DENrow8[0].", ".$DENrow9[0].", ".$DENrow10[0]."];
var barColors ='steelblue';



new Chart('myDENChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

  legend: {display: false},
  title: {
    display: true,
    text: 'كلية طب الأسنان'
  }
}
});
</script>";

?>

</div>

<div class="col-lg-6">

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$SCIquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='SCI'";
$SCIresult=mysqli_query($conn,$SCIquery);
$SCIrow = mysqli_fetch_array($SCIresult);

$SCIquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='SCI'";
$SCIresult1=mysqli_query($conn,$SCIquery1);
$SCIrow1 = mysqli_fetch_array($SCIresult1);

$SCIquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='SCI'";
$SCIresult2=mysqli_query($conn,$SCIquery2);
$SCIrow2 = mysqli_fetch_array($SCIresult2);

$SCIquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='SCI'";
$SCIresult3=mysqli_query($conn,$SCIquery3);
$SCIrow3 = mysqli_fetch_array($SCIresult3);

$SCIquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='SCI'";
$SCIresult4=mysqli_query($conn,$SCIquery4);
$SCIrow4 = mysqli_fetch_array($SCIresult4);


echo "<canvas id='mySCIChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $SCIrow[0] . ",".$SCIrow1[0].", ".$SCIrow2[0].", ".$SCIrow3[0].", ".$SCIrow4[0].", ".$SCIrow5[0].", ".$SCIrow6[0].", ".$SCIrow7[0].", ".$SCIrow8[0].", ".$SCIrow9[0].", ".$SCIrow10[0]."];
var barColors ='steelblue';



new Chart('mySCIChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

  legend: {display: false},
  title: {
    display: true,
    text: 'كلية العلوم الطبية التطبيقية'
  }
}
});
</script>";

?>

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$EDUquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='EDU'";
$EDUresult=mysqli_query($conn,$EDUquery);
$EDUrow = mysqli_fetch_array($EDUresult);

$EDUquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='EDU'";
$EDUresult1=mysqli_query($conn,$EDUquery1);
$EDUrow1 = mysqli_fetch_array($EDUresult1);

$EDUquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='EDU'";
$EDUresult2=mysqli_query($conn,$EDUquery2);
$EDUrow2 = mysqli_fetch_array($EDUresult2);

$EDUquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='EDU'";
$EDUresult3=mysqli_query($conn,$EDUquery3);
$EDUrow3 = mysqli_fetch_array($EDUresult3);

$EDUquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='EDU'";
$EDUresult4=mysqli_query($conn,$EDUquery4);
$EDUrow4 = mysqli_fetch_array($EDUresult4);


echo "<canvas id='myEDUChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $EDUrow[0] . ",".$EDUrow1[0].", ".$EDUrow2[0].", ".$EDUrow3[0].", ".$EDUrow4[0].", ".$EDUrow5[0].", ".$EDUrow6[0].", ".$EDUrow7[0].", ".$EDUrow8[0].", ".$EDUrow9[0].", ".$EDUrow10[0]."];
var barColors ='steelblue';



new Chart('myEDUChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

  legend: {display: false},
  title: {
    display: true,
    text: 'كلية التربية'
  }
}
});
</script>";

?>

</div>



</div>

<div class="row">
<div class="col-lg-6">

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$HUMquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='HUM'";
$HUMresult=mysqli_query($conn,$HUMquery);
$HUMrow = mysqli_fetch_array($HUMresult);

$HUMquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='HUM'";
$HUMresult1=mysqli_query($conn,$HUMquery1);
$HUMrow1 = mysqli_fetch_array($HUMresult1);

$HUMquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='HUM'";
$HUMresult2=mysqli_query($conn,$HUMquery2);
$HUMrow2 = mysqli_fetch_array($HUMresult2);

$HUMquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='HUM'";
$HUMresult3=mysqli_query($conn,$HUMquery3);
$HUMrow3 = mysqli_fetch_array($HUMresult3);

$HUMquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='HUM'";
$HUMresult4=mysqli_query($conn,$HUMquery4);
$HUMrow4 = mysqli_fetch_array($HUMresult4);


echo "<canvas id='myHUMChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $HUMrow[0] . ",".$HUMrow1[0].", ".$HUMrow2[0].", ".$HUMrow3[0].", ".$HUMrow4[0].", ".$HUMrow5[0].", ".$HUMrow6[0].", ".$HUMrow7[0].", ".$HUMrow8[0].", ".$HUMrow9[0].", ".$HUMrow10[0]."];
var barColors ='steelblue';



new Chart('myHUMChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },

  legend: {display: false},
  title: {
    display: true,
    text: 'كلية العلوم والدراسات الإنسانية'
  }
}
});
</script>";

?>

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$ARTquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='ART'";
$ARTresult=mysqli_query($conn,$ARTquery);
$ARTrow = mysqli_fetch_array($ARTresult);

$ARTquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='ART'";
$ARTresult1=mysqli_query($conn,$ARTquery1);
$ARTrow1 = mysqli_fetch_array($ARTresult1);

$ARTquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='ART'";
$ARTresult2=mysqli_query($conn,$ARTquery2);
$ARTrow2 = mysqli_fetch_array($ARTresult2);

$ARTquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='ART'";
$ARTresult3=mysqli_query($conn,$ARTquery3);
$ARTrow3 = mysqli_fetch_array($ARTresult3);

$ARTquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='ART'";
$ARTresult4=mysqli_query($conn,$ARTquery4);
$ARTrow4 = mysqli_fetch_array($ARTresult4);


echo "<canvas id='myARTChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $ARTrow[0] . ",".$ARTrow1[0].", ".$ARTrow2[0].", ".$ARTrow3[0].", ".$ARTrow4[0].", ".$ARTrow5[0].", ".$ARTrow6[0].", ".$ARTrow7[0].", ".$ARTrow8[0].", ".$ARTrow9[0].", ".$ARTrow10[0]."];
var barColors ='steelblue';



new Chart('myARTChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {

  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },


  legend: {display: false},
  title: {
    display: true,
    text: 'كلية الآداب و العلوم'
  }
}
});
</script>";

?>

</div>

<div class="col-lg-6">

  <?php

  include("Config.php");
  $db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
  $db_name='4072248_db'; //Should contain the "Database Name" value
  $db_user='4072248_db'; //Should contain the "Database User" value
  $db_pass='123456789db'; //Should contain the "Database Password" value

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$APPquery ="SELECT AVG(`P1`) FROM `t1` WHERE College ='APP'";
$APPresult=mysqli_query($conn,$APPquery);
$APProw = mysqli_fetch_array($APPresult);

$APPquery1 ="SELECT AVG(`P2`) FROM `t1` WHERE College ='APP'";
$APPresult1=mysqli_query($conn,$APPquery1);
$APProw1 = mysqli_fetch_array($APPresult1);

$APPquery2 ="SELECT AVG(`P3`) FROM `t1` WHERE College ='APP'";
$APPresult2=mysqli_query($conn,$APPquery2);
$APProw2 = mysqli_fetch_array($APPresult2);

$APPquery3 ="SELECT AVG(`P4`) FROM `t1` WHERE College ='APP'";
$APPresult3=mysqli_query($conn,$APPquery3);
$APProw3 = mysqli_fetch_array($APPresult3);

$APPquery4 ="SELECT AVG(`P5`) FROM `t1` WHERE College ='APP'";
$APPresult4=mysqli_query($conn,$APPquery4);
$APProw4 = mysqli_fetch_array($APPresult4);


echo "<canvas id='myAPPChart' style='width:100%;max-width:600px'></canvas>";

echo "<script>
var xValues = ['أساسيات الأمن السيبراني','برامج الفدية','التصيد','الوصول عن بعد','الأمن السيبراني المادي'];
var yValues = [". $APProw[0] . ",".$APProw1[0].", ".$APProw2[0].", ".$APProw3[0].", ".$APProw4[0].", ".$APProw5[0].", ".$APProw6[0].", ".$APProw7[0].", ".$APProw8[0].", ".$APProw9[0].", ".$APProw10[0]."];
var barColors ='steelblue';



new Chart('myAPPChart', {
type: 'bar',
data: {
  labels: xValues,
  datasets: [{
    backgroundColor: barColors,
    data: yValues
  }]
},
options: {

  legend: {display: false},
  
  scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },


  title: {
    display: true,
    text: 'الكلية التطبيقية'
  }
}
});
</script>";

?>

  

</div>



</div>



<br>
<br>
<hr style="height:2px;border-width:0;width:50%;color:gray;background-color:gray">
<br>
<br>

<div class="row justify-content-center">
<?php
$Tquery ="SELECT * FROM `t1`";
$Tresult=mysqli_query($conn,$Tquery);

if ($Tresult) {
  echo "<table id='table_id' border='1' >
  <thead>
  <tr>
  <th>الرقم الجامعي</th>
  <th>الاسم</th>
  <th>الكلية</th>
  <th>أساسيات الأمن السيبراني</th>
  <th>برامج الفدية</th>
  <th>التصيد</th>
  <th>الوصول عن بعد</th>
  <th>الأمن السيبراني المادي</th>
  </tr>
  </thead>";

  while($Trow = mysqli_fetch_array($Tresult))
      {
      echo "<tbody>";
      echo "<tr>";
      echo "<td>" . $Trow['ID'] . "</td>";
      echo "<td>" . $Trow['Name'] . "</td>";
      echo "<td>" . $Trow['College'] . "</td>"; //
      echo "<td>" . $Trow['P1'] . "</td>";
      echo "<td>" . $Trow['P2'] . "</td>";
      echo "<td>" . $Trow['P3'] . "</td>";
      echo "<td>" . $Trow['P4'] . "</td>";
      echo "<td>" . $Trow['P5'] . "</td>"; //
      echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
}
?>
</div>
</body>
</html>
