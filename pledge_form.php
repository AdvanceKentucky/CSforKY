<?php require_once('couch/cms.php'); ?>
<cms:template title='Pledge Form' clonable='1'>
	<cms:editable name="first" required='1' type='text' />
	<cms:editable name="last" required='1' type='text' />
	<cms:editable name="email" required='1' validator='email' type='text' />
	<cms:editable name="mailinglist" required='1' type='radio' opt_values='Yes=y | No=n' />
	<cms:editable name="county" required='1' type='dropdown'  opt_values="--- select one --- | Adair | Allen | Anderson | Ballard | Barren/Glasgow/Caverna | Bath | Belle/Middlesboro/Pineville | Boone/Walton-Verona | Bourbon/Paris | Boyd/Fairview/Ashland | Boyle/Danville/KSD | Bracken/Augusta | Breathitt/Jackson | Breckinridge/Cloverport | Bullitt | Butler | Caldwell | Calloway/Murray | Campbell/Bellevue/Dayton/FtThomas | Campbell/Newport/SilverGrove/Southgate | Carlisle | Carroll | Carter | Casey | Christian | Clark | Clay | Clinton | Crittenden | Cumberland | Daviess/Owensboro | Edmonson | Elliott | Estill | Fayette | Fleming | Floyd | Franklin/Frankfort | Fulton | Gallatin | Garrard | Grant/Williamstown | Graves/Mayfield | Grayson | Green | Greenup/Raceland-Worthington/Russell | Hancock | Hardin/WestPoint/Elizabethtown | Harlan | Harrison | Hart | Henderson | Henry/Eminence | Hickman | Hopkins/DawsonSprings | Jackson | Jefferson/Anchorage/KSB | Jessamine | Johnson/Paintsille | Kenton/Beechwood/Covington/Erlanger/Ludlow | Knott | Knox/Barbourville | Larue | Laurel/EastBernstadt | Lawrence | Lee | Leslie | Letcher/Jenkins | Lewis | Lincoln | Livingston | Logan/Russellville | Lyon | McCracken/Paducah | McCreary | McLean | Madison/Berea | Magoffin | Marion | Marshall | Martin | Mason | Meade | Menifee | Mercer/Burgin | Metcalfe | Monroe | Montgomery | Morgan | Muhlenberg | Nelson/Bardstown | Nicholas | Ohio | Oldham | Owsley | Pendleton | Perry/Hazard | Pike/Pikeville | Powell | Pulaski/ScienceHill/Somerset | Robertson | Rockcastle | Rowan | Russell | Scott | Shelby | Simpson | Spencer | Taylor/Campbellsville | Todd | Trigg | Trimble | Union | Warren/BowlingGreen | Washington | Wayne | Webster | Whitley/Corbin/Williamsburg | Wolfe | Woodford | ---------- | Outside KY" />
	<cms:editable name="age" required='1' type='radio' opt_values="11 years and under=elementary | 12-14 years=middle | 15-19 years=high | over 19 years=adult" />
	<cms:editable name="role" required='1' type='radio' opt_values="Comunity Member=community | Educator=educator | Student=student | Parent=parent" />
</cms:template>
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
    <div class="container bg-light m-3 p-3 custom-padding offset">     <h1>Kentucky Computer Science Pledge</h1>
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
  <p>Our mission is to make high-quality computer science an integral part of the educational experience of all K-12
    students and teachers and to support student pathways to college and career success.</p>

  <h2>What You Can Do</h2>
  <p class="lead">Wondering what you can do to support computer science Kentucky? Here are a few suggestions.</p>
  <ul>
    <li>Nominate a teacher for a professional learning scholarship: <a
        href="www.code.org/nominate">www.code.org/nominate</a></li>
    <li>Send a letter:
      <ul>
        <li>To your school/district asking them to expand computer science offerings at every grade level</li>
        <li>To your elected officials asking them to support computer science education policy in Kentucky</li>
      </ul>
    </li>
    <li>Visit <a href="www.code.org/promote/KY">www.code.org/promote/KY</a> to learn more about supporting computer
      science in your state.</li>
    <li>Do an #HourofCode or host an #HourofCode event.</li>
    <li>Join CSforKY in its mission to provide every K-12 student the opportunity to learn computer science in school.
    </li>
    <li>Take the #CSforKY pledge below</li>
  </ul>
  <br>
    <cms:set submit_success="<cms:get_flash 'submit_success' />" />
    <cms:if submit_success >
        <h4>Thank you for supporting CS for all KY students!</h4>
    </cms:if>

    <cms:form 
        masterpage=k_template_name
        mode='create'
        enctype='multipart/form-data'
        method='post'
        anchor='0' 
        class="border border-primary rounded p-3"
        >

      <cms:if k_success >
          <cms:set_flash name='submit_success' value='1' />
          <cms:redirect k_page_link />
      </cms:if>

      <cms:if k_error >
          <div class="error">
              <cms:each k_error >
                  <br><cms:show item />
              </cms:each>
          </div>
      </cms:if>

      <p class="lead text-primary"><i class="fas fa-hand-paper fa-3x"></i> I hereby pledge to support computer science for all Kentucky students.</p>
      <div class="form-group">
          <label for="first">First Name</label>					
          <cms:input type="bound" name="first" label="First Name" required='1' class="form-control"/>
      </div>
       <div class="form-group">
       <label for="last">Last Name</label>
          <cms:input type="bound" name="last" label="Last Name" required='1' class="form-control"/>	
       </div>   
       <div class="form-group">
         <label for="email">Email</label>
         <cms:input type="bound"
                  name="email"
                  label='Email'
                  maxlength="100"
                  validator='email'
                  required='1'
                  class="form-control"/>
       </div>
       <div class="form-group">
         <label for="mailinglist" class="mr-2">Add me to your mailing list:</label>
         <cms:input type="bound" name="mailinglist" class="ml-2"/>
       </div>
        <div class="form-group">
          <label for="county"">Select Your County / School District</label>
          <cms:input type="bound"
                      name="county"                  
                      class="form-control"/>
        </div>
        <div class="form-group">
          <label for="age" class="mr-2">Age: </label>
          <cms:input type="bound" name="age" class="ml-2"/>
        </div>
        <div class="form-group">
          <label for="role" class="mr-2">Role:</label>
          <cms:input type="bound" name="role" class="ml-2"/>
        </div>
       <cms:input type="submit"  name="submit" label="Ready?" value="Take the Pledge" class="btn btn-primary" />

    </cms:form>
    </div>   			
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  
</body>
</html>
<?php COUCH::invoke(); ?>