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

    <div class="container">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="z-index: -1;">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://i0.wp.com/egyonlinenews.com/wp-content/uploads/2019/09/%D8%A7%D9%85%D8%AA%D8%AD%D8%A7%D9%86%D8%A7%D8%AA4.jpg?resize=650%2C405&ssl=1" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="auto">

                        <div class="carousel-caption d-none d-md-block">
                            <h5>المنصة التعليمية اليمنية</h5>
                            <p>جميع المقررات الدراسية</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.alaraby.co.uk/sites/default/files/styles/large_16_9/public/media/images/50C62A01-97D5-425B-BB39-7865003F1A0E.jpg?h=d1cb525d&itok=SQBKDJEh" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="auto">

                        <div class="carousel-caption d-none d-md-block">
                            <h5>المنصة التعليمية اليمنية</h5>
                            <p>جميع الملخصات والشروحات</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/originals/e5/fc/7a/e5fc7a94fdb5900a70cad6bcc792bc22.jpg" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="auto">

                        <div class="carousel-caption d-none d-md-block">
                            <h5>المنصة التعليمية اليمنية</h5>
                            <p>نماذج محلولة لجميع المواد الدراسية</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="container">
        <section id="basic-modals" style="margin-top: 5%;margin-bottom: 5%;">
            <div class="row">
                <?php for ($i = 0; $i < 8; $i++) { ?>
                    <div class="col-md-6 col-12">
                        <div class="card" style="margin:  5%;">
                            <div class="card-header">
                                <h4 class="card-title">اختبارات الشهادة الثانوية - صنعاء</h4>
                            </div>
                            <div class="card-body">
                                <p>
                                    يعد الموقع الإلكترونيّ من الأدوات العصريّة التي تساعد على ربط الناس ببعضهم البعض، لتناقل المعلومات وتداولها، فلها أهميّة عظمى وكبيرة بشكل لا يوصف، لهذا فإننا في قطاع المناهج والتوجيه بشكل عام والإدارة العامة للاختبارات على وجه الخصوص كان علينا لزاما وبتوجيهات معالي وزير التربية والتعليم الأستاذ/ يحيى بدر الدين الحوثي أن نعمل على إعادة تشغيل الموقع الالكتروني الخاص بالإدارة العامة للاختبارات وتحديثه
                                    بما يتواكب مع متطلبات طالبي الخدمة والتي نجد إقبالاً كبيراً من مختلف شرائح المجتمع وعلى رأسهم طالبي
                                    الخدمة من أبنائنا الطلبة في الداخل وفي دول المهجر للحصول على خدمات الإدارة العامة للاختبارات
                                    حيث تتجلّى أهميّة العمليّة التعليمية في بناء جيل واعٍ، ومثقف مستعد لبناء الوطن والنهوض بمستقبل
                                    الأمة، لذا لا بدّ من الحرص على الآليّات، والأساليب المطروحة، وتطويرها، وتحديثها كل فترة لتواكب روح
                                    الحداثة، والتقدّم العلمي. كافة المؤسسات التربوية والتعليمية على مستوى التعليم العام والتعليم الجامعي. والله الموفق

                                </p>
                                <!-- Button trigger for basic modal -->
                                <button type="button" class="btn btn-outline-primary block" data-toggle="modal" data-target="#default">
                                    عرض المزيد
                                </button>


                            </div>
                        </div>
                    </div>
                <?php } ?>




            </div>
        </section>
    </div>
</body>

</html>
<?php include("footer.php"); ?>