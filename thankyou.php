<!doctype html>
<html lang="en">
    <head>
        <title>Covid Data Collection - Thank You</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon_io/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon_io/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon_io/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <nav class="navbar navbar-expand-md bg-light navbar-light">
            <a class="navbar-brand" href="index.php">Covid Data Collection</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="missionstatement.php">Our Mission</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="howtohelp.php">How You Can Help</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="datadisplay.php">View Data From Our Survey</a>
                    </li> 
                </ul>
            </div>  
        </nav>
    </head>
    <body>

        <br>

        <div class="text-center">
            <h1>Thank You!</h1>
            <p>The information you've given us will remain completely anonymous, and will help tremendously in the fight against COVID-19. We greatly appreciate you taking the time to complete our survey. Stay healthy!</p>
            
            <br>
            
            <div class="w3-container">
                <div class="card w3-red">
                    <div class="card-body">
                        <h5>For more information on COVID-19 please visit the CDC website <a style="color:white" target="_blank" href="https://www.cdc.gov/coronavirus/2019-nCoV/index.html"><u>here</u></a>.</h5>
                    </div>
                </div>
            </div>
            
            <br><br>
            
            <a href="index.php" class="btn btn-primary">Continue</a>

            <br><br>
        </div>
    </body>

    <script>
        function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999)
        document.execCommand("copy");
        }
    </script>
</html>