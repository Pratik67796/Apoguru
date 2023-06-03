<!DOCTYPE html>
<html lang="">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ut-8" />
        <meta name="description" content="appoguru">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>apoGuru</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>
    <body class="">
        <video id="video" autoplay loop style="">
            <source src="video/bg-video.mp4" type="video/mp4">
        </video>
        <div class="main-section mb-5">
            <div class="logo-section">
                <img class="logo" src="images/school.jpg" style="max-width: 60px">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <div class="section-block">
                            <a href="{{ route('school-dashboard') }}">
                                <div class="img-section">
                                    <img class="w-100" src="images/school.jpg">
                                </div>
                                <h3 class="text-center py-2">School</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <div class="section-block">
                            <a href="{{ route('professional-dashboard') }}">
                                <div class="img-section">
                                    <img class="w-100" src="images/school.jpg">
                                </div>
                                <h3 class="text-center py-2">Professional</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="" src="js/bootstrap.js"></script>
        <script type="" src="js/bootstrap.min.js"></script>
    </body>
</html>
