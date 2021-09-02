<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <!-- If you delete this meta tag World War Z will become a reality -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation 5</title>

    <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/normalize.min.css">
    <link rel="stylesheet" href="/css/app.css">


    <link href='https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet'
        type='text/css'>
    <!-- optional CDN for Foundation Icons ^^ -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
</head>

<body>
    <!-- Info Banner For Announcements or Links -->
    <!-- <a href="https://zurb.com/university/foundation-intro" class="docs-banner course-banner">
    <div class="info">
        <h5 class="___class_+?4___"><strong>To master everything new in 6.4, along with the rest of Foundation register for our Aug 8th Webinar Class &rsaquo;</strong></h5>
    </div>
    </a> -->

    <!-- <a href="https://zurb.com/wired" id="notice">
    <div class="info hide-for-small">
        <div id="clockdiv" class="countdown">
            <span class="timer-day days"></span>
            <span class="timer-colon">:</span>
            <span class="timer-hour hours"></span>
            <span class="timer-colon">:</span>
            <span class="timer-hour minutes"></span>
            <span class="timer-colon">:</span>
            <span class="timer-seconds seconds"></span>
        </div>
    </div>
    </a> -->
    <!-- Header and Nav -->

    <div class="row">
        <div class="large-3 columns">
            <h1>
                <a href="/">
                    <img src="https://via.placeholder.com/400x100&text=Logo">
                </a>
            </h1>
        </div>
        <div class="large-9 columns">
            <ul>
                <li><a href="/personal">Personal Email send</a></li>
            </ul>
        </div>
    </div>

    <!-- End Header and Nav -->


    <!-- First Band (Image) -->

    <div class="row">
        <div class="large-12 columns">
            <hr>
        </div>
    </div>
    <!-- Second Band (Image Left with Text) -->

    <div class="row">
        <div class="large-12 columns">
            @yield('content')
        </div>
    </div>


    <!-- Third Band (Image Right with Text) -->

    <div class="row">
        <div class="large-8 columns">
        </div>




        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/js/foundation.min.js"></script>
        <script>
            $(document).foundation();
        </script>
</body>

</html>
