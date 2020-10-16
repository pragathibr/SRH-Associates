<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SRH Associates</title>
	<link rel="icon" href="Images/SRH.png" type="image/gif">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="javascript/count.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>

	<section class="img_head" id="home">
		<nav class="navbar trans_nav" role="navigation" id="myNav">
	    	<!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
		      	<button type="button" class="navbar-toggle icon-bar fixed-top" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">MENU</button>
			</div>
	 	    
	 	    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse trans_nav navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav navbar-fixed-top" style="background:black;background:rgba(0,0,0,0.8);">


				    <!-- <li class="pull-left"><a href="#">Dashboard</a></li> -->
				    <li class="nav_itm"><a class="nav_link" href="#">Home</a></li>
				    <li class="nav_itm"><a class="nav_link" href="#about_us">About Us</a></li>
				    <li class="nav_itm"><a class="nav_link" href="#services">Services</a></li>
				    <li class="nav_itm"><a class="nav_link" href="#our_team">Our Team</a></li>
				    <li class="nav_itm"><a class="nav_link" href="#testimonials">Testimonials</a></li>
					<li class="nav_itm"><a class="nav_link" href="#contact_us">Contact Us</a></li>
					<li class="nav_itm"><a class="nav_link fa fa-times" href="#"></a></li>
					<!-- <li class="social pull-right"><a href="#">Social Links</a></li> -->
					<li>
						<div class = "notification">
							<div class = "notBtn" href = "#">
							  <!--Number supports double digets and automaticly hides itself when there is nothing between divs -->
							  <div class = "number"></div>
							  <i class="fas fa-bell"></i>
							  <div class = box>
								  <div class = display>
									<div class = nothing> 
									  <i class=fas fa-child stick></i> 
									  <div class = cent>Looks Like your all caught up!</div>
									</div>
									<div class = cont><!-- Fold this div and try deleting evrything inbetween -->
							  <?php
							 	 $conn=new mysqli("localhost","root","","client_database");
        						$sql = "select * from updates";
        						$result = $conn->query($sql);

        						if ($result->num_rows > 0) {
						        while($row = $result->fetch_assoc())
						        {
						            echo "<div class = \"sec new\"> 									 
										 <div class = \"txt\">".$row["heading"].": \"".$row["content"]."\"</div>
										<div class = \"txt sub\">".$row["date"]." - ".$row["time"]."</div>
									  </div>";
								  
						        }
						    }

							  ?>
								 </div>
								  </div>
							   </div>
							</div>
						  </div>
					</li>
			    </ul>
		    </div><!-- /.navbar-collapse -->
		</nav>
	<br>
		<div class="logo">
			<img src="Images/Logo.png" width="250px" height="250px">
		</div>

		<div class="row">
			<div class="col-xs-6 title_bg">
				<h1 class="title_h1">Building Your Finance Right!</h1>
				<p class="title_p"></p>
				<button class="button"><a style="color:white;" href="#about_us">Know More</a></button>
				<br>
				<br>
				<br>
			</div>
		</div>
	</section>

	<section id="about_us" class="services_head">

		<div class="about_us_home">
			<h1 class="about_us_h1">ABOUT US</h1>
			<p class="about_us_p">SRH Associates have developed as full services accouting,tax and auditing firm.
				The firm was established in 2016 by our founder GIRI S A who is a central-government certified GST practitioner.
				Running strong from 8 years long experience in the field of GST Taxation.
			We believe we can run a successful,profitable business without compromising our ethical principles.
		Quality does not come at a higher price,it is a state of mind. At SRH we strive for perfection in everything we do.
	We do not believe in extravagant margins.</p>
		</div>
<br>
<br>
		<div class="row row_center">

			<div class="col-xs-4 about_card">
				<div class="card">
					<img src="Images/man.jpg" class="card-img-top" alt="Persistance is our key" width="100%">
					<div class="card-body">
						<h5 class="card-title">Persistance</h5>
						<p class="card-text" style="font-size: 17px;">Ambition is the path to success, persistence is the vehicle you arrive in.</p>
					</div>
				</div>
			</div>
					
			<div class="col-xs-4 about_card">
				<div class="card">
					<img src="Images/pers.jpg" class="card-img-top" alt="Perseverance is our way" width="100%">
					<div class="card-body">
						<h5 class="card-title">Perseverance</h5>
						<p class="card-text" style="font-size: 17px;">If you only knock long enough and loud enough at the gate. You are sure to wake up somebody.</p>
					</div>
				</div>
			</div>

			<div class="col-xs-4 about_card">
				<div class="card">
					<img src="Images/deter.jpg" class="card-img-top" alt="Determination is what we do" width="100%">
					<div class="card-body">
						<h5 class="card-title">Determination</h5>
						<p class="card-text" style="font-size: 17px;">Our most unhappy customers are our greatest source of learning.</p>
					</div>
				</div>
			</div>
				
		</div>
		<button class="pull-center btn btn-outline-primary button">
			<a style="color:white;" href="aboutus.html">More About Us</a>
		</button>
	</section>

	<section id="we_teach">
		<div class="row row_form">
			<div class="col-xs-12 col-sm-6 form_col">
				<h1>We Teach</h1>
				<ul class="we_teach_list">
					<li>Can people tax themselves into prosperity?Nope,
						We train you to make your taxation right.
					</li>
					<li>
						We conduct seminars and workshops to increase the practical knowledge of the students in terms of GST Practices
					</li>
					<li>
						Accounting is not Boring!! Stop by and we'll tell you why.
					</li>
					<li>
						Our firm provides advisory for legal registration process.
					</li>
					
				</ul>				
			</div>

			<div class="col-xs-12 col-sm-6 form_col">
				<form action="weteach.php" method="post">
					<div class="form-group">
						<h2>We'd love to hear from you</h2>
						<label for="exampleInputEmail2">Name</label>
						<input type="text" class="form-control" name="name" pattern="[a-zA-Z\s\.]*${3,40}" required >
					</div>

					<div class="form-group">
						<label for="exampleInputEmail2">Email</label>
						<input type="email" class="form-control" name="email" required id="exampleInputEmail2">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail2">Contact</label>
						<input type="tel" class="form-control" name="contact"  pattern="[0-9]{10}" maxlength="10" required >
					</div>

					<div class="form-group">
						<label for="exampleFormControlTextarea1" class="">Desciption</label>
						<div>
							<textarea class="form-control" name="content" required id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-10">
							<button type="submit" value="create new entry" name="entry_submit" class="button">I'd like to LEARN</button>
						</div>
					</div>
				</form>  
			</div>
		</div>
	</section>


	<div class="container_def">
  <div class="row row_count">
    
    <div class="col-xs-6 container">
      <div class="card card_count">
        <h1>Stats </h1>
        <p>Pellentesque libero justo, semper at tempus vel, ultrices in sed ligula. Nulla uter sollicitudin velit.Lorem Ipsum has been the industry's standard since the 1500s.</p>
      </div>
    </div>
    
    <div class="col-xs-6">

      <div class="row row_count"> 
        <div class="col-xs-6">
            <div class="card card_count">
              <center><i class="fa fa-users fa-2x"></i></center>
              <h2 class="timer count-title count-number" data-to="40" data-speed="1500"></h2>
              <p class="count-text">Clients</p>
            </div>
        </div>

        <div class="col-xs-6">
            <div class="card card_count">
              <center><i class="fa fa-map fa-2x"></i></center>
              <h2 class="timer count-title count-number" data-to="7" data-speed="1500"></h2>
              <p class="count-text ">Cities</p>
            </div>
        </div>

        <div class="col-xs-6">
            <div class="card card_count">
              <center><i class="fa fa-briefcase fa-2x"></i></center>
              <h2 class="timer count-title count-number" data-to="57" data-speed="1500"></h2>
              <p class="count-text ">Projects</p>
            </div>
        </div>

        <div class="col-xs-6">
            <div class="card card_count">
              <center><i class="fa fa-money fa-2x"></i></center>
              <h2 class="timer count-title count-number" data-to="20" data-speed="1500"></h2>
              <p class="count-text ">Current Active Accounts</p>
            </div>
        </div>

      </div>
    
    </div>
  </div>
</div>





	<div id="services">
		<h1 class="services_head">Services</h1>
		<div class="row row_center">
    
		    <div class=" col-xs-6 col-sm-3">
		    	<figure class="snip1579"><img src="Images/bank.jpg" alt="profile-sample2"/>
		  			<figcaption>
		    			<h3>Gst Services</h3>
		    			<blockquote>
		    				<p>'Which is worse, that everyone has his price, or that the price is always so low.'</p>
		    			</blockquote>
		  			</figcaption>
		  			<a href="#"></a>
				</figure>

		    </div>

		    <div class=" col-xs-6 col-sm-3">
		    	<figure class="snip1579"><img src="Images/advice.jpg" alt="profile-sample2"/>
		  			<figcaption>
		    			<h3>Income Tax Filing</h3>
		    			<blockquote>
		    				<p>'Filing returns is a sign that you are responsible.'</p>
		    			</blockquote>
		  			</figcaption>
		  			<a href="#"></a>
				</figure>

		    </div>

		    <div class=" col-xs-6 col-sm-3">
		    	<figure class="snip1579"><img src="Images/wealth.jpg" alt="profile-sample2"/>
					<figcaption>
		    			<h3>Payroll Services</h3>
		    			<blockquote>
		    				<p>We provide our clients with a variety of services related to your business's payroll needs which includes processing employee hours, cutting checks, directly depositing funds, and ensuring that your employees are paid correctly and on time, every time. </p>
		    			</blockquote>
		  			</figcaption>
		  			<a href="#"></a>
				</figure>

		    </div>

		    <div class=" col-xs-6 col-sm-3">
		    	<figure class="snip1579"><img src="Images/investment.jpg" alt="profile-sample2"/>
					<figcaption>
		    			<h3>Professional Tax</h3>
		    			<blockquote>
		    				<p>If you think it's expensive to hire a professional, wait until you hire an amateur.</p>
		    			</blockquote>
		  			</figcaption>
		  			<a href="#"></a>
				</figure>

		    </div>
			<button class="pull-right btn button"><a style="color:white;" href="services.html">Know More</a></button>

		</div>



	</div>

	<div id="our_team">
		<h1 class="services_head">Our Team</h1>
		<div class="container">
		
	  		<div class="row row_center">
	    		<div class="col-xs-6 col-sm-3 team_card">
	      			<div class="our-team">
	        			<div class="picture">
	          				<img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
	        			</div>
	        			<div class="team-content">
	          				<h3 class="name">Michele Miller</h3>
	          				<h4 class="title">Web Developer</h4>
	        			</div>
	        			<ul class="social">
	          				<li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
	        			</ul>
	      			</div>
	    		</div>
	        

	    		<div class="col-xs-6 col-sm-3 team_card">
	      			<div class="our-team">
	        			<div class="picture">
	          				<img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
	        			</div>
	        			<div class="team-content">
	          				<h3 class="name">Michele Miller</h3>
	          				<h4 class="title">Web Developer</h4>
	        			</div>
	        			<ul class="social">
	          				<li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
	        			</ul>
	      			</div>
	    		</div>

	    		<div class="col-xs-6 col-sm-3 team_card">
	      			<div class="our-team">
	        			<div class="picture">
	          				<img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
	        			</div>
	        			<div class="team-content">
	          				<h3 class="name">Michele Miller</h3>
	          				<h4 class="title">Web Developer</h4>
	        			</div>
	        			<ul class="social">
	          				<li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
	        			</ul>
	      			</div>
	    		</div>

	    		<div class="col-xs-6 col-sm-3 team_card">
	      			<div class="our-team">
	        			<div class="picture">
	          				<img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
	        			</div>
	        			<div class="team-content">
	          				<h3 class="name">Michele Miller</h3>
	          				<h4 class="title">Web Developer</h4>
	        			</div>
	        			<ul class="social">
	          				<li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-facebook" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-twitter" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-google-plus" aria-hidden="true"></a></li>
					        <li><a href="https://codepen.io/collection/XdWJOQ/" class="fa fa-linkedin" aria-hidden="true"></a></li>
	        			</ul>
	      			</div>
	    		</div> 
	    	</div>
	  	</div>
	</div>


	<div id="testimonials">
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

      			<h2 class="services_head">What our customers say</h2>
    	<!-- Wrapper for slides -->
    		<div class="carousel-inner" role="listbox">
      			<div class="item active">
        			<h4 class="test_h4">"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      			</div>
      			<div class="item">
        			<h4 class="test_h4">"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      			</div>
      			<div class="item">
        			<h4 class="test_h4">"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      			</div>
    		</div>

    		<!-- Left and right controls -->
    		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      			<span class="sr-only">Previous</span>
    		</a>
    		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      			<span class="sr-only">Next</span>
    		</a>
  		</div>
	</div>


	<div id="contact_us">
		<div class="row row_form">
			<div class="col-xs-12 col-sm-6 form_col">
				<h1>Contact Us</h1>
				<h3>Cause we:</h3>
				<p style="font-size: 2.2rem; font-style: italic;">We are a trusted financial team and we ensure costly mistakes aren't made,such as cashing out tax-favored accounts prematurely or moving money into risky investments.Call us about your taxes before the IRS calls you!</p>			
			</div>
			
			<div class="col-xs-12 col-sm-6 form_col">
				<h3>We will get back to you!</h3>
				<form class="form-horizontal" action="user_process.php" method="post" name="user">
  				
  					<div class="form-group">
    					<label for="inputPassword3" class="col-sm-2 control-label">Name</label>
    					<div class="col-sm-10">
    						<input type="text" class="form-control" name="name" pattern="[a-zA-Z\s\.]*${3,40} required id="inputPassword3" placeholder="Name">
    					</div>
  					</div>

  					<div class="form-group">
    					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    					<div class="col-sm-10">
    						<input type="email" class="form-control" name="email" required id="inputEmail3" placeholder="Email">
    					</div>
  					</div>
  					  					
  					
  					<div class="form-group">
    					<label for="inputPassword3" class="col-sm-2 control-label">Contact</label>
    					<div class="col-sm-10">
    						<input type="mobile" class="form-control" name="contact" pattern="[0-9]{10}" maxlength="10" required placeholder="Phone Number">
    					</div>
  					</div>

  					<div class="form-group">
    					<label for="exampleFormControlTextarea1" class="">Desciption</label>
    					<div>
    						<textarea class="form-control" name="content" required rows="3"></textarea>
    					</div>
  					</div>
  					
  					<div class="form-group">
    					<div class="col-sm-offset-2 col-sm-10">
      						<button type="submit" value="submit" name="submit" class="button">Contact Me</button>
    					</div>
  					</div>
				</form>
			</div>
		</div>
	</div>




	<footer class="footer" id="foot">
  <div class="footer__addr">
    <h1 class="footer__logo">SRH Associates</h1>
        
    <h2>Get In Touch</h2>
	<h5>Ph:080-486 66 080</h5>
	<h5>Mob:9035 28 3525</h5>
    <address>
      sriramhanuman41@gmail.com<br>
          
      <a class="footer__btn" href="mailto:srihanuman41@gmail.com">Email Us</a>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">Quick Links</h2>

      <ul class="nav__ul">
        <li>
          <a href="#home">Home</a>
        </li>

        <li>
          <a href="#about_us">About Us</a>
        </li>
            
        <li>
          <a href="#services">Services</a>
        </li>

        <li>
          <a href="#our_team">Our Team</a>
        </li>

        <li>
          <a href="#testimonials">Testimonials</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">Find Us</h2>
      
      <ul class="nav__ul nav__ul--extra">
        <li>
          <a >4th Cross,Hosa Road</a>
        </li>
        <li>
			<a>Madhura Garments Road</a>
		</li>
        <li>
            <a>C.K Nagar,E.City Post</a>
        </li>
        
        <li>
            <a>Bangalore-100</a>
        </li>
      </ul>
	</li>
	<li class="nav__item nav__item--extra">
<div id="map-container-google-1" class="z-depth-1-half map-container">
	<iframe src="https://maps.google.com/maps?q=APSARA+BEAUTY+PARLOR,+Chennakeshava+Nagar,+Hosa+Road,+Parappana+Agrahara,+Bengaluru,+Karnataka+560068&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
	  style="border:0" allowfullscreen></iframe>
  </div>
  </li>
    <!-- <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Privacy Policy</a>
        </li>
        
        <li>
          <a href="#">Terms of Use</a>
        </li>
        
        <li>
          <a href="#">Sitemap</a>
        </li>
      </ul>
    </li> -->
  </ul>
  
  <div class="legal">
    <!-- <p>&copy; 2019 Something. All rights reserved.</p> -->
    
    <div class="legal__links">
      <span>Made with <span class="heart">&hearts;	</span> by <a style="color: white;" href="http://www.smartdesert.org/">SmartDesert</a></span>
    </div>
  </div>
</footer>

</body>
</html>