<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel - Voler Admin Dashboard</title>

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon"> -->
</head>

<body>





    <div class="container" style="margin-bottom: 5%;">

        <section id="card-caps">
            <div class="row">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                    <div class="card"style="margin-top:5%;">
                        <img src="https://3.bp.blogspot.com/-YYQySmFnBo0/WV29qsr87_I/AAAAAAAADfQ/1lfblCURpZ0l8optiwMYW0SXm1b0OBhbgCLcBGAs/s1600/%25D8%25A7%25D9%2584%25D8%25A3%25D8%25AF%25D8%25A8%2B%25D9%2588%25D8%25A7%25D9%2584%25D9%2586%25D8%25B5%25D9%2588%25D8%25B5%2B%25D9%2588%25D8%25A7%25D9%2584%25D9%2586%25D9%2582%25D8%25AF.PNG" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">مادة اللغة العربية</h5>
                            <p class="card-text">
                                ملخصات مادة اللغة العربية وشروحات للدروس وحلول نماذج متنوعة.
                            </p>
                            <a href="explanation.php" class="btn btn-primary">تصفح محتوى المادة</a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </section>
    </div>





</body>

</html>
<?php include("footer.php") ?>