<?php
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
    <title>Covid Data Collection - Data Display</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <br>
    <div id="margin" class="card">
        <h5 class="card-header">The Impact Of Our Survey.</h5>
        <div class="text-center">
            <div class="card-body">
                <?php
                    $sql="SELECT positive FROM survey ORDER BY positive";

                    if ($result=mysqli_query($con,$sql))
                      {
                      // Return the number of rows in result set
                      $rowcount=mysqli_num_rows($result);
                      printf("%d individuals, who have tested positive for COVID-19, have taken our survey. The following information has only been collected from our survey.\n",$rowcount);
                      // Free result set
                      mysqli_free_result($result);
                    }
                    



                ?>

            </div>
        </div>
    </div>

    <br><br>

    <div id="margin" class="card">
        <h5 class="card-header">Individuals With Medical Conditions Who Tested Positive and Took Our Survey</h5>
        <div class="text-center">
            <div class="card-body">
                <p>(Some people who took the survey selected multiple medical conditions)</p>
                <table id="t01">
                    <tr>
                        <th>Medical Conditon</th>
                        <th>Number of People With Medical Condition</th> 
                    </tr>
                    <tr>
                        <td>All Cancer types</td>
                        <td>
                            
                            <?php
                                $sql="SELECT COUNT(*) FROM survey WHERE medicalCond = 'No'";
                    
                                mysqli_close($con);
                            ?>

                        </td>
                    </tr>
                    <tr>
                        <td>Type 1 Diabetes</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Type 2 Diabetes</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Obesity</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Chronic kidney disease</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Serious heart conditions</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>Weakened immune system</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Current or former smoker (vaping included)</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Liver disease</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Moderate to severe asthma</td>
                        <td>0</td>
                    </tr>

                    <tr>
                        <td>High blood pressure</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Moderate to severe asthma</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>High blood pressure</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Thalassemia (a type of blood disorder)</td>
                        <td>0</td>
                    </tr>
                </table>
            </div>
        </div>
    </div> 
    <br>
</html>