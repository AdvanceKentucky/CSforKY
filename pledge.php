<?php require_once('couch/cms.php'); ?>
<cms:template title='Pledge' />
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Karla|Spectral" rel="stylesheet">

        <!-- bootstrapCDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- font awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- animate.css -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />

        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/pledge.css" />

    <title>KY CS Pledge</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.maps.js"></script>
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/maps/fusioncharts.kentucky.js"></script>
</head>

<body class="bg-primary">
    <!-- navigation -->
    <nav id="main-nav" class="navbar navbar-expand-sm fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#"><img src="img/CSforKY-color2019.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<cms:link 'index.php' />">Home</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="<cms:link 'pledge.php' />">Pledge</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                News
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<cms:link 'blog.php'/>">Blog</a>
                <a class="dropdown-item" href="#more">@CS<span style="text-transform:lowercase">for</span>KY Twitter</a>
                <a class="dropdown-item" href="#more">Add an Article</a>
                </div>
              </li>
            </ul>
          </div>
      </div>
    </nav>
    <!-- body text container -->    
    <div class="mt-5 p-5 bg-light container custom-padding offset">
        <h1>Kentucky Computer Science Pledge</h1>
        <p>Computer science drives job growth and innovation throughout our
economy and society. Computing occupations are the number 1
source of all new wages in the U.S. and make up over half of all
projected new jobs in STEM fields, making Computer Science one of
the most in-demand college degrees. And computing is used all
around us and in virtually every field. It’s foundational knowledge
that all students need. But computer science is marginalized
throughout education. Only 45% of U.S. high schools teach any
computer science courses and only 10% of STEM graduates study it.
We need to improve access for all students, including groups who
have traditionally been underrepresented.</p>


        <p>We believe that every K-12 Kentucky student should have the opportunity to learn computer science in school.</p>
        <p>Our mission is to make high-quality computer science an integral part of the educational experience of all K-12 students and teachers and to support student pathways to college and career success.</p>
        <div class="row mb-3">
            <div class="col-md-6">
                <h2>Will You Pledge Your Support?</h2>
                <p>Together we can</p>
                <ul>
                    <li>Support Local Change</li>
                    <li>Serve Students with Rigor and Equity</li>
                    <li>Build the CS Education movement in Kentucky</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>What You Can Do</h2>
                <p>Wondering what you can do to support computer science Kentucky?  Here are a few suggestions.</p>
                <ul>
                <li>Nominate a teacher for a professional learning scholarship: <a href="www.code.org/nominate">www.code.org/nominate</a></li>
                <li>Send a letter:
                <ul> 
                <li>To your school/district asking them to expand computer science offerings at every grade level</li>
                <li>To your elected officials asking them to support computer science education policy in Kentucky</li>
                </ul>
                </li>
                <li>Visit <a href="www.code.org/promote/KY">www.code.org/promote/KY</a> to learn more about supporting computer science in your state.</li>
                <li>Do an #HourofCode or host an #HourofCode event.</li>
                <li>Join CSforKY in its mission to provide every K-12 student the opportunity to learn computer science in school.</li>
                <li>Take the #CSforKY pledge below</li>                   
                </ul>
            </div>
        </div>
        <div class="pledge">

        <form id="pledge_form" action="" method="POST">
            <fieldset class="border p-3 mb-3">
                <legend class="border p-3 text-center">Take the #CSforKY Pledge</legend>
                <h3>I hereby pledge to support computer science for all Kentucky students.</h3> 
                <br>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname">
                        </div>
                    </div>
                </div> <!-- end name row -->
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email (optional) </label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="mailinglist" id="mailinglist" class="form-check-input">
                            <label for="mailinglist">Would you like to join the <strong>CSforKY</strong> mailing list?</label>                
                        </div>
                    </div> <!-- end left column -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="county">Select your county / school district</label>
                            <select name="county" id="county" class="form-control">
                                <option value="none">---select one---</option>
                                <option value="Adair">Adair
                                <option value="Allen">Allen</option>
                                <option value="Anderson">Anderson</option>
                                <option value="Ballard">Ballard</option>
                                <option value="Barren">BarrenGlasgow/Caverna/</option>
                                <option value="Bath">Bath</option>
                                <option value="Bell">Bell/Middlesboro/Pineville</option>
                                <option value="Boone">Boone/Walton-Verona</option>
                                <option value="Bourbon">Bourbon/Paris</option>
                                <option value="Boyd">Boyd/Fairview/Ashland</option>
                                <option value="Boyle">Boyle/Danville/KSD</option>
                                <option value="Bracken">Bracken/Augusta</option>
                                <option value="Breathitt">Breathitt/Jackson</option>
                                <option value="Breckinridge">Breckinridge/Cloverport</option>
                                <option value="Outside KY">Bullitt</option>
                                <option value="Butler">Butler</option>
                                <option value="Caldwell">Caldwell</option>
                                <option value="Calloway">Calloway/Murray</option>
                                <option value="Campbell">Campbell/Bellevue/Dayton/FtThomas</option>
                                <option value="Campbell">Campbell/NewportSilverGrove/Southgate</option>
                                <option value="Carlisle">Carlisle</option>
                                <option value="Carroll">Carroll</option>
                                <option value="Carter">Carter</option>
                                <option value="Casey">Casey</option>
                                <option value="Christian">Christian</option>
                                <option value="Clark">Clark</option>
                                <option value="Clay">Clay</option>
                                <option value="Clinton">Clinton</option>
                                <option value="Crittenden">Crittenden</option>
                                <option value="Cumberland">Cumberland</option>
                                <option value="Daviess">Daviess/Owensboro</option>
                                <option value="Edmonson">Edmonson</option>
                                <option value="Elliott">Elliott</option>
                                <option value="Estill">Estill</option>
                                <option value="Fayette">Fayette</option>
                                <option value="Fleming">Fleming</option>
                                <option value="Floyd">Floyd</option>
                                <option value="Franklin">Franklin/Frankfort</option>
                                <option value="Fulton">Fulton</option>
                                <option value="Gallatin">Gallatin</option>
                                <option value="Garrard">Garrard</option>
                                <option value="Grant">Grant/Williamstown</option>
                                <option value="Graves">Graves/Mayfield</option>
                                <option value="Grayson">Grayson</option>
                                <option value="Green">Green</option>
                                <option value="Greenup">Greenup/Raceland-Worthington/Russell</option>
                                <option value="Hancock">Hancock</option>
                                <option value="Hardin">Hardin/WestPoint/Elizabethtown</option>
                                <option value="Harlan">Harlan</option>
                                <option value="Harrison">Harrison</option>
                                <option value="Hart">Hart</option>
                                <option value="Henderson">Henderson</option>
                                <option value="Henry">Henry/Eminence</option>
                                <option value="Hickman">Hickman</option>
                                <option value="Hopkins">Hopkins/DawsonSprings</option>
                                <option value="Jackson">Jackson</option>
                                <option value="Jefferson">Jefferson/Anchorage/KSB</option>
                                <option value="Jessamine">Jessamine</option>
                                <option value="Johnson">Johnson/Paintsville</option>
                                <option value="Kenton">Kenton/Beechwood/Covington/Erlanger/Ludlow</option>
                                <option value="Knott">Knott</option>
                                <option value="Knox">Knox/Barbourville</option>
                                <option value="Larue">Larue</option>
                                <option value="Laurel">Laurel/EastBernstadt</option>
                                <option value="Lawrence">Lawrence</option>
                                <option value="Lee">Lee</option>
                                <option value="Leslie">Leslie</option>
                                <option value="Letcher">Letcher/Jenkins</option>
                                <option value="Lewis">Lewis</option>
                                <option value="Lincoln">Lincoln</option>
                                <option value="Livingston">Livingston</option>
                                <option value="Logan">Logan/Russellville</option>
                                <option value="Lyon">Lyon</option>
                                <option value="McCracken">McCracken/Paducah</option>
                                <option value="McCreary">McCreary</option>
                                <option value="McLean">McLean</option>
                                <option value="Madison">Madison/Berea</option>
                                <option value="Magoffin">Magoffin</option>
                                <option value="Marion">Marion</option>
                                <option value="Marshall">Marshall</option>
                                <option value="Martin">Martin</option>
                                <option value="Mason">Mason</option>
                                <option value="Meade">Meade</option>
                                <option value="Menifee">Menifee</option>
                                <option value="Mercer">Mercer/Burgin</option>
                                <option value="Metcalfe">Metcalfe</option>
                                <option value="Monroe">Monroe</option>
                                <option value="Montgomery">Montgomery</option>
                                <option value="Morgan">Morgan</option>
                                <option value="Muhlenberg">Muhlenberg</option>
                                <option value="Nelson">Nelson/Bardstown</option>
                                <option value="Nicholas">Nicholas</option>
                                <option value="Ohio">Ohio</option>
                                <option value="Oldham">Oldham</option>
                                <option value="Owen">Owen</option>
                                <option value="Owsley">Owsley</option>
                                <option value="Pendleton">Pendleton</option>
                                <option value="Perry">Perry/Hazard</option>
                                <option value="Pike">Pike/Pikeville</option>
                                <option value="Powell">Powell</option>
                                <option value="Pulaski">Pulaski/ScienceHill/Somerset</option>
                                <option value="Robertson">Robertson</option>
                                <option value="Rockcastle">Rockcastle</option>
                                <option value="Rowan">Rowan</option>
                                <option value="Russell">Russell</option>
                                <option value="Scott">Scott</option>
                                <option value="Shelby">Shelby</option>
                                <option value="Simpson">Simpson</option>
                                <option value="Spencer">Spencer</option>
                                <option value="Taylor">Taylor/Campbellsville</option>
                                <option value="Todd">Todd</option>
                                <option value="Trigg">Trigg</option>
                                <option value="Trimble">Trimble</option>
                                <option value="Union">Union</option>
                                <option value="Warren">Warren/BowlingGreen</option>
                                <option value="Washington">Washington</option>
                                <option value="Wayne">Wayne</option>
                                <option value="Webster">Webster</option>
                                <option value="Whitley">Whitley/Corbin/Williamsburg</option>
                                <option value="Wolfe">Wolfe</option>
                                <option value="Woodford">Woodford</option>
                                <option value="none">--------------</option>
                                <option value="Outside KY">Outside KY</option>
                            </select> 
                        </div><!-- end county -->
                    </div> <!-- end right column -->                    
                </div> 
                <!-- end email/county row -->
                
                <div class="row mb-2">
                    <div class="col-md-6">
                        <p>Age</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age" id="elementary" value="elementary">
                            <label class="form-check-label" for="elementary">
                                11 and under
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age" id="middle" value="middle">
                            <label class="form-check-label" for="middle">
                                12-14                            
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age" id="high" value="high">
                            <label class="form-check-label" for="high">
                                15-19                            
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="age" id="adult" value="adult">
                            <label class="form-check-label" for="adult">
                                Over 19                            
                            </label>
                        </div>
                    </div> <!-- end left col -->
                    <div class="col-md-6">
                        <p>Role</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="community" value="community">
                            <label class="form-check-label" for="community">
                                Community Member
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="educator" value="educator">
                            <label class="form-check-label" for="educator">
                                Educator
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="student" value="student">
                            <label class="form-check-label" for="student">
                                Student
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="role" id="parent" value="parent">
                            <label class="form-check-label" for="parent">
                                Parent
                            </label>
                        </div>
                    </div> <!-- end right col -->
                </div> <!-- end row -->             

                <button type="submit">Take the Pledge!</button>
            </fieldset>
        </form>
        </div> <!-- end pledge section -->
        <div id="chart-container" class="container"></div>
    </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="fusioncharts/fusioncharts.js"></script>
    <script type="text/javascript" src="fusioncharts/themes/fusioncharts.theme.fusion.js"></script>
    <!-- Script that generates the actual map of Kentucky with its counties that are highlighted in purple when the mouse hovers over -->   
    <script>	
        FusionCharts.ready(function () {
            // chart instance
            var chart = new FusionCharts({
                type: "kentucky",
                renderAt: "chart-container", // container where chart will render
                width: "1077",
                height: "660",
                dataFormat: "json",
                dataSource: {
                    "chart": {
		      "showCanvasBorder": "0",
                      "caption": "Kentucky Computer Science Pledges by County",
                      "subcaption": " 2019-2020 ",
                      "includevalueinlabels": "0",
                      "labelsepchar": ": ",
		      "formatNumberScale": "0",
		      "nullEntityColor": "#D7DBDD",
        	    //  "nullEntityAlpha": "50", -->
                      "entityFillHoverColor": "#FFC300",
                      "theme": "fusion"
                    }, // End chart initialization-->  
		   
 		    "colorrange": {
        	      "color": [{
                	 "minvalue": "0",
                	 "maxvalue": "0",
                	 "code": "#D7DBDD",
                	 "displayValue": "No pledges"
            	        },{
                	  "minvalue": "1",
                	  "maxvalue": "10",
                	  "code": "#D7BDE2",
                	  "displayValue": "1-10"
            		},{
                	  "minvalue": "11",
                	  "maxvalue": "50",
                	  "code": "#85C1E9",
                	  "displayValue": "11-50"
            		},{
                	  "minvalue": "51",
                	  "maxvalue": "100",
                	  "code": "#7DCEA0",
                	  "displayValue": "51-100"
            		},{
                	  "minvalue": "100",
                	  "maxvalue": "1000000000",
                	  "code": "#0C72F0",
                	  "displayValue": "> 100"
            		}]
    		    }, //End color gradient

		    "data":[
			{
            	        "id": "001",
            		"value": 0
        	    	},
			{
			"id": "003",
			"value": 0
			},
			{
			"id": "005",
			"value": 0
			},
			{
			"id": "007",
			"value": 0
			},
			{
			"id": "009",
			"value": 0
			},
			{
			"id": "011",
			"value": 0
			},
			{
			"id": "013",
			"value": 0
			},
			{
			"id": "015",
			"value": 0
			},
			{
			"id": "017",
			"value": 0
			},
			{
			"id": "019",
			"value": 0
			},
			{
			"id": "021",
			"value": 0
			},
			{
			"id": "023",
			"value": 0 
			},
        	    	{
            		"id": "025",
            		"value": 0
        		},
			{
			"id": "027",
			"value": 0
			},
			{
			"id": "029",
			"value": 0
			},
			{
			"id": "031",
			"value": 0
			},
			{
			"id": "033", 
			"value": 0
			},
			{
			"id": "035",
			"value": 0
			},
			{
			"id": "037",
			"value": 0
			},
			{
			"id": "039",
			"value": 0
			},
			{
			"id": "041",
			"value": 0
			},
			{
			"id": "043",
			"value": 0
			},
			{
			"id": "045",
			"value": 0
			},
			{
			"id": "047",
			"value": 0
			},
			{
			"id": "049",
			"value": 0
			},
			{
			"id": "051",
			"value": 0
			},
			{
			"id": "053",
			"value": 0
			},
			{
			"id": "055",
			"value": 0
			},
			{
			"id": "057",
			"value": 0
			},
			{
			"id": "059",
			"value": 0
			},
			{
			"id": "061",
			"value": 0
			},
			{
			"id": "063",
			"value": 0
			},
			{
			"id": "065",
			"value": 0
			},
			{
			"id": "067",
			"value": 0
			},
			{
			"id": "069",
			"value": 0
			},
			{
			"id": "071",
			"value": 0
			},
			{
			"id": "073",
			"value": 0
			},
			{
			"id": "075",
			"value": 0
			},
			{
			"id": "077",
			"value": 0
			},
			{
			"id": "079",
			"value": 0
			},
			{
			"id": "081",
			"value": 0
			},
			{
			"id": "083",
			"value": 0
			},
			{
			"id": "085",
			"value": 0
			},
			{
			"id": "087",
			"value": 0
			},
			{
			"id": "089",
			"value": 0
			},
			{
			"id": "091",
			"value": 0
			},
			{
			"id": "093",
			"value": 0
			},
			{
			"id": "095",
			"value": 0
			},
			{
			"id": "097",
			"value": 0
			},
			{
			"id": "099",
			"value": 0
			},
			{
			"id": "101",
			"value": 0
			},
			{
			"id": "103",
			"value": 0
			},
			{
			"id": "105",
			"value": 0
			},
			{
			"id": "107",
			"value": 0
			},
			{
			"id": "109", 
			"value": 0
			},
			{
			"id": "111",
			"value": 0
			},
			{
			"id": "113",
			"value": 0
			},
			{
			"id": "115",
			"value": 0
			},
			{
			"id": "117",
			"value": 0
			},
			{
			"id": "119",
			"value": 0
			},
			{
			"id": "121",
			"value": 0
			},
			{
			"id": "123",
			"value": 0
			},
			{
			"id": "125",
			"value": 0
			},
			{
			"id": "127",
			"value": 0
			},
			{
			"id": "129",
			"value": 0
			},
			{
			"id": "131",
			"value": 0
			},
			{
			"id": "133",
			"value": 0
			},
			{
			"id": "135",
			"value": 0
			},
			{
			"id": "137",
			"value": 0
			},
			{
			"id": "139",
			"value": 0
			},
			{
			"id": "141",
			"value": 0
			},
			{
			"id": "143",
			"value": 0
			},
			{
			"id": "151",
			"value": 0
			},
			{
			"id": "153",
			"value": 0
			},
			{
			"id": "155",
			"value": 0
			},
			{
			"id": "157",
			"value": 0
			},
			{
			"id": "159",
			"value": 0
			},
			{
			"id": "161",
			"value": 0
			},
			{
			"id": "145",
			"value": 0
			},
			{
			"id": "147",
			"value": 0
			},
			{
			"id": "149",
			"value": 0
			},
			{
			"id": "163",
			"value": 0
			},
			{
			"id": "165",
			"value": 0
			},
			{
			"id": "167",
			"value": 0
			},
			{
			"id": "169",
			"value": 0
			},
			{
			"id": "171",
			"value": 0
			},
			{
			"id": "173",
			"value": 0
			},
			{
			"id": "175",
			"value": 0
			},
			{
			"id": "177",
			"value": 0
			},
			{
			"id": "179",
			"value": 0
			},
			{
			"id": "181",
			"value": 0
			},
			{
			"id": "183",
			"value": 0
			},
			{
			"id": "185",
			"value": 0
			},
			{
			"id": "187",
			"value": 0
			},
			{
			"id": "189",
			"value": 0
			},
			{
			"id": "191",
			"value": 0
			},
			{
			"id": "193",
			"value": 0
			},
			{
			"id": "195",
			"value": 0
			},
			{
			"id": "197",
			"value": 0
			},
			{
			"id": "199",
			"value": 0
			},
			{
			"id": "201",
			"value": 0
			},
			{
			"id": "203",
			"value": 0
			},
			{
			"id": "205",
			"value": 0
			},
			{
			"id": "207",
			"value": 0
			},
			{
			"id": "209",
			"value": 0
			},
			{
			"id": "211",
			"value": 0
			},
			{
			"id": "213",
			"value": 0
			},
			{
			"id": "215",
			"value": 0
			},
			{
			"id": "217",
			"value": 0
			},
			{
			"id": "219",
			"value": 0
			},
			{
			"id": "221",
			"value": 0
			},
			{
			"id": "223",
			"value": 0
			},
			{
			"id": "225",
			"value": 0
			},
			{
			"id": "227",
			"value": 0
			},
			{
			"id": "229", 
			"value": 0
			},
			{
			"id": "231",
			"value": 0
			},
			{
			"id": "233",
			"value": 0
			},
			{
			"id": "235",
			"value": 0
			},
			{
			"id": "237",
			"value": 0
			},
        		{
            		"id": "239",
            		"value": 0
        		}],
		},

		"events": {
      		  "beforeRender": function(evt, args) {
        	  var textArea = document.createElement("textarea");
        	  textArea.setAttribute("id", "message");
        	  textArea.setAttribute("rows", "4");
        	  textArea.setAttribute("cols", "75");
        	  textArea.style.cssText = "margin-left:15px;text-align:center;display:block;";
        	  textArea.innerHTML = "Hover on respective counties to see the number of pledges";
        	  args.container.appendChild(textArea);
      		},
     		
		"entityRollover": function(evt, data) {
        	  document.getElementById('message').value = "" + data.label + "\n" + "# of pledges: " + data.value;
      		},
      
		"entityRollout": function(evt, data) {
        	  document.getElementById('message').value = "Hover on respective counties to see the number of pledges";
      		},
      
		"entityClick": function(evt, data) {
        	  alert("You have clicked on " + data.label + ".");
      		},
		
              }
            }).render();
        });
    </script>
</body>
</html>
<?php COUCH::invoke(); ?>