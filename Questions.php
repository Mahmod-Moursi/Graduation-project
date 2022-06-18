<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>قياس الوعي السيبراني</title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="/styles.css">
  <script src="Code6.js"></script>
  <!-- <script>
    var P1 = 0;
    var P1_1 = document.querySelector('input[name = "P1Q1"]:checked').value;
    if (P1_1=="T") {
      P1++;
    }
    var P1_2 = document.querySelector('input[name = "P1Q2"]:checked').value;
    if (P1_2=="T") {
      P1++;
    }
    var P1_3 = document.querySelector('input[name = "P1Q3"]:checked').value;
    if (P1_3=="T") {
      P1++;
    }

    var P2 = 0;
    var P2_1 = document.querySelector('input[name = "P2Q1"]:checked').value;
    if (P2_1=="T") {
      P2++;
    }
    var P2_2 = document.querySelector('input[name = "P2Q2"]:checked').value;
    if (P2_2=="T") {
      P2++;
    }
    var P2_3 = document.querySelector('input[name = "P2Q3"]:checked').value;
    if (P2_3=="T") {
      P2++;
    }
  </script> -->
</head>

<body style="text-align: right;">
  <?php

  // header('Content-Type: text/html; charset=utf-8');
include("Config.php");
$db_host='fdb34.awardspace.net'; //Should contain the "Database Host" value
$db_name='4072248_db'; //Should contain the "Database Name" value
$db_user='4072248_db'; //Should contain the "Database User" value
$db_pass='123456789db'; //Should contain the "Database Password" value

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


error_reporting(E_ERROR | E_PARSE);

$p1=0;
if ($_POST["P1Q1"]=="T") {
  $p1++;
}
if ($_POST["P1Q2"]=="T") {
  $p1++;
}
if ($_POST["P1Q3"]=="T") {
  $p1++;
}
if ($_POST["P1Q4"]=="T") {
  $p1++;
}
if ($_POST["P1Q5"]=="T") {
  $p1++;
}

$p2=0;
if ($_POST["P2Q1"]=="T") {
  $p2++;
}
if ($_POST["P2Q2"]=="T") {
  $p2++;
}
if ($_POST["P2Q3"]=="T") {
  $p2++;
}
if ($_POST["P2Q4"]=="T") {
  $p2++;
}
if ($_POST["P2Q5"]=="T") {
  $p2++;
}

$p3=0;
if ($_POST["P3Q1"]=="T") {
  $p3++;
}
if ($_POST["P3Q2"]=="T") {
  $p3++;
}
if ($_POST["P3Q3"]=="T") {
  $p3++;
}
if ($_POST["P3Q4"]=="T") {
  $p3++;
}
if ($_POST["P3Q5"]=="T") {
  $p3++;
}

$p4=0;
if ($_POST["P4Q1"]=="T") {
  $p4++;
}
if ($_POST["P4Q2"]=="T") {
  $p4++;
}
if ($_POST["P4Q3"]=="T") {
  $p4++;
}
if ($_POST["P4Q4"]=="T") {
  $p4++;
}
if ($_POST["P4Q5"]=="T") {
  $p4++;
}

$p5=0;
if ($_POST["P5Q1"]=="T") {
  $p5++;
}
if ($_POST["P5Q2"]=="T") {
  $p5++;
}
if ($_POST["P5Q3"]=="T") {
  $p5++;
}
if ($_POST["P5Q4"]=="T") {
  $p5++;
}
if ($_POST["P5Q5"]=="T") {
  $p5++;
}


if(isset($_POST["submit"]))
{
$id=$_POST["id"];

$name=$_POST["name"];

$email=$_POST["email"];

$age=$_POST["age"];

$fac=$_POST["fac"];

$P1Q1=$_POST["P1Q1"];

$P1Q2=$_POST["P1Q2"];

$P1Q3=$_POST["P1Q3"];

$P1Q4=$_POST["P1Q4"];

$P1Q5=$_POST["P1Q5"];

$P2Q1=$_POST["P2Q1"];

$P2Q2=$_POST["P2Q2"];

$P2Q3=$_POST["P2Q3"];

$P2Q4=$_POST["P2Q4"];

$P2Q5=$_POST["P2Q5"];

$P3Q1=$_POST["P3Q1"];

$P3Q2=$_POST["P3Q2"];

$P3Q3=$_POST["P3Q3"];

$P3Q4=$_POST["P3Q4"];

$P3Q5=$_POST["P3Q5"];

$P4Q1=$_POST["P4Q1"];

$P4Q2=$_POST["P4Q2"];

$P4Q3=$_POST["P4Q3"];

$P4Q4=$_POST["P4Q4"];

$P4Q5=$_POST["P4Q5"];

$P5Q1=$_POST["P5Q1"];

$P5Q2=$_POST["P5Q2"];

$P5Q3=$_POST["P5Q3"];

$P5Q4=$_POST["P5Q4"];

$P5Q5=$_POST["P5Q5"];



if ($id=="" || $name=="" || $email=="" || $fac=="" || $age=="" || $P1Q1=="" || $P1Q2=="" || $P1Q3=="" || $P1Q4=="" || $P1Q5=="" || $P2Q1=="" || $P2Q2=="" || $P2Q3=="" || $P2Q4=="" || $P2Q5=="" || $P3Q1=="" || $P3Q2=="" || $P3Q3=="" || $P3Q4=="" || $P3Q5=="" || $P4Q1=="" || $P4Q2=="" || $P4Q3=="" || $P4Q4=="" || $P4Q5=="" || $P5Q1=="" || $P5Q2=="" || $P5Q3=="" || $P5Q4=="" || $P5Q5=="") {
  echo "<script type='text/javascript'>alert('الرجاء ادخال البيانات الشخصية و حل جميع الاسئلة');</script>";
  //header("Refresh:0");

}else{
  $query="INSERT INTO t1 values('$id','$name','$email','$age','$fac','$P1Q1','$P1Q2','$P1Q3','$P1Q4','$P1Q5','$P2Q1','$P2Q2','$P2Q3','$P2Q4','$P2Q5','$P3Q1','$P3Q2','$P3Q3','$P3Q4','$P3Q5','$P4Q1','$P4Q2','$P4Q3','$P4Q4','$P4Q5','$P5Q1','$P5Q2','$P5Q3','$P5Q4','$P5Q5','$p1','$p2','$p3','$p4','$p5')";
  $result=mysqli_query($conn,$query);

  if ($result) {
    // $msg="Student Detail Successfully Added"; msg='.$msg.'
		// echo '<meta http-equiv="refresh" content="0;index.html?" />';
    // echo "<script>window.location.replace('Finish.html');</script>";
  }
}
}

?>

<!-- <h2><?php  if(isset($msg)) echo $msg; ?></h2> -->
  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->

      <nav class="navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href=""></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#CSbasic">أساسيات الأمن السيبراني</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#ransom">برامج الفدية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#phis">التصيد</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#remote">الوصول عن بعد</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#phys">الأمن السيبراني المادي</a>
            </li>
          </ul>

        </div>
      </nav>


      <!-- Title -->

      <div class="row justify-content-center" style="text-align: center;">
      <div style="text-align: center;">
          <img class="img-fluid" src="logo.png" alt="uni-logo" style="position: relative;">
<h1 class="big-heading">قياس الوعي السيبراني</h1>
        </div>

        

        

      </div>

    </div>
  </section>
  <form name="Survay" method="post" class="Qs" action="<?php $_SERVER['PHP_SELF']?>">

    <section class="white-section">

      <div class="container-fluid">
        <h4>البيانات الشخصية</h4><br>
        <input type="number" name="id" id="id" placeholder="الرقم الجامعي">
        <br>
        <!-- <label for="name" id="label_name"></label> -->
        <input type="text" name="name" id="name" placeholder="الاسم (بالإنجليزية)">
        <br>
        <!-- <label for="email" id="label_email"></label> -->
        <input type="email" name="email" id="email" placeholder="البريد الالكتروني">
        <br>
        <!-- <label for="age" id="label_age"></label> -->
        <input type="number" name="age" id="age" placeholder="العمر">

        <br>
        <!-- <label for="fac" id="label_fac"></label> -->

        <!-- <select aria-label="Colleges"> -->
        <select class="" name="fac" id="fac_select">
          <option hidden value="" disabled selected>الكلية</option>
          <optgroup label="الكليات العلمية">
            <option value="bus">كلية إدارة الأعمال</option>
            <option value="eng">كلية الهندسة</option>
            <option value="com">كلية هندسة وعلوم الحاسب</option>
          </optgroup>
          <optgroup label="الكليات الصحية">
            <option value="med">كلية الطب البشري</option>
            <option value="phar">كلية الصيدلة</option>
            <option value="den">كلية طب الأسنان</option>
            <option value="sci">كلية العلوم الطبية التطبيقية</option>
          </optgroup>
          <optgroup label="الكليات الانسانية">
            <option value="edu">كلية التربية</option>
            <option value="hum">كلية العلوم والدراسات الإنسانية</option>
            <option value="art">كلية الآداب و العلوم</option>
          </optgroup>
          <optgroup label="الكليات التطبيقية">
            <option value="app">الكلية التطبيقية</option>
          </optgroup>

        </select>

      </div>
    </section>

    <section class="colored-section" id="CSbasic">

      <div class="container-fluid">
        <h4 style="color:Black;">اساسيات الأمن السيبراني</h4><br>
        <!-- <label for="Q1" id="Qs1_1">اختر من التالي</label> -->
        <p style="color:black">السوال الاول</p>
        <label>أي مما يلي يجب عليك فعله لتقييد الوصول إلى ملفاتك وأجهزتك؟</label><br>
        <label><input type="radio" id="P1Q1-1" name="P1Q1" value="F" /> قم بتحديث برنامجك مرة واحدة في السنة</input></label><br>
        <label><input type="radio" id="P1Q1-2" name="P1Q1" value="F" />شارك كلمات المرور مع الزملاء الذين تثق بهم فقط</input></label><br>
        <label><input type="radio" id="P1Q1-3" name="P1Q1" value="F" />اطلب من زملائك الوصول إلى المعلومات عبر شبكة Wi-Fi مفتوحة</input></label><br>
        <label><input type="radio" id="P1Q1-4" name="P1Q1" value="T" />استخدام التحقق من خطوتين(two-step verification)</input></label><br>
        <!-- <select name="P1Q1" id="P1Q1">
          <option value="P1Q1-1">الخيار الاول</option>
          <option value="P1Q1-2">الخيار الثاني</option>
          <option value="P1Q1-3">الخيار الثالث</option>
        </select> -->
        <br>

      <p style="color:black">السوال الثاني</p>
        <label>سيساعد النسخ الاحتياطي للملفات المهمة في وضع عدم الاتصال بشكبة الانترنت أو على محرك أقراص ثابت خارجي أو في السحابة على حماية معلوماتك في حالة وقوع هجوم إلكتروني. صحيحة أو خاطئة؟</label><br>
        <label><input type="radio" id="P1Q2-1" name="P1Q2" value="T"/> صحيحة</input></label><br>
        <label><input type="radio" id="P1Q2-2" name="P1Q2" value="F" /> خاطئة</input></label><br>

        <!-- <label><input type="radio" id="P1Q2-1" name="P1Q2">الخيار الاول </input></label>
        <label><input type="radio" id="P1Q2-2" name="P1Q2">الخيار الثاني </input></label>
        <label><input type="radio" id="P1Q2-3" name="P1Q2">الخيار الثالث </input></label> -->
        <br>

        <p style="color:black">السوال الثالث</p>
          <label>ما هي أفضل جهة في الجامعة يجب ان تتعامل مع الأمن السيبراني؟</label><br>
          <label><input type="radio" id="P1Q3-1" name="P1Q3" value="F"/> عمداء الكليات. يديرون الكلية ، لذا فهم بحاجة إلى معرفة أساسيات الأمن السيبراني ووضعها موضع التنفيذ للحد من مخاطر الهجمات الإلكترونية</input></label><br>
          <label><input type="radio" id="P1Q3-2" name="P1Q3" value="F"/>  متخصصو تكنولوجيا المعلومات ، لأنهم في أفضل وضع لمعرفة وتعزيز الأمن السيبراني داخل الكلية</input></label><br>
          <label><input type="radio" id="P1Q3-3" name="P1Q3" value="F"/> الأساتذة ، لأنهم مسؤولون عن التأكد من أن الطلاب يتبعون الممارسات الصحيحة</input></label><br>
          <label><input type="radio" id="P1Q3-4" name="P1Q3" value="T"/>  يجب أن يعرف جميع أعضاء الجامعة بعض أساسيات الأمن السيبراني لتقليل مخاطر الهجمات الإلكترونية</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->
        <br>

        <p style="color:black">السوال الرابع</p>
          <label>يستهدف مجرمو الإنترنت فقط الأهداف التي ستجلب لهم مكافآت كبيرة. صحيحة أو خاطئة؟</label><br>
          <label><input type="radio" id="P1Q4-1" name="P1Q4" value="F"/> صحيحة</input></label><br>
          <label><input type="radio" id="P1Q4-2" name="P1Q4" value="T"/> خاطئة</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->
        <br>
        <p style="color:black">السوال الخامس</p>
          <label>أي مما يلي هي أفضل طريقة لتأمين جهاز المُوجّه أو الراوتر الخاص بك؟</label><br>
          <label><input type="radio" id="P1Q5-1" name="P1Q5" value="F"/>  قم بتغيير الاسم الافتراضي وكلمة المرور للجهاز</input></label><br>
          <label><input type="radio" id="P1Q5-2" name="P1Q5" value="F"/> قم بإيقاف تشغيل إدارة الجهاز عن بُعد</input></label><br>
          <label><input type="radio" id="P1Q5-3" name="P1Q5" value="F"/>  قم بتسجيل الخروج كمسؤول بمجرد إعداد الموجه</input></label><br>
          <label><input type="radio" id="P1Q5-4" name="P1Q5" value="T"/> كل ما ورد أعلاه</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->

      </div>
    </section>

    <section class="white-section" id="ransom">

      <div class="container-fluid">
        <h4 style="color:Black;">برامج الفدية</h4><br>
        <!-- <label for="Q1" id="Qs1_1">اختر من التالي</label> -->
        <p style="color:black">السوال الاول</p>
        <label>ما هي برامج الفدية؟</label><br>
        <label><input type="radio" id="P2Q1-1" name="P2Q1" value="T"/>البرامج التي تصيب شبكات الكمبيوتر والأجهزة المحمولة للاحتفاظ ببياناتك كرهينة حتى ترسل الأموال للمهاجمين</input></label><br>
        <label><input type="radio" id="P2Q1-2" name="P2Q1" value="F"/>أجهزة الكمبيوتر التي يسرقها المجرمون منك ولن تعود حتى تدفع لهم</input></label><br>
        <label><input type="radio" id="P2Q1-3" name="P2Q1" value="F"/>البرامج المستخدمة لحماية جهاز الكمبيوتر أو الجهاز المحمول من الفيروسات الضارة</input></label><br>
        <label><input type="radio" id="P2Q1-4" name="P2Q1" value="F"/>شكل من أشكال العملة المشفرة</input></label><br>
        <!-- <select name="P1Q1" id="P1Q1">
          <option value="P1Q1-1">الخيار الاول</option>
          <option value="P1Q1-2">الخيار الثاني</option>
          <option value="P1Q1-3">الخيار الثالث</option>
        </select> -->
        <br>

      <p style="color:black">السوال الثاني</p>
      <label>ستحمي ملفات النسخ الاحتياطي المحلية - المحفوظة على جهاز الكمبيوتر الخاص بك - بياناتك من الضياع في هجوم برامج الفدية. صحيحة أو خاطئة؟</label></label><br>
        <label><input type="radio" id="P2Q2-1" name="P2Q2" value="F"/> صحيحة</input></label><br>
        <label><input type="radio" id="P2Q2-2" name="P2Q2" value="T"/> خاطئة</input></label><br>

        <!-- <label><input type="radio" id="P1Q2-1" name="P1Q2">الخيار الاول </input></label>
        <label><input type="radio" id="P1Q2-2" name="P1Q2">الخيار الثاني </input></label>
        <label><input type="radio" id="P1Q2-3" name="P1Q2">الخيار الثالث </input></label> -->
        <br>

      <p style="color:black">السوال الثالث</p>
        <label>أي مما يلي يصف بشكل أفضل كيفية بدء المجرمين لهجمات برامج الفدية؟</label><br>
        <label><input type="radio" id="P2Q3-1" name="P2Q3" value="F"/> إرسال بريد إلكتروني احتيالي يحتوي على روابط أو مرفقات تعرض بياناتك وشبكتك للخطر</input></label><br>
        <label><input type="radio" id="P2Q3-2" name="P2Q3" value="F"/> الدخول إلى جهاز الكمبيوتر الخاص بك من خلال نقاط الضعف وتثبيت البرامج الضارة</input></label><br>
        <label><input type="radio" id="P2Q3-3" name="P2Q3" value="F"/> استخدام مواقع الويب الخبيثة التي تقوم تلقائيًا بتنزيل البرامج الضارة على جهاز الكمبيوتر أو الجهاز المحمول</input></label><br>
        <label><input type="radio" id="P2Q3-4" name="P2Q3" value="T"/> كل ما ورد أعلاه</input></label><br>
        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->

        <br>

        <p style="color:black">السوال الرابع</p>
          <label>إذا واجهت هجوم برامج الفدية ، فإن أول شيء يجب عليك فعله هو دفع الفدية. صحيحة أو خاطئة؟</label><br>
          <label><input type="radio" id="P2Q4-1" name="P2Q4" value="F"/> صحيحة</input></label><br>
          <label><input type="radio" id="P2Q4-2" name="P2Q4" value="T"/> خاطئة</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->
        <br>
        <p style="color:black">السوال الخامس</p>
          <label>يعد تعيين برامجك على التحديث التلقائي إحدى الطرق التي يمكنك من خلالها المساعدة في حماية جهاز الكمبيوتر الخاص بك من هجمات برامج الفدية. صحيحة أو خاطئة؟</label><br>
          <label><input type="radio" id="P2Q5-1" name="P2Q5" value="T"/> صحيحة</input></label><br>
          <label><input type="radio" id="P2Q5-2" name="P2Q5" value="F"/> خاطئة</input></label><br>
      </div>
    </section>

    <section class="colored-section" id="phis">

      <div class="container-fluid">
        <h4 style="color:Black;">التصيد</h4><br>
        <!-- <label for="Q1" id="Qs1_1">اختر من التالي</label> -->
        <p style="color:black">السوال الاول</p>
        <label>أي من العبارات التالية صحيحة؟</label><br>
        <label><input type="radio" id="P3Q1-1" name="P3Q1" value="F" /> إذا تلقيت بريدًا إلكترونيًا يبدو أنه من شخص تعرفه ، فيمكنك النقر علي أي روابط طالما كان لديك مانع للرسائل غير المرغوب فيها و برنامج حماية من الفيروسات</input></label><br>
        <label><input type="radio" id="P3Q1-2" name="P3Q1" value="F" /> يمكنك الوثوق في أن البريد الإلكتروني يأتي حقًا من جامعتك إذا كان يستخدم شعار الجامعة ويحتوي على معلومة واحدة على الأقل عن الجامعة التي تعرف أنها صحيحة</input></label><br>
        <label><input type="radio" id="P3Q1-3" name="P3Q1" value="F" />إذا تلقيت رسالة من زميل يحتاج إلى كلمة مرور شبكتك ، فلا يجب أن تعطها مطلقًا إلا إذا قال الزميل إنها حالة طارئة</input></label><br>
        <label><input type="radio" id="P3Q1-4" name="P3Q1" value="T" />إذا تلقيت بريدًا إلكترونيًا من منسقك يطلب منك تقديم معلومات شخصية على الفور ، فيجب عليك التحقق منه أولاً للتأكد من هويته</input></label><br>
        <!-- <select name="P1Q1" id="P1Q1">
          <option value="P1Q1-1">الخيار الاول</option>
          <option value="P1Q1-2">الخيار الثاني</option>
          <option value="P1Q1-3">الخيار الثالث</option>
        </select> -->
        <br>

      <p style="color:black">السوال الثاني</p>
        <label>رسالة بريد إلكتروني من رئيسك تسأل عن الأسماء والعناوين ومعلومات بطاقة الائتمان لكبار عملاء الشركة. يقول البريد الإلكتروني أنه عاجل ويرجى الرد على الفور. يجب عليك الرد على الفور. صحيحة أو خاطئة؟</label><br>
        <label><input type="radio" id="P3Q2-1" name="P3Q2" value="F"/> صحيحة</input></label><br>
        <label><input type="radio" id="P3Q2-2" name="P3Q2" value="T" /> خاطئة</input></label><br>

        <!-- <label><input type="radio" id="P1Q2-1" name="P1Q2">الخيار الاول </input></label>
        <label><input type="radio" id="P1Q2-2" name="P1Q2">الخيار الثاني </input></label>
        <label><input type="radio" id="P1Q2-3" name="P1Q2">الخيار الثالث </input></label> -->
        <br>

        <p style="color:black">السوال الثالث</p>
          <label>تتلقى رسالة نصية من موظف جامعي يطلب منك النقر علي رابط لتجديد كلمة المرور الخاصة بك حتى تتمكن من تسجيل الدخول إلى موقع الجامعة. عليك ان:</label><br>
          <label><input type="radio" id="P3Q3-1" name="P3Q3" value="F"/> قم بالرد على الرسالة لتأكيد أنك بحاجة بالفعل إلى تجديد كلمة المرور الخاصة بك</input></label><br>
          <label><input type="radio" id="P3Q3-2" name="P3Q3" value="T"/> اتصل علي الموظف الجامعي ، باستخدام رقم هاتف تعرف أنه صحيح ، للتأكد من أن الطلب حقيقيا</input></label><br>
          <label><input type="radio" id="P3Q3-3" name="P3Q3" value="F"/> اضغط على الرابط. إذا أخذك إلى موقع الجامعة ، فستعرف أنه ليس عملية احتيال</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->
        <br>

        <p style="color:black">السوال الرابع</p>
          <label>يمكن أن تساعد مصادقة البريد الإلكتروني في الحماية من هجمات التصيد الاحتيالي. صحيحة أو خاطئة؟</label><br>
          <label><input type="radio" id="P3Q4-1" name="P3Q4" value="T"/> صحيحة</input></label><br>
          <label><input type="radio" id="P3Q4-2" name="P3Q4" value="F"/>خاطئة</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->
        <br>
        <p style="color:black">السوال الخامس</p>
          <label>إذا وقعت في خدعة التصيد الاحتيالي ، فما الذي يجب عليك فعله للحد من الضرر؟</label><br>
          <label><input type="radio" id="P3Q5-1" name="P3Q5" value="F"/>  حذف البريد الإلكتروني المخادع</input></label><br>
          <label><input type="radio" id="P3Q5-2" name="P3Q5" value="F"/>افصل الكمبيوتر, سيؤدي ذلك إلى التخلص من أي برامج ضارة</input></label><br>
          <label><input type="radio" id="P3Q5-3" name="P3Q5" value="T"/> قم بتغيير أي كلمات مرور تم اختراقها</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->

      </div>
    </section><section class="white-section" id="remote">

      <div class="container-fluid">
        <h4 style="color:Black;">الوصول عن بعد</h4><br>
        <!-- <label for="Q1" id="Qs1_1">اختر من التالي</label> -->
        <p style="color:black">السوال الاول</p>
        <label>قبل الاتصال عن بعد بشبكة جامعية ، يجب أن يفي جهازك الشخصي بنفس متطلبات الأمان مثل الأجهزة الصادرة عن الجامعة. صحيحة أو خاطئة؟</label><br>
        <label><input type="radio" id="P4Q1-1" name="P4Q1" value="T"/>صحيحة</input></label><br>
        <label><input type="radio" id="P4Q1-2" name="P4Q1" value="F"/>خاطئة</input></label><br>

        <!-- <select name="P1Q1" id="P1Q1">
          <option value="P1Q1-1">الخيار الاول</option>
          <option value="P1Q1-2">الخيار الثاني</option>
          <option value="P1Q1-3">الخيار الثالث</option>
        </select> -->
        <br>

      <p style="color:black">السوال الثاني</p>
      <label>ما هي الطريقة الشائعة للمساعدة في حماية الأجهزة المتصلة بشبكة الجامعة؟</label></label><br>
        <label><input type="radio" id="P4Q2-1" name="P4Q2" value="T"/> استخدم فقط أجهزة الكمبيوتر المحمولة والأجهزة المحمولة الأخرى مع تشفير القرص الكامل</input></label><br>
        <label><input type="radio" id="P4Q2-2" name="P4Q2" value="F"/> قم بتغيير إعدادات هاتفك الذكي للسماح لأجهزتك بالاتصال تلقائيًا بشبكة واي فاي العامة</input></label><br>
        <label><input type="radio" id="P4Q2-3" name="P4Q2" value="F"/> اسمح للضيوف و الطلاب باستخدام نفس الشبكة الآمنة التي تستخدمها</input></label><br>
        <label><input type="radio" id="P4Q2-4" name="P4Q2" value="F"/>  استخدم كلمة المرور المحددة مسبقًا لجهاز الراوتر حتى لا تنساها</input></label><br>

        <!-- <label><input type="radio" id="P1Q2-1" name="P1Q2">الخيار الاول </input></label>
        <label><input type="radio" id="P1Q2-2" name="P1Q2">الخيار الثاني </input></label>
        <label><input type="radio" id="P1Q2-3" name="P1Q2">الخيار الثالث </input></label> -->
        <br>

      <p style="color:black">السوال الثالث</p>
        <label>سيساعد الاحتفاظ بالاسم الافتراضي لجهاز الراوتر محترفي الأمان في التعرف عليه وبالتالي المساعدة في حماية أمان شبكتك. صحيحة أو خاطئة؟</label><br>
        <label><input type="radio" id="P4Q3-1" name="P4Q3" value="F"/>صحيحة</input></label><br>
        <label><input type="radio" id="P4Q3-2" name="P4Q3" value="T"/>خاطئة</input></label><br>
          <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->

        <br>

        <p style="color:black">السوال الرابع</p>
          <label>تشفير WPA2 و WPA3 هما معايير التشفير التي ستحمي المعلومات المرسلة عبر شبكة لاسلكية. صحيحة أو خاطئة؟</label><br>
          <label><input type="radio" id="P4Q4-1" name="P4Q4" value="T"/> صحيحة</input></label><br>
          <label><input type="radio" id="P4Q4-2" name="P4Q4" value="F"/> خاطئة</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->
        <br>
        <p style="color:black">السوال الخامس</p>
          <label>أي مما يلي يصف أفضل طريقة للتأكد من وصولك بأمان إلى شبكة الجامعة عن بُعد؟</label><br>
          <label><input type="radio" id="P4Q5-1" name="P4Q5" value="F"/> اقرأ سياسات الأمن السيبراني في جامعتك جيدًا</input></label><br>
          <label><input type="radio" id="P4Q5-2" name="P4Q5" value="F"/> استخدم VPN عند الاتصال عن بعد بشبكة الجامعة</input></label><br>
          <label><input type="radio" id="P4Q5-3" name="P4Q5" value="F"/> استخدم كلمات مرور شبكة فريدة ومعقدة وتجنب محطات العمل المفتوحة غير المراقبة</input></label><br>
          <label><input type="radio" id="P4Q5-4" name="P4Q5" value="T"/> كل ما ذُكر اعلاه</input></label><br>
      </div>
    </section>

    <section class="colored-section" id="phys">

      <div class="container-fluid">
        <h4 style="color:Black;">الأمن السيبراني المادي</h4><br>
        <!-- <label for="Q1" id="Qs1_1">اختر من التالي</label> -->
        <p style="color:black">السوال الاول</p>
        <label>يشمل تعزيز الأمن المادي حماية:</label><br>
        <label><input type="radio" id="P5Q1-1" name="P5Q1" value="F" />الملفات الورقية فقط</input></label><br>
        <label><input type="radio" id="P5Q1-2" name="P5Q1" value="F" />فقط الملفات الورقية وأي جهاز كمبيوتر تخزن عليه نسخًا إلكترونية من هذه الملفات</input></label><br>
        <label><input type="radio" id="P5Q1-3" name="P5Q1" value="F" />فقط الملفات الورقية ومحركات الأقراص المحمولة وأجهزة نقاط البيع</input></label><br>
        <label><input type="radio" id="P5Q1-4" name="P5Q1" value="T" />كل ما سبق بالإضافة إلى أي جهاز آخر به معلومات حساسة</input></label><br>
        <!-- <select name="P1Q1" id="P1Q1">
          <option value="P1Q1-1">الخيار الاول</option>
          <option value="P1Q1-2">الخيار الثاني</option>
          <option value="P1Q1-3">الخيار الثالث</option>
        </select> -->
        <br>

      <p style="color:black">السوال الثاني</p>
        <label>يجب التخلص من الملفات الورقية التي تحتوي على معلومات حساسة في سلة مهملات مقفلة. صحيحة أو خاطئة؟</label><br>
        <label><input type="radio" id="P5Q2-1" name="P5Q2" value="T"/> صحيحة</input></label><br>
        <label><input type="radio" id="P5Q2-2" name="P5Q2" value="F" /> خاطئة</input></label><br>

        <!-- <label><input type="radio" id="P1Q2-1" name="P1Q2">الخيار الاول </input></label>
        <label><input type="radio" id="P1Q2-2" name="P1Q2">الخيار الثاني </input></label>
        <label><input type="radio" id="P1Q2-3" name="P1Q2">الخيار الثالث </input></label> -->
        <br>

        <p style="color:black">السوال الثالث</p>
          <label>عندما تضغط على مفتاح "حذف" ، فهذا يعني أن الملف يتم إزالته تلقائيًا من جهاز الكمبيوتر الخاص بك. صحيحة أو خاطئة؟</label><br>
          <label><input type="radio" id="P5Q3-1" name="P5Q3" value="F"/>صحيحة</input></label><br>
          <label><input type="radio" id="P5Q3-2" name="P5Q3" value="T"/>خاطئة</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->
        <br>

        <p style="color:black">السوال الرابع</p>
          <label>أي من العبارات التالية صحيحة؟</label><br>
          <label><input type="radio" id="P5Q4-1" name="P5Q4" value="T"/> من الأفضل استخدام المصادقة متعددة العوامل للوصول إلى مناطق من شبكة الأعمال التي تحتوي علي معلومات حساسة</input></label><br>
          <label><input type="radio" id="P5Q4-2" name="P5Q4" value="F"/>يجب عليك استخدام نفس كلمة المرور لأجهزة العمل الرئيسية لضمان وصول الموظفين رفيعي المستوى إليها في حالات الطوارئ</input></label><br>
          <label><input type="radio" id="P5Q4-3" name="P5Q4" value="F"/>أفضل طريقة لحماية بيانات العمل هي التأكد من عدم فقدان أي شخص لأي جهاز</input></label><br>
          <label><input type="radio" id="P5Q4-4" name="P5Q4" value="F"/>يجب ألا تحد من محاولات تسجيل الدخول على أجهزة العمل الرئيسية ، لأن الحظر بسبب وجود العديد من المحاولات غير الصحيحة سيجعلك غير قادر على الوصول إلى حساباتك</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->
        <br>
        <p style="color:black">السوال الخامس</p>
          <label>يحتاج فقط الأشخاص الذين لديهم إمكانية الوصول إلى البيانات الحساسة إلى التدريب على أهمية الأمان المادي للملفات والمعدات. صحيحة أو خاطئة؟</label><br>
          <label><input type="radio" id="P5Q5-1" name="P5Q5" value="F"/>صحيحة</input></label><br>
          <label><input type="radio" id="P5Q5-2" name="P5Q5" value="T"/>خاطئة</input></label><br>

        <!-- <label><input type="checkbox" id="P1Q3-1" name="P1Q3" checked>الخيار الاول </input></label>
        <label><input type="checkbox" id="P1Q3-2" name="P1Q3">الخيار الثاني </input></label>
        <label><input type="checkbox" id="P1Q3-3" name="P1Q3">الخيار الثالث </input></label> -->

      </div>
    </section>

    <footer class="white-section" id="footer" style="text-align: center;">
      <div class="container-fluid">
        <button type="submit" name="submit" onclick="test()">ارسال</button>
        <input type="reset" name="reset" value="إعادة تعيين" />
        <br></br>
      </div>
    </footer>

  </form>


</body>

</html>
