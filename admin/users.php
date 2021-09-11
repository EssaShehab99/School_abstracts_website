<?php
//include("header.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.82.0">
  <title>Dashboard Template · Bootstrap v5.0</title>

</head>

<body>

  

  <div class="container-fluid">
    <div class="row">
      <?php
      include("sider.php");
      ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">



        <h2>المستخدمين</h2>        
<label for="inputname" class="form-label">صورة الملف الشخصي</label>

<input class="form-control form-control-lg" id="formFileLg" type="file" />
<label for="inputname" class="form-label">اسم المستخدم</label>
<input type="text"  class="form-control" >
<div  class="form-text">
  يجب أن يحتوي على نص.
</div>
<label for="inputname" class="form-label">البريد الالكتروني</label>
<input type="email"  class="form-control" >
<label for="inputname" class="form-label">كلمة المرور</label>
<input type="password"  class="form-control" >
<label for="inputname" class="form-label">تأكيد كلمة المرور</label>
<input type="password"  class="form-control" >
<div  class="form-text">
  يجب أن يحتوي على نص.
</div>


<div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>الرقم</th>
                <th>الاسم</th>
                <th>البريد</th>
                <th>كلمة المرور</th>
                <th>العملية</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td>1,001</td>
                <td>random</td>
                <td>data</td>
                <td>data</td>
                <td>
                <a href="edituser.php?action=edit&id=<?php echo $id ?>" class="badge btn-success">تعديل</a>
                <a href="edituser.php?action=edit&id=<?php echo $id ?>" class="badge btn-danger">حذف</a>
                <a href="edituser.php?action=edit&id=<?php echo $id ?>" class="badge btn-success">ايقاف</a>                  
                </td>
              </tr>
              
              
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

</body>

</html>