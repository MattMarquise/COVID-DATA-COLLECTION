<!doctype html>
<html lang="en">
    <title>Covid Data Collection - How You Can Help</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
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
    <body>

        <br>

        <div class="text-center">
            <h1>How You Can Help:</h1>
            <br>
            <br>


            <div id="margin" class="card">
                <h5 class="card-header">Have YOU tested positive for the Coronavirus?</h5>
                <div class="card-body">
                    <p class="card-text">If yes, please take our quick survey. You will remain completely anonymous. Your answers to our questions will help scientists and doctors around the world better understand the cuases of COVID-19 and also who is at risk.<br><br> <b>PLEASE NOTE:</b><br>You cannot complete the survey for someone else, unless they are incapable of completing it themselves. Each individual who has it This survey takes a few minutes to complete and will help gain more information about the Coronavirus. Thank you!</b></p>
                    <a href="/survey.php" class="btn btn-primary">Take The Survey</a>
                </div>
            </div>

            <br><br>

            <div id="margin" class="card">
                <h5 class="card-header">Do you know someone who tested positive for the Coronavirus?</h5>
                <div class="card-body">
                    <p class="card-text">If yes, please encourage them to complete our quick survey. They will remain completely anonymous and we do not ask for any personal information.</p>

                    <p>Click the copy link button below to copy the link to the survey. Please share the link with anyone who has tested positive.</p>
                    <input type="text" value="link to survey" id="myInput">
                    <button class="btn btn-primary" onclick="myFunction()">Copy Link</button>
                </div>
            </div>

            <br>
            <br>
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