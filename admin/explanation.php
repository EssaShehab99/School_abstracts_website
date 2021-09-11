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



        <h2> الشروحات </h2>
        <select class="form-select" aria-label="Default select example">
  <option selected>اختر المادة</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<label for="inputname" class="form-label">صورة الغلاف</label>
<input class="form-control form-control-lg" id="formFileLg" type="file" />
        <label for="inputname" class="form-label">موضوع الشرح</label>
        <input type="text" class="form-control">
        <div class="form-text">
          يجب أن يحتوي على نص.
        </div>
        <label for="inputname" class="form-label">وصف الشرح</label>
        <input type="text" class="form-control">
        <div class="form-text">
          يجب أن يحتوي على نص.
        </div>


        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>الرقم</th>
                <th>المادة</th>
                <th>الموضوع</th>
                <th>الوصف</th>
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