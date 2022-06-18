function start(){
  console.log("Test");
  window.open("Questions.php","_self");
  console.log("Test1");
}
function test(){
  // var Q2 = document.getElementById('Q1').value;

  //var f = document.getElementById("fac_select");
  //var faculty=f.options[e.selectedIndex].text;
  //var faculty = document.querySelector('#fac_select').value.innerText;


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
  var P1_4 = document.querySelector('input[name = "P1Q4"]:checked').value;
  if (P1_4=="T") {
    P1++;
  }
  var P1_5 = document.querySelector('input[name = "P1Q5"]:checked').value;
  if (P1_5=="T") {
    P1++;
  }

  //document.getElementById("prt1").value = P1;

  

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
  var P2_4 = document.querySelector('input[name = "P2Q4"]:checked').value;
  if (P2_4=="T") {
    P2++;
  }
  var P2_5 = document.querySelector('input[name = "P2Q5"]:checked').value;
  if (P2_5=="T") {
    P2++;
  }

  var P3 = 0;
  var P3_1 = document.querySelector('input[name = "P3Q1"]:checked').value;
  if (P3_1=="T") {
    P3++;
  }
  var P3_2 = document.querySelector('input[name = "P3Q2"]:checked').value;
  if (P3_2=="T") {
    P3++;
  }
  var P3_3 = document.querySelector('input[name = "P3Q3"]:checked').value;
  if (P3_3=="T") {
    P3++;
  }
  var P3_4 = document.querySelector('input[name = "P3Q4"]:checked').value;
  if (P3_4=="T") {
    P3++;
  }
  var P3_5 = document.querySelector('input[name = "P3Q5"]:checked').value;
  if (P3_5=="T") {
    P3++;
  }

  var P4 = 0;
  var P4_1 = document.querySelector('input[name = "P4Q1"]:checked').value;
  if (P4_1=="T") {
    P4++;
  }
  var P4_2 = document.querySelector('input[name = "P4Q2"]:checked').value;
  if (P4_2=="T") {
    P4++;
  }
  var P4_3 = document.querySelector('input[name = "P4Q3"]:checked').value;
  if (P4_3=="T") {
    P4++;
  }
  var P4_4 = document.querySelector('input[name = "P4Q4"]:checked').value;
  if (P4_4=="T") {
    P4++;
  }
  var P4_5 = document.querySelector('input[name = "P4Q5"]:checked').value;
  if (P4_5=="T") {
    P4++;
  }

  var P5 = 0;
var P5_1 = document.querySelector('input[name = "P5Q1"]:checked').value;
if (P5_1=="T") {
  P5++;
}
var P5_2 = document.querySelector('input[name = "P5Q2"]:checked').value;
if (P5_2=="T") {
  P5++;
}
var P5_3 = document.querySelector('input[name = "P5Q3"]:checked').value;
if (P5_3=="T") {
  P5++;
}
var P5_4 = document.querySelector('input[name = "P5Q4"]:checked').value;
if (P5_4=="T") {
  P5++;
}
var P5_5 = document.querySelector('input[name = "P5Q5"]:checked').value;
if (P5_5=="T") {
  P5++;
}
  // window.location.replace("Finish.html");
  // window.location.assign("Finish.html");
  // window.location.href = "Finish.html";
  var page = window.open("Finish.html");
  // var page = window.open("Finish.html","_self");
  // window.close();
  // window.location.replace("Finish.html");
  // window.location.assign("Finish.html");
  // window.location.href = "Finish.html";

  // const element = page.document.querySelector('#text');
  // const element2 = page.document.getElementById('text');
  // element.innerHTML="Test";
  // element2.innerHTML="Test";
  page.document.write("");
  page.document.write("<!DOCTYPE html>");
  page.document.write("<html lang='ar' dir='rtl'>");
  page.document.write("<head>");
  page.document.write("<meta charset='utf-8'>");
  page.document.write("<meta name='viewport' content='width=device-width, initial-scale=1.0'>");
  page.document.write("<title>قياس الوعي السيبراني</title>");
  page.document.write("<script defer src='https://use.fontawesome.com/releases/v5.0.7/js/all.js'></script>");
  page.document.write("<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>");
  page.document.write("<link rel='stylesheet' href='/styles.css'>");
  page.document.write("</head>");
  page.document.write("<body>");
  page.document.write("<section class='colored-section' id='title'>");
  page.document.write("<div class='container-fluid' id='text'>");
  page.document.write("<div class='row justify-content-center' style='text-align: center;'>");
  page.document.write("<div style='text-align: center;'>");
  page.document.write("<img class='img-fluid' src='logo.png' alt='uni-logo' style='position: relative;'>");
  page.document.write("<h1 class'big-heading'>قياس الوعي السيبراني</h1>");
  page.document.write("</div>");
  page.document.write("</div>");
  page.document.write("</div>");
  page.document.write("</section>");
  page.document.write("<section class='white-section' id='intro'>");
  page.document.write("<div class='container-fluid'>");

  //page.document.write("الكلية : "+faculty);
  //page.document.write("<br>");


if(P1===5){
  page.document.write("جميع اجاباتك على اسئلة اساسيات الأمن السيبراني كانت صحيحة");
  page.document.write("<br>");
  page.document.write("<br>");
}else if (P1<5 && P1>2) {
page.document.write("اغلب اجاباتك على اسئلة اساسيات الأمن السيبراني كانت صحيحة");
  page.document.write("<br>");
  page.document.write("<br>");
}else if (P1<=2) {
page.document.write("اغلب اجاباتك على اسئلة  اساسيات الأمن السيبراني كانت خاطئة, لتحسين معرفتك باساسيات الامن السيبراني الرجاء الاطلاع على المقالات التالية");
  page.document.write("<br>");
  page.document.write("<a href='https://www.cisco.com/c/ar_ae/products/security/what-is-cybersecurity.html#~how-cybersecurity-works'>ما هو الأمن السيبراني (سيسكو)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://www.citc.gov.sa/ar/Digitalknowledge/Pages/cyber-security.aspx'>الأمن السيبراني (هيئة الاتصالات وتقنية المعلومات)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://marifeh.com/%D8%A3%D8%B3%D8%A7%D8%B3%D9%8A%D8%A7%D8%AA-%D8%A7%D9%84%D8%A3%D9%85%D9%86-%D8%A7%D9%84%D8%B3%D9%8A%D8%A8%D8%B1%D8%A7%D9%86%D9%8A/'>أساسيات الأمن السيبراني (موقع معرفة)</a>");
  page.document.write("<br>");
  page.document.write("<br>");
 }

if(P2===5){
  page.document.write("جميع اجاباتك على اسئلة برامج الفدية كانت صحيحة");
  page.document.write("<br>");
  page.document.write("<br>");

}else if (P2<5 && P2>2) {
  page.document.write("اغلب اجاباتك على اسئلة برامج الفدية كانت صحيحة");
  page.document.write("<br>");
  page.document.write("<br>");
}else if (P2<=2) {
page.document.write(" اغلب اجاباتك على اسئلة برامج الفدية كانت خاطئة, لتحسين معرفتك بمفاهيم برامج الفدية الرجاء الاطلاع على المقالات التالية");
  page.document.write("<br>");
  page.document.write("<a href='https://support.microsoft.com/ar-sa/windows/%E2%80%AB%D8%AD%D9%85%D8%A7%D9%8A%D8%A9-%D8%A7%D9%84%D9%83%D9%85%D8%A8%D9%8A%D9%88%D8%AA%D8%B1-%D9%85%D9%86-%D8%A8%D8%B1%D8%A7%D9%85%D8%AC-%D8%A7%D9%84%D9%81%D8%AF%D9%8A%D8%A9-%D8%A7%D9%84%D8%B6%D8%A7%D8%B1%D8%A9-08ed68a7-939f-726c-7e84-a72ba92c01c3'>حماية الكمبيوتر من برامج الفدية الضارة (مايكروسوفت)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://me.kaspersky.com/resource-center/threats/ransomware'>برامج الفدية – التعريف والوقاية منها وإزالتها (كاسبرسكي)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://www.cisco.com/c/en/us/solutions/security/ransomware-defense/what-is-ransomware.html'>ما هي برامج الفدية؟ - الإنجليزية (سيسكو)</a>");
  page.document.write("<br>");
  page.document.write("<br>");
}

if(P3===5){
page.document.write("جميع اجاباتك على اسئلة برامج التصيد كانت صحيحة");
  page.document.write("<br>");
  page.document.write("<br>");

}else if (P3<5 && P3>2) {
  page.document.write("اغلب اجاباتك علي اسئلة برامج التصيد كانت صحيحة");
  page.document.write("<br>");
  page.document.write("<br>");
}else if (P3<=2) {
        page.document.write(" اغلب اجاباتك على اسئلة برامج التصيد كانت خاطئة, لتحسين معرفتك بمفاهيم التصيد الرجاء الاطلاع على المقالات التالية");
  page.document.write("<br>");
  page.document.write("<a href='https://me.kaspersky.com/resource-center/preemptive-safety/phishing-prevention-tips'> نصائح حول الوقاية من التصيّد الاحتيالي (كاسبرسكاي‎‎)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://me.kaspersky.com/blog/coronavirus-phishing/7466/'> التصيد الاحتيالي باستخدام فيروس كورونا (كاسبرسكاي‎‎)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://support.google.com/mail/answer/8253?hl=ar'>تجنّب رسائل التصيّد الاحتيالي الإلكترونية والإبلاغ عنها (جوجل)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://support.microsoft.com/ar-sa/windows/%D8%A7%D9%84%D8%AD%D9%85%D8%A7%D9%8A%D8%A9-%D9%85%D9%86-%D8%A7%D9%84%D8%AA%D8%B5%D9%8A%D8%AF-%D8%A7%D9%84%D8%A7%D8%AD%D8%AA%D9%8A%D8%A7%D9%84%D9%8A-0c7ea947-ba98-3bd9-7184-430e1f860a44'>الحماية من التصيد الاحتيالي (مايكروسوفت)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://www.citc.gov.sa/ar/mediacenter/awarenesscampaigns/Pages/phishing.aspx'>صيد المتصيد (هيئة الاتصالات وتقنية المعلومات)</a>");
  page.document.write("<br>");
  page.document.write("<br>");
}

if(P4===5){
page.document.write("جميع اجاباتك على اسئلة الوصول عن بعد كانت صحيحة");
  page.document.write("<br>");
  page.document.write("<br>");

}else if (P4<5 && P4>2) {
page.document.write("اغلب اجاباتك على اسئلة الوصول عن بعد كانت صحيحة");
  page.document.write("<br>");
  page.document.write("<br>");
}else if (P4<=2) {
page.document.write(" اغلب اجاباتك على اسئلة الوصول عن بعد كانت خاطئة, لتحسين معرفتك بمفاهيم الوصول عن بعد الرجاء الاطلاع على المقالات التالية");
  page.document.write("<br>");
  page.document.write("<a href='https://www.citc.gov.sa/ar/mediacenter/awarenesscampaigns/Pages/wifi.aspx'>استخدم الواي فاي صح (هيئة الاتصالات وتقنية المعلومات)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://me.kaspersky.com/resource-center/preemptive-safety/public-wifi-risks'>كيف تتجنب مخاطر أمن الاتصال بشبكة الواي فاي العامة  (كاسبرسكي)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://aitnews.com/2019/11/18/5-%D8%B7%D8%B1%D9%82-%D9%84%D9%84%D8%AA%D8%AD%D9%82%D9%82-%D9%85%D9%86-%D8%A3%D9%85%D8%A7%D9%86-%D8%A7%D8%AA%D8%B5%D8%A7%D9%84%D9%83-%D8%A8%D8%A7%D9%84%D8%A5%D9%86%D8%AA%D8%B1%D9%86%D8%AA/'>خمس طرق للتحقق من أمان اتصالك بالإنترنت (البوابة العربية للأخبار التقنية)</a>");
  page.document.write("<br>");
  page.document.write("<a href='https://paltimeps.ps/post/227616/%D8%AA%D8%B9%D8%B1%D9%81-%D8%B9%D9%84%D9%89-%D8%B7%D8%B1%D9%82-%D8%AD%D9%85%D8%A7%D9%8A%D8%A9-%D9%86%D9%81%D8%B3%D9%83-%D8%B9%D9%86%D8%AF-%D8%A7%D9%84%D8%A7%D8%AA%D8%B5%D8%A7%D9%84-%D8%A8%D8%B4%D8%A8%D9%83%D8%A7%D8%AA-wifi-%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9'>طرق حماية نفسك عند الاتصال بشبكات</a>");
  page.document.write("<br>");
  page.document.write("<br>");
}

if(P5===5){
page.document.write("جميع اجاباتك على اسئلة الأمن السيبراني المادي كانت صحيحة");
page.document.write("<br>");
page.document.write("<br>");

}else if (P5<5 && P5>2) {
page.document.write("اغلب اجاباتك على اسئلة الأمن السيبراني المادي كانت صحيحة");
page.document.write("<br>");
page.document.write("<br>");
}else if (P5<=2) {
page.document.write(" اغلب اجاباتك على اسئلة الأمن السيبراني المادي كانت خاطئة, لتحسين معرفتك بمفاهيم الأمن السيبراني المادي الرجاء الاطلاع على المقالات التالية");
page.document.write("<br>");
page.document.write("<a href='https://www.arab-cio.org/%D8%A7%D9%84%D8%A3%D9%85%D9%86-%D8%A7%D9%84%D9%85%D8%A7%D8%AF%D9%8A-physical-security/'>الأمن المادي (منصة مشرفي المعلوماتية العرب)</a>");
page.document.write("<br>");
page.document.write("<a href='https://nissa.gov.ly/main-services/physical-security-policy/'>سياسة الأمان المادي </a>");
page.document.write("<br>");
page.document.write("<a href='http://itexpertinow.blogspot.com/2013/03/physical-security.html'>الأمن المادي (itexpertinow)</a>");
page.document.write("<br>");
page.document.write("<a href='https://ar.ilovevaquero.com/biznes/5867-chto-takoe-fizicheskaya-ohrana-kak-ona-funkcioniruet-i-v-chem-ee-zadacha.html'>ما هو الأمن المادي؟ كيف تعمل وما هي مهمتها؟</a>");
page.document.write("<br>");
page.document.write("<br>");
}



  page.document.write("</div>");
  page.document.write("</section>");
   page.document.write("<footer class='colored-section' id='footer' style='text-align: center;'>");
   page.document.write("<div class='container-fluid'>");
  // page.document.write("<p>© Copyright 2021 PSAU</p>");
   page.document.write("</div>");
   page.document.write("</footer>");
  page.document.write("</body>");
  page.document.write("</html>");
}
