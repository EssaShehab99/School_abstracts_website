<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/js/bootstrap.min.js" rel="stylesheet" />
  <link href="assets/css/flaticon.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <title>Document</title>
</head>

<body style="direction:rtl">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="index.php">منصة التعليم اليمني</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin:auto;font-size:15px;">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">الرئيسية</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> الفصول الدراسية </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php for ($i = 0; $i < 6; $i++) { ?> <li><a class="dropdown-item" href="materials.php">الصف الثالث الثانوي</a></li>
              <?php } ?>
              <li><a class="dropdown-item" href="classes.php">الفصول الدراسية</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">حولنا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="connect.php">تواصل معنا</a>
          </li>
         
          <li class="nav-item active">
            <a class="nav-link" href="login.php">تسجيل الدخول</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="بحث" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">بحث</button>
        </form>
      </div>
    </div>
  </nav>

  <script src="assets/js/feather-icons/feather.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>


</body>

</html>