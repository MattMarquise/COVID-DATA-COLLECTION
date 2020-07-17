<?php
include "database.php";
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Covid Data Collection</title>
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

        <!--INPUT-->
        <?php
            if(isset($_POST['submit'])){

                if(!empty($_POST['specificMedicalCond'])) {

                $specificMedicalCond = implode(",",$_POST['specificMedicalCond']);

                // Insert and Update record
                
                
                $checkEntries = mysqli_query($con,"SELECT * FROM languages");
                if(mysqli_num_rows($checkEntries) == 0){
                    mysqli_query($con,"INSERT INTO languages(language) VALUES('".$lang."')");
                }else{
                    mysqli_query($con,"UPDATE languages SET language='".$lang."' ");
                }
            
                }

            }
        ?>
    </head>
    <body>

        <br>

        <div class="text-center">
            <h3 id="margin">Survey:</h3>
            <br>
            <h5 id="margin">You and your info will remain entirely anonymous. We do NOT ask for your name or address. 
                <br>This survey will only take about 5 minutes to complete. Your inputed data will help doctors and scientists learn more about the Coronavirus and how to prevent it. Thank you!</h5>
            <br>
            <p id="border"><p>

            <br>

            <div class="selected_area">
                <form method="post" action="insert.php">

                    <p><span style="color:red">&#x2a;</span> Required Field</p>
                    <br>

                    <div id="margin" class="card">
                        <h5 class="card-header">Have YOU tested positive for COVID-19?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <p>(If no then please don’t continue)</p>
                            <label>
                                <input name="positive" type="checkbox" value="Yes" required>
                                Yes
                            </label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">What was the date you tested positive?</h5>
                        <div class="card-body">
                            <p>*If you're not sure don't fill it in.</p>
                            <p>Format: yyyy/mm/dd</p>
                            <label>
                                <input name="dateTested" type="text" placeholder="yyyy/mm/dd">
                            </label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">What is your current status? (Currently positive, previously positive)</h5>
                        <div class="card-body">
                            <label>
                                <label><input name="positiveStatus" type="radio" value="Currently positive"> Currently positive</label>
                                <br>
                                <label><input name="positiveStatus" type="radio" value="Previously Positive"> Previously positive</label>
                            </label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Have you been hospitalized?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" name="hospitalized" value="Yes"> Yes</label>
                            <br>
                            <label><input type="radio" name="hospitalized" value="No"> No</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">What's your age?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <input required name="age" type="number"/>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">I identify my ethnicity as:<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <p>(Select all that apply)</p>
                            <div id="surveyinput">
                                <label><input type="checkbox" name="asian" value="Asian"> Asian</label>
                                <br>
                                <label><input type="checkbox" name="American" value="American"> American</label>
                                <br>
                                <label><input type="checkbox" name="black_african" value="Black/African"> Black/African</label>
                                <br>
                                <label><input type="checkbox" name="caucasian" value="Caucasian"> Caucasian</label>
                                <br>
                                <label><input type="checkbox" name="hispanic_latinx" value="Hispanic/Latinx"> Hispanic/Latinx</label>
                                <br>
                                <label><input type="checkbox" name="nativeAmerican" value="Native American"> Native American</label>
                                <br>
                                <label><input type="checkbox" name="pacificIslander" value="Pacific Islander"> Pacific Islander</label>
                                <br>
                                <label><input type="checkbox" name="preferNotToAnswer" value="Prefer not to answer"> Prefer not to answer</label>
                                <br>
                                <label><input type="checkbox" name="other" value="Other"> Other <input type="text" name="otherDescription"></label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Gender:<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <p>(Select one)</p>
                            <div id="surveyinput">
                                <label><input type="radio" name="gender" value="Female"> Female</label>
                                <br>
                                <label><input type="radio" name="gender" value="Male"> Male</label>
                                <br>
                                <label><input type="radio" name="gender" value="Nonbinary"> Nonbinary</label>
                                <br>
                                <label><input type="radio" name="gender" value="Prefer not to say"> Prefer not to say</label>
                                <br>
                                <label><input type="radio" name="gender" value="Other"> Other <input type="text" name="gender"></label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">What country do you live in?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <input name="country" type="text"/>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">What state, territory, region, province, etc. do you live in?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <input name="territory" type="text"/>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Do you know at least one person who has also tested positive for COVID-19?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" name="knowSomeone" value="Yes"> Yes</label>
                            <br>
                            <label><input type="radio" name="knowSomeone" value="No"> No</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Do you have any idea where and how you may have contracted the coronavirus?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <input type="text" name="howContracted" >
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">In the past two weeks, how many times have you, our someone who lives in your household, gotten together with anyone outside your household?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="number" name="timesTogether"> times</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Have you gone anywhere away from the house in the past two weeks?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="Yes" name="awayFromHouse"> Yes</label>
                            <br>
                            <label><input type="radio" value="No" name="awayFromHouse"> No</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">If you have kids, have they gone anywhere away from the house in the past two weeks?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="Yes" name="kidsAwayFromHouse"> Yes</label>
                            <br>
                            <label><input type="radio" value="No" name="kidsAwayFromHouse"> No</label>
                            <br>
                            <label><input type="radio" value="No" name="kidsAwayFromHouse"> I don't have kids</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Where do you work?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="At home" name="work"> At home</label>
                            <br>
                            <label><input type="radio" value="On company property" name="work"> On company property</label>
                            <br>
                            <label><input type="radio" value="Both" name="work"> Both</label>
                            <br>
                            <label><input type="radio" value="unemployed" name="work"> I'm unemployed</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">If you are married, where does your spouse work?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="At home" name="spouseWork"> At home</label>
                            <br>
                            <label><input type="radio" value="On company property" name="spouseWork"> On company property</label>
                            <br>
                            <label><input type="radio" value="Both" name="spouseWork"> Both</label>
                            <br>
                            <label><input type="radio" value="Don't have a spouse" name="spouseWork"> Don't have a spouse</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">How well have you practiced 6ft distancing in the past two weeks with anyone outside your household?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="Both" name="youSixFt"> Not at all</label>
                            <br>
                            <label><input type="radio" value="Both" name="youSixFt"> Sometimes</label>
                            <br>
                            <label><input type="radio" value="Don't have a spouse" name="youSixFt"> Constantly</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">If you have gathered with anyone outside your household in the past two weeks, how well did they practice 6ft distancing?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="Both" name="theySixFt"> They didn't</label>
                            <br>
                            <label><input type="radio" value="Both" name="theySixFt"> Some did, some didn't</label>
                            <br>
                            <label><input type="radio" value="Don't have a spouse" name="theySixFt"> They did</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">How well have you practiced wearing a face mask in the past two weeks?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="Both" name="youMask"> I haven't worn one</label>
                            <br>
                            <label><input type="radio" value="Both" name="youMask"> Sometimes</label>
                            <br>
                            <label><input type="radio" value="Don't have a spouse" name="youMask"> Everytime I go out</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">If you have gathered with anyone outside your household in the past two weeks, how well did they practice wearing a face mask?<span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="Both" name="theyMask"> They didn't wear a mask</label>
                            <br>
                            <label><input type="radio" value="Both" name="theyMask"> Some did, some didn't</label>
                            <br>
                            <label><input type="radio" value="Don't have a spouse" name="theyMask"> They did wear a mask</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Do you have any medical conditions?</h5>
                        <div class="card-body">
                            <label><input type="radio" value="Yes" name="medicalCond"> Yes</label>
                            <br>
                            <label><input type="radio" value="No" name="medicalCond"> No</label>
                            <br>
                            <div id="surveyinputradio">
                                <h6>If you would like to help doctors and scientists gather more data about whcih medical conditions are at high risk for COVID-19, we ask that you select each of the medical conditions you have if they're listed.</h6>
                                <p>(Select all that apply to you)</p>
                                <br>
                                <label><input type="checkbox" value="Cancer" name="cancer"> Any type of cancer</label>
                                <br>
                                <label><input type="checkbox" value="Type 1 diabetes" name="diabetes1"> Type 1 diabetes</label>
                                <br>
                                <label><input type="checkbox" value="Type 2 diabetes" name="diabetes2"> Type 2 Diabetes</label>
                                <br>
                                <label><input type="checkbox" value="Obesity" name="obesitiy"> Obesity</label>
                                <br>
                                <label><input type="checkbox" value="Chronic kidney disease" name="kidneyDisease"> Chronic kidney disease</label>
                                <br>
                                <label><input type="checkbox" value="Serious heart conditions" name="heartCond"> Serious heart conditions</label>
                                <br>
                                <label><input type="checkbox" value="Weakened immune system" name="weakImmune"> Weakened immune system</label>
                                <br>
                                <label><input type="checkbox" value="Current or former smoker (vaping included)" name="smoker"> Current or former smoker (vaping included)</label>
                                <br>
                                <label><input type="checkbox" value="Liver disease" name="liverDisease"> Liver disease</label>
                                <br>
                                <label><input type="checkbox" value="Moderate to severe asthma" name="asthma"> Moderate to severe asthma</label>
                                <br>
                                <label><input type="checkbox" value="High blood pressure" name="highBP"> High blood pressure</label>
                                <br>
                                <label><input type="checkbox" value="Thalassemia (a type of blood disorder)" name="thalassemia"> Thalassemia (a type of blood disorder)</label>
                                <br>
                                <label><input type="checkbox" value="Not listed" name="notListed"> Not listed</label>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Are you pregnant? <span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="Yes" name="pregnant"> Yes</label>
                            <br>
                            <label><input type="radio" value="No" name="pregnant"> No</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Do you have health insurance? <span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="Yes" name="insurance"> Yes</label>
                            <br>
                            <label><input type="radio" value="No" name="insurance"> No</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Did you attend work while you were positive? <span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="Yes" name="attendWork"> Yes</label>
                            <br>
                            <label><input type="radio" value="No" name="attendWork"> No</label>
                        </div>
                    </div>
                    <br>
                    <div id="margin" class="card">
                        <h5 class="card-header">Were or are you symptomatic? <span style="color:red">&#x2a;</span></h5>
                        <div class="card-body">
                            <label><input type="radio" value="Yes" name="symptomatic"> Yes</label>
                            <br>
                            <label><input type="radio" value="No" name="symptomatic"> No</label>
                        </div>
                    </div>

                    <br>
                    <input type="submit" class="btn btn-primary" value="Submit" />
                <form>
            </div>
        </div>

        <br>

    </body>
</html>
