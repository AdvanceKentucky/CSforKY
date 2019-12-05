<?php require_once('couch/cms.php'); ?>
<cms:template title='blog' clonable='1' commentable='1'>
	<cms:editable name='blog_content' type='richtext' />
	<cms:editable name='blog_image' 
		type='image' 
	/>
	<cms:folder name="events" title="Upcoming Events" />
	<cms:folder name="ky-news" title="Kentucky News" />
	<cms:folder name="natl-news" title="National News" />
	<cms:folder name="opinion" title="Opinion" />
</cms:template>

<cms:if k_is_page >

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Karla|Spectral" rel="stylesheet">

	<!-- bootstrapCDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/fixed.css">
	<link rel="stylesheet" href="css/news-page.css">

	<title>Computer Science for Kentucky Blog</title>
</head>

<body>
	<cms:embed 'blog_header.html' />
		
	<section class="bg-secondary py-5">
        <div class="container">
			<div class="row my-5 p-3 border-top border-bottom">
				<h3 class="text-light">The <span class="bg-light text-secondary border p-1">CSforKY</span> blog, 
					all your Computer Science news in one place.</h3>
			</div>
			<div class="row my-5">
				<!-- begin article and comments -->
				<div class="col-md-8 bg-light border border-primary p-5">
					<!-- post title -->
					
					<a href="<cms:show k_page_link />"><h1><cms:show k_page_title /></h1></a>
					<cms:if k_page_foldertitle >
						<cms:set my_category=k_page_foldertitle />
					<cms:else />
						<cms:set my_category='Uncategorized' />
					</cms:if>
					<p><cms:show my_category /> | <cms:date k_page_date format='j M Y' /> <!-- show comments --></p>
					<!-- post image -->
					<img src="<cms:show blog_image />" alt=" " class="mb-3 img-fluid"> 
					<!-- post content -->
					<cms:show blog_content />
					<div class="row mb-3">
						<div class="col"><a class="btn btn-warning" href="<cms:link 'blog.php'/>" role="button">&lt;&lt; Back to Blog</a></div>
						<div class="col"></div>
						<div class="col"></div>
					</div>
					<!-- add comments here -->
				<!-- end article and comments -->
				</div>		

				<div class="col-md-4">
					<cms:embed 'blog_sidebar.html' />
				</div>
				<!-- end sidebar -->
            </div>  
            <!-- end row -->
        </div> 
        <!--end container  -->
    </section>
				
	<!-- Footer -->
    <footer class="page-footer bg-primary">
        <cms:embed 'blog_footer.html' />
    </footer>

	<!-- full jquery from code.jquery.com minified-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
    

    <script>
        //get the year for the copyright
        $("#year").text(new Date().getFullYear());

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
            } else {
            document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }  
    </script>

</body>
</html>
<cms:else />
	<cms:embed 'blog_list.html' />
</cms:if>
<?php COUCH::invoke(); ?>