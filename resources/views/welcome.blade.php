<!DOCTYPE html>
<html>
	<head>
		<title>Iqra Learning Academy| IqraLearning.com</title>
		<meta charset="UTF-8">
		<!--font awesome-->	
	
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/css/style.css"/>

		<link rel="icon" href="assets/img/favicon.png"/>
		<link rel="shortcut icon" href="assets/img/favicon.ico"/>	
	</head>
	<body>
		<div class="container">	
            {{-- header start --}}
			    @include('user.header')
            {{-- header end --}}
			<main>
                <!--feature start-->
                    @include('user.feature')
                <!--feature end-->

                <!--about me starts-->
                    @include('user.about_me')
                <!--about me ends-->
                
                <!--tutorial start here-->
                    @include('user.tutorial')
                <!--tutorial ends here-->

                <!--feedback start-->
                    @include('user.feedback')
                <!--feedback ends-->
                
                <!--contact me start here-->
                    @include('user.contact_me')
                <!--contact me end here-->
			</main>
				
		</div>
        <div class="container-fluid footer_color">
             {{-- footer start --}}
             @include('user.footer')
             {{-- footer end --}}	
        </div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	</body>
</html>