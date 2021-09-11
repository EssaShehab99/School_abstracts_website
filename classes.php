<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel - Voler Admin Dashboard</title>

    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> -->

</head>

<body>

    <div class="container" style="margin-bottom: 5%;">
        <section id="card-caps">
            <div class="row">
                <?php for ($i = 0; $i < 5; $i++) { ?>
                    <div class="card" style="margin-top:5%;">
                        <img src="https://www.alaraby.co.uk/sites/default/files/styles/meduim_16_9/public/media/images/4A468EB5-5005-44F4-9552-64BA7C4CCFFD.jpg?h=d1cb525d&itok=0OfjLJdo" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">الصف الثالث الثانوي</h5>
                            <p class="card-text">
                                جميع ملخصات وشروحات منهج الصف الثالث الثانوي بالأضافة لحلول نماذج الامتحانات.
                            </p>
                            <a href="materials.php" class="btn btn-primary">دخول الصف</a>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </section>
    </div>



</body>

</html>
<?php include("footer.php") ?>