<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/stylech.css" rel="stylesheet" />
    <script src="assets/js/upload.js"></script>

</head>

<body>

<section class="abt-08">
        <div class="containe">
            <div class="row">
                <div class="col12">
                    <div class="sting">
                        <h3> </h3>
                        <ol>
                            <!-- <li>Home <i class="fas fa-chevron-double-right"></i></li>
                            <li>Contact Us</li> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class="container" style="margin-top:5%;margin-bottom: 5%;">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="card pt-4">
                    <div class="card-body">
                        <div class="text-center mb-5">
                            <h3>تسجيل حساب جديد</h3>
                            <p>يرجى ملء النموذج للتسجيل.</p>
                        </div>
                        <form method="post">
                        <div class="alert" role="alert">
            </div>
          <div class="form-group text-center" style="position: relative;" >
            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>اختر صورة</h4>
              </div>
              <img src="image/person.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            <input type="file" name="profileImage" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;">
            <label>صورة الملف الشخصي</label>
          </div>
                            <br>
                            <div class="form-group position-relative has-icon-left">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">اسم المستخدم</label>
                                    <input type="text" class="form-control" name="username" />
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example1">البريد الالكتروني</label>
                                    <input type="email" class="form-control" name="email" />
                                </div>
                            </div>
                            <div class="form-group position-relative has-icon-left">
                                <div class="clearfix">
                                    <label for="password">كلمة المرور</label>
                                </div>
                                <div class="position-relative">
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <div style="font-size: 15px;color:red;margin-top:-2px;color:red;padding: 1%;">
                                    <?php if (isset($errors['epassword'])) echo $errors['epassword']; ?>
                                </div>
                                <!-- <a href="#" class='float-right' style="text-decoration: none;">
                                            <small>Forgot password?</small>
                                        </a> -->
                            </div>
                            <div class="form-group position-relative has-icon-left">
                                <div class="clearfix">
                                    <label for="password">تأكيد كلمة المرور</label>
                                </div>
                                <div class="position-relative">
                                    <input type="password" class="form-control" name="repassword" id="password">
                                </div>
                                <div style="font-size: 15px;color:red;margin-top:-2px;color:red;padding: 1%;">
                                    <?php if (isset($errors['epassword'])) echo $errors['epassword']; ?>
                                </div>
                                <!-- <a href="#" class='float-right' style="text-decoration: none;">
                                            <small>Forgot password?</small>
                                        </a> -->
                            </div>

                            <div class='form-check clearfix my-4'>
                                <!-- <div class="checkbox float-left">
                                        <input type="checkbox" id="checkbox1" class='form-check-input' >
                                        <label for="checkbox1">Remember me</label>
                                    </div> -->
                                <div class="float-right">
                                    <a href="login.php" style="text-decoration: none;"> لديك حساب؟</a>
                                </div>
                            </div>
                            <div>
                                <div class="d-grid gap-2 col-3 mx-auto">
                                    <button class="btn btn-primary" name="enterbtn">دخول</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php include("footer.php"); ?>
?>