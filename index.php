<?php
$servername = "localhost";
$username = "root";
$password = "";

 #$cookie_name = "user";
  #$cookie_value = "unkown";
  #setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
  $q1 ="";
  $q2 ="";
  $q3 ="";
  $q4 ="";
  $q5 ="";
  $q6 ="";
  $q7 ="";
  $q8 ="";
  $q9 ="";
  $q10 ="";
  $q11 ="";
  $q12 ="";
  $q13 ="";
  $q14 ="";
  $q15 ="";
  $div ="";
  
  $save_q1="";
  $save_q2 ="";
  $save_q3 ="";
  $save_q4 ="";
  $save_q5 ="";
  $save_q6 ="";
  $save_q7 ="";
  $save_q8 ="";
  $save_q9 ="";
  $save_q10 ="";
  $save_q11 ="";
  $save_q12 ="";
  $save_q13 ="";
  $save_q14 ="";
  $save_q15 ="";
  $save_div ="";

 if(isset($_POST['q1'])){
       $count_mepty =0;
     if(empty($_POST['q1'])){
      $count_mepty++;
      $q1 ="required";
     }else
     {
        $save_q1 = $_POST['q1'];
     }

     if(empty($_POST['q2'])){
      $count_mepty++;
      $q2 ="required";
     }else
     {
        $save_q2 = $_POST['q2'];
     }

     if(empty($_POST['q3'])){
      $count_mepty++;
      $q3 ="required";
     }else
     {
        $save_q3 = $_POST['q3'];
     }

     if(empty($_POST['q4'])){
      $count_mepty++;
      $q4="required";
     }else
     {
        $save_q4 = $_POST['q4'];
     }

     if(empty($_POST['q5'])){
      $count_mepty++;
      $q5 ="required";
     }else
     {
        $save_q5 = $_POST['q5'];
     }

     if(empty($_POST['q6'])){
      $count_mepty++;
      $q6 ="required";
     }else
     {
        $save_q6 = $_POST['q6'];
     }

     if(empty($_POST['q7'])){
      $count_mepty++;
      $q7 ="required";
     }else
     {
        $save_q7 = $_POST['q7'];
     }

     if(empty($_POST['q8'])){
      $count_mepty++;
      $q8 ="required";
     }else
     {
        $save_q8 = $_POST['q8'];
     }

     if(empty($_POST['q9'])){
      $count_mepty++;
      $q9 ="required";
     }else
     {
        $save_q9 = $_POST['q9'];
     }

     if(empty($_POST['q10'])){
      $count_mepty++;
      $q10 ="required";
     }else
     {
        $save_q10 = $_POST['q10'];
     }

     if(empty($_POST['q11'])){
      $count_mepty++;
      $q11 ="required";
     }else
     {
        $save_q11 = $_POST['q11'];
     }

     if(empty($_POST['q12'])){
      $count_mepty++;
      $q12 ="required";
     }else
     {
        $save_q12 = $_POST['q12'];
     }

     if(empty($_POST['q13'])){
      $count_mepty++;
      $q13 ="required";
     }else
     {
        $save_q13 = $_POST['q13'];
     }

     if(empty($_POST['q14'])){
      $count_mepty++;
      $q14 ="required";
     }else
     {
        $save_q14 = $_POST['q14'];
     }

     if(empty($_POST['q15'])){
      $count_mepty++;
      $q15 ="required";
     }else
     {
        $save_q15 = $_POST['q15'];
     }

     if(empty($_POST['div'])){
      $count_mepty++;
      $div ="required";
     }else
     {
        $save_div = $_POST['div'];
     }
     if ($count_mepty==0){
       echo var_dump($_POST);
     }else{
      echo "Can not save";
     }
}

try {
  $conn = new PDO("mysql:host=$servername;dbname=info_ret", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); }
catch(PDOException $e) { echo "Connection failed: " . $e->getMessage(); } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@900&family=Noto+Kufi+Arabic:wght@700&display=swap"
      rel="stylesheet"
    />
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <title>IR</title>
    <style>
      body {
        font-family: "Noto Kufi Arabic", "Cairo", sans-serif;
        line-height: 1.5;
      }
      .q-number {
        width: 95px;
        height: 28px;
        text-align: center;
        padding: 1px;
      }
      .required{
        color:red;

      }
    </style>
  </head>
  <body>
    <div class="container" dir="rtl">
      <div class="mt-1 p-3 rounded bg-light border">
        <h2 dir="rtl" class="text-center">رێنمـــــایی</h2>
        <ul dir="rtl">
          <li>
            سلاڤ به‌رێز هیڤی یه‌ هه‌ر پرسیاره‌كێ بده‌ شولی پاش ته‌ ج گولێ دبیت
            دانه‌ خانا دبندا
          </li>
          <li>
            سلاڤ به‌رێزان بوزانینا جه‌نابێ هه‌وه‌پێزانینێت هه‌وه‌یێن كه‌سایه‌تی
            ناهێنه‌ توماركرن
          </li>
        </ul>
      </div>
      <?php
if(!isset($_COOKIE['user'])) {
?>    
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 1
          </div>
          <audio controls>
            <source src="sounds/Recording1.mp3" type="audio/mpeg" />
            <source src="sounds/Recording1.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q1" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q1"
              id="q1"
              placeholder=""
              required
              value ="<?php echo $save_q1; ?>"
            />
            <span class="<?php echo $q1 ?>"><?php echo $q1;?></span>
            <div class="invalid-feedback">
        Please select a valid state.
              </div>
          </div>
          
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 2
          </div>
          <audio controls>
            <source src="sounds/Recording2.mp3" type="audio/mpeg" />
            <source src="sounds/Recording2.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q2" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q2"
              id="q2"
              placeholder=""
              required
              value ="<?php echo $save_q2; ?>"
            />
            <span class="<?php echo $q2 ?>"><?php echo $q2;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 3
          </div>
          <audio controls>
            <source src="sounds/Recording3.mp3" type="audio/mpeg" />
            <source src="sounds/Recording3.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q3" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q3"
              id="q3"
              placeholder=""
              required
              value ="<?php echo $save_q3; ?>"
            />
            <span class="<?php echo $q3 ?>"><?php echo $q3;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 4
          </div>
          <audio controls>
            <source src="sounds/Recording4.mp3" type="audio/mpeg" />
            <source src="sounds/Recording4.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q4" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q4"
              id="q4"
              placeholder=""
              required
              value ="<?php echo $save_q4; ?>"
            />
            <span class="<?php echo $q4 ?>"><?php echo $q4;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 5
          </div>
          <audio controls>
            <source src="sounds/Recording5.mp3" type="audio/mpeg" />
            <source src="sounds/Recording5.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q5" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q5"
              id="q5"
              placeholder=""
              required
              value ="<?php echo $save_q5; ?>"
            />
            <span class="<?php echo $q5; ?>"><?php echo $q5;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 6
          </div>
          <audio controls>
            <source src="sounds/Recording6.mp3" type="audio/mpeg" />
            <source src="sounds/Recording6.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q6" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q6"
              id="q6"
              placeholder=""
              required
              value ="<?php echo $save_q6; ?>"
            />
            <span class="<?php echo $q6; ?>"><?php echo $q6;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 7
          </div>
          <audio controls>
            <source src="sounds/Recording7.mp3" type="audio/mpeg" />
            <source src="sounds/Recording7.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q7" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q7"
              id="q7"
              placeholder=""
              required
              value ="<?php echo $save_q7; ?>"
            />
            <span class="<?php echo $q7; ?>"><?php echo $q7;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 8
          </div>
          <audio controls>
            <source src="sounds/Recording8.mp3" type="audio/mpeg" />
            <source src="sounds/Recording8.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q8" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q8"
              id="q8"
              placeholder=""
              required
              value ="<?php echo $save_q8; ?>"
            />
            <span class="<?php echo $q8; ?>"><?php echo $q8;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 9
          </div>
          <audio controls>
            <source src="sounds/Recording9.mp3" type="audio/mpeg" />
            <source src="sounds/Recording9.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q9" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q9"
              id="q9"
              placeholder=""
              required
              value ="<?php echo $save_q9; ?>"
            />
            <span class="<?php echo $q9; ?>"><?php echo $q9;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 10
          </div>
          <audio controls>
            <source src="sounds/Recording10.mp3" type="audio/mpeg" />
            <source src="sounds/Recording10.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q10" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q10"
              id="q10"
              placeholder=""
              required
              value ="<?php echo $save_q10; ?>"
            />
            <span class="<?php echo $q10; ?>"><?php echo $q10;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 11
          </div>
          <audio controls>
            <source src="sounds/Recording11.mp3" type="audio/mpeg" />
            <source src="sounds/Recording11.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q11" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q11"
              id="q11"
              placeholder=""
              required
              value ="<?php echo $save_q11; ?>"
            />
            <span class="<?php echo $q11; ?>"><?php echo $q11;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 12
          </div>
          <audio controls>
            <source src="sounds/Recording12.mp3" type="audio/mpeg" />
            <source src="sounds/Recording12.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q12" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q12"
              id="q12"
              placeholder=""
              required
              value ="<?php echo $save_q12; ?>"
            />
            <span class="<?php echo $q12; ?>"><?php echo $q12;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 13
          </div>
          <audio controls>
            <source src="sounds/Recording13.mp3" type="audio/mpeg" />
            <source src="sounds/Recording13.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q13" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q13"
              id="q13"
              placeholder=""
              required
              value ="<?php echo $save_q13; ?>"
            />
            <span class="<?php echo $q13; ?>"><?php echo $q13;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 14
          </div>
          <audio controls>
            <source src="sounds/Recording14.mp3" type="audio/mpeg" />
            <source src="sounds/Recording14.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q14" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q14"
              id="q14"
              placeholder=""
              required
              value ="<?php echo $save_q14; ?>"
            />
            <span class="<?php echo $q14; ?>"><?php echo $q14;?></span>
          </div>
        </div>
        <!-- End of Question -->

        <!-- Begining of Question -->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div
            class="q-number rounded-3 bg-dark text-white q-number px-2 fw-bolder"
          >
            ده‌نگێ 15
          </div>
          <audio controls>
            <source src="sounds/Recording15.mp3" type="audio/mpeg" />
            <source src="sounds/Recording15.ogg" type="audio/ogg" />
            Your browser does not support the audio element.
          </audio>
          <div class="mb-3">
            <label for="q15" class="form-label"
              >دەنگێ سەری ڤەكە و تە ج گولێ بیت بنڤێسە لخارێ
            </label>
            <input
              type="text"
              class="form-control"
              name="q15"
              id="q15"
              placeholder=""
              required
              value ="<?php echo $save_q15; ?>"
            />
          </div>
          <span class="<?php echo $q15; ?>"><?php echo $q15;?></span>
        </div>
        <!-- End of Question -->

        <!--Device Type----->
        <div class="container-fluid bg-light mt-1 q-container p-2 border">
          <div class="mb-3">
            <label for="q2" class="form-label">
              ج جورێ ئامیرەی تە بكارئینایە بو داگرتنا ڤێ فورمێ بونمونە (لابتوب ، موبایل ، هەر تشتەكێ دی تر)
            </label>
            <input
              type="text"
              class="form-control"
              name="div"
              id="div"
              placeholder=""
              required
              value ="<?php echo $save_div; ?>"
            />
          </div>
          <span class="<?php echo $div; ?>"><?php echo $div;?></span>
        </div>

        <button type="submit" class="btn btn-primary mt-3">فرێكرن</button>
      </form>

      <?php
} else {
?>
      <div class="container" dir="rtl">
        <div class="alert alert-info" role="alert">
          <h4 class="alert-heading">بدوماهیك هات</h4>
          <p>سوپاس بوتە</p>
          <hr />
          <p class="mb-0">
            كارەكێ باش كر هیڤی یە هاریكاریا تە بیتە جهێ پێشڤە برنا پروسیسا
            زانستی
          </p>
        </div>
      </div>
      <?php
}
?>
    </div>
    <!--Container -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <?php
      $conn = null;
     ?>


      <script>
         var alertList = document.querySelectorAll('.alert');
         alertList.forEach(function (alert) {
           new bootstrap.Alert(alert)
         })
       </script>
  </body>
</html>
