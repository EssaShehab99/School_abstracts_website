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



        <h2>الفصول الدراسية </h2>
        <label for="inputname" class="form-label">صورة الغلاف</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file" />
        <label for="inputname" class="form-label">اسم الصف</label>
        <input type="text" class="form-control">
        <div class="form-text">
          يجب أن يحتوي على نص.
        </div>
        <label for="inputname" class="form-label">وصف الصف</label>
        <input type="text" class="form-control">
        <div class="form-text">
          يجب أن يحتوي على نص.
        </div>


        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>الرقم</th>
                <th>الاسم</th>
                <th>الوصف</th>
                <th>العملية</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>random</td>
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


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>
</body>

</html>