<?php require("includes/header.php"); ?>
  <div id="main-carousel">
		<div id="home-carousel" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="item active">
          <video autoplay loop style="width: 100%;">
            <source src="videos/video1.mp4" />
          </video>
					<div class="carousel-caption">
						<h1 class="animated fadeInUpBig"><strong>watch how we</strong></h1>
						<h2 class="animated zoomIn">TELL YOUR STORIES</h2>
						<h1 class="animated fadeInDownBig"><strong>through visual experiences.</strong><br /><a href="#creative" style="color: #f89628;">click here</a></h1>
					</div>
				</div>
				<div class="item">
          <video autoplay loop style="width: 100%;">
            <source src="videos/video2.mp4" />
          </video>
					<div class="carousel-caption">
						<h1 class="animated fadeInUpBig"><strong>Learn how we</strong><h1/>
						<h2 class="animated zoomIn">TAKE YOUR MESSAGE</h2>
						<h1 class="animated fadeInDownBig"><strong>from concept to delivery.</strong><br /><a href="#creative" style="color: #f89628;">click here</a></h1>
					</div>
				</div>
				<div class="item">
          <video autoplay loop style="width: 100%;">
            <source src="videos/video3.mp4" />
          </video>
					<div class="carousel-caption">
						<h1 class="animated fadeInUpBig"><strong>Visit our</strong></h1>
						<h2 class="animated zoomIn">PORTFOLIO</h2>
						<h1 class="animated fadeInDownBig"><strong>to view our creative projects.</strong><br /><a href="#portfolio" style="color: #f89628;">click here</a></h1>
					</div>
				</div>
			</div>
			<a class="main-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="main-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
		</div>
		<a data-scroll class="smooth-scroll" href="#navigation">
			<div class="mouse-icon">
				<div class="wheel"></div>
				<i class="fa fa-angle-down"></i>
			</div>
		</a>
  </div><!--/#main-carousel-->
  <?php require("includes/nav.php"); ?>
	<section id="about-us" class="padding-top off-white">
		<div class="container text-center">
			<div class="row section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>About Us</h2>
					<p>Resolution Productions Group is a design and production resource that understands how critical it is for brands to form personal and lasting impressions. Our vertical business model results in a streamlined process for a variety of creative services that empowers our clients to achieve higher creative goals.</p>
				</div>
			</div>
			<!--<div class="bout-us-image">
				<img class="img-responsive" src="img/about-us.png" alt="" />
			</div>-->
			<div class="row">
				<div class="col-md-3 col-sm-6 about-content">
					<div class="about-icon" onclick="document.location='#creative'; toggleAccordion('event-design');">
						<i class="fa fa-users"></i>
					</div>
					<div class="about-text">
						<h3>Event Design</h3>
						<p>Imaginative design that inspires your participants</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 about-content">
					<div class="about-icon" onclick="document.location='#creative'; toggleAccordion('video');">
						<i class="fa fa-film"></i>
					</div>
					<div class="about-text">
						<h3>Video</h3>
						<p>Effective storytelling through high caliber production</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 about-content">
					<div class="about-icon" onclick="document.location='#creative'; toggleAccordion('webcast');">
            <i class="fa fa-wifi"></i>
					</div>
					<div class="about-text">
						<h3>Webcast</h3>
						<p>Online Learning at the speed<br />of digital</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 about-content">
					<div class="about-icon" onclick="document.location='#creative'; toggleAccordion('scenic');">
						<i class="fa fa-picture-o"></i>
					</div>
					<div class="about-text">
						<h3>Scenic</h3>
						<p>Building environments that elevate the audience experience</p>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#about us-->
	<div id="testimonial" class="parallax-section">
		<div class="parallax-content">
			<div class="color-overlay"></div>
			<a class="testimony-left" href="#testimonial-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="testimony-right" href="#testimonial-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner text-center">
								<div class="item active">
									<img class="img-responsive img-circle" src="img/logo-alas.png" alt="" />
                  <p>&ldquo;Resolution consistently delivers excellent work, on time and on budget. They’ve got the experience, the resources and the facilities we need to help us get our message out.&rdquo; <span>Bob Denby<br />Senior Vice President – Loss Prevention</span> </p>
								</div>
								<div class="item">
									<img class="img-responsive img-circle" src="img/logo-cars.png" alt="" />
                  <p>&ldquo;From show to video production, Resolution understands our brand and our needs so we’re continuously able to work efficiently and effectively to achieve great results.&rdquo; <span>Maureen Boyle<br />Director, Creative Services &amp; Events</span> </p>
								</div>
								<div class="item">
									<img class="img-responsive img-circle" src="img/logo-slack.png" alt="" />
                  <p>&ldquo;Resolution is always very high in our consideration list whenever we need high-end digital video and event support. They have an excellent track record of quality and dependability with us, our clients and BMA.&rdquo;<span>Gary Slack, Chief Experience Officer, Slack and Company<br />VP of Professional Development, BMA</span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/#testimonial--> 
  <?php /* ?>
	
	<section id="why-us" class="padding-top">
		<div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Why Like Us</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
				</div>				
			</div>
			<div class="row text-center like-us">
				<div class="col-md-3 col-sm-6 about-content">
					<div class="about-icon">
						<i class="fa fa-bitbucket"></i>						
					</div>
					<div class="about-text">
						<h3>Fresh Design</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 about-content">
					<div class="about-icon">
						<i class="fa fa-cloud"></i>							
					</div>
					<div class="about-text">
						<h3>Useful features</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-cog"></i>							
					</div>
					<div class="about-text">
						<h3>Easy Customization</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-coffee"></i>							
					</div>
					<div class="about-text">
						<h3>Preset Style</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-laptop"></i>							
					</div>
					<div class="about-text">
						<h3>Free Updates</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-paper-plane"></i>							
					</div>
					<div class="about-text">
						<h3>Fully Responsive</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-leaf"></i>							
					</div>
					<div class="about-text">
						<h3>Dropdown Menu</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua. </p>
					</div>					
				</div>
				<div class="col-md-3 col-sm-6 about-content">					
					<div class="about-icon">
						<i class="fa fa-group (alias)"></i>							
					</div>
					<div class="about-text">
						<h3>Typhography</h3>
						<p>Lorem ipsum dolor sit amet elit sed do eiusmod tempor incilabore dolore magna aliqua.</p>
					</div>					
				</div>				
			</div>
		</div>
	</section><!--/why-us--> 
	
	<div id="promo-two" class="text-center parallax-section">
		<div class="parallax-content">
			<div class="color-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<i class="fa fa-clock-o"></i>	
						<h3 class="timer" data-to="2700" data-speed="7000" data-from="0">hidden-time</h3>					
						<h4>Hours Of Work</h4>
					</div>
					<div class="col-sm-3">
						<i class="fa fa-heart"></i>	
						<h3 class="timer" data-to="32" data-speed="5000" data-from="0">hidden-time</h3>
						<h4>Clients Worked</h4>
					</div>
					<div class="col-sm-3">
						<i class="fa fa-paper-plane"></i>	
						<h3 class="timer" data-to="178" data-speed="5000" data-from="0">hidden-time</h3>
						<h4>Project Done</h4>
					</div>
					<div class="col-sm-3">
						<i class="fa fa-coffee"></i>	
						<h3 class="timer" data-to="45" data-speed="5000" data-from="0">hidden-time</h3>
						<h4>Cups of Coffee</h4>
					</div>
				</div>			
			</div>
		</div>		
	</div><!--/parallax-section-->		
	*/ ?>
	<section id="creative" class="padding-top padding-bottom">
		<div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Creative</h2>
					<p>Dive into our creative resources. Learn more about our team and capabilities.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="row octopus-tab">
						<div class="col-sm-3">
							<ul class="tab-list" role="tablist">
								<li class="active"><a href="#html5" role="tab" data-toggle="tab" onclick="toggleAccordion('event-design')"><i class="fa fa-users"></i> <div>Event Design</div></a></li>
								<li><a href="#css3" role="tab" data-toggle="tab" onclick="toggleAccordion('video')"><i class="fa fa-film"></i> <div>Video</div></a></li>
								<li><a href="#webcast" role="tab" data-toggle="tab" onclick="toggleAccordion('webcast')"><i class="fa fa-wifi"></i> <div>Webcast</div></a></li>
								<li><a href="#scenic" role="tab" data-toggle="tab" onclick="toggleAccordion('scenic')"><i class="fa fa-picture-o"></i> <div>Scenic</div></a></li>
							</ul>
						</div>
						<div class="col-sm-9">
							<div class="tab-content">
								<div class="tab-pane fade in active off-white" id="html5">
									<h2>Event Design</h2>
									<img class="img-responsive" src="img/creative-event.jpg" alt="accordion" />
									<p>Bring us to the table early and alleviate your communication logistics by working with one vendor. Resolution Productions Group brings 30+ years experience working in the live event industry to help you theme, design and execute your goals.</p>
								</div>
								<div class="tab-pane fade off-white" id="css3">
									<h2>Video</h2>
									<img class="img-responsive" src="img/creative-video.jpg" alt="accordion" />
									<p>Your content deserves the best. Resolution Productions Group is a full-service media production company. Our state-of-the-art facility, creatives and staff of seasoned producers handle all aspects of the production process- from concept to final delivery.</p>
								</div>
								<div class="tab-pane fade off-white" id="webcast">
									<h2>Webcast</h2>
									<img class="img-responsive" src="img/creative-webcast.jpg" alt="accordion" />
									<p>From the desktop to the second screen, Resolution Productions Group combines broadcast best practices and web presentation expertise that keeps your participants from clicking away. Let us develop and execute your digital presentations to reach your remote audience.</p>
								</div>
								<div class="tab-pane fade off-white" id="scenic">
									<h2>Scenic</h2>
									<img class="img-responsive" src="img/creative-scenic.jpg" alt="accordion" />
									<p>To make your set or trade show look great, you need options for display. Resolution Productions Group leverages our massive inventory of LED and on premise manufacturer to design and engineer customized options for our clients.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="panel-group" id="accordion-two">
            <span class="accordion-section active" id="event-design-section">
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#event-design-section" href="#professional"><i class="fa fa-calendar-o"></i> National Meetings</a>
                  </h4>
                </div>
                <div id="professional" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <p>With so many types of meetings in a variety of locations, you need a partner who understands every facet required to pull off an event.  From design to execution, Resolution Productions Group delivers award winning quality- accommodating experiences of any size or scope.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#event-design-section" href="#customization"><i class="fa fa-line-chart"></i> Shareholders Meetings</a>
                  </h4>
                </div>
                <div id="customization" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Make your C-suite look great when presenting to stakeholders and investors. Let Resolution Productions Group’s experience producing quarterly sessions and town halls take your message beyond the boardroom. </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#event-design-section" href="#support"> <i class="fa fa-eye"></i> Experiential</a>
                  </h4>
                </div>
                <div id="support" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>We are the act in activation. Resolution Productions Group will engineer technologies to capture data and build environments that interact with your audience.  Whether it’s a tradeshow, street marketing campaign or festival, Resolution has the technology to drive engagement.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#event-design-section" href="#help-desk1"><i class="fa fa-road"></i> Road Tours</a>
                  </h4>
                </div>
                <div id="help-desk1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Is a multi-city tour leading your brand launch or national campaign?  Our project management skills and fleet of trucks make it possible for us to travel with you across the country and minimize logistics.</p>
                  </div>
                </div>
              </div>
            </span>
            <span class="accordion-section" id="video-section">
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#video-design-section" href="#field-production"> <i class="fa fa-street-view"></i> Field Production</a>
                  </h4>
                </div>
                <div id="field-production" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>From filming interviews on a factory floor to aerial footage in the rainforest, send our experienced crew into the field to capture the highest quality video content.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#video-design-section" href="#editorial"> <i class="fa fa-scissors"></i> Editorial</a>
                  </h4>
                </div>
                <div id="editorial" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Bring your story to life with our team of seasoned editors. <a href="">Watch our editing reel here</a>.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#video-design-section" href="#sound-design"> <i class="fa fa-headphones"></i> Sound Design</a>
                  </h4>
                </div>
                <div id="sound-design" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>We mix and sound design for different types of projects: corporate videos, television & radio, short & feature length films, documentaries, commercials, web content and video games. We do this by providing: sound design, sound mixing & sweetening, dialogue replacement (ADR), music search, noise reduction & audio restoration, voice-casting, voice-over recording (VO), digital patch (ISDN). <a href="">Watch our audio reel here</a>.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#video-design-section" href="#graphics"> <i class="fa fa-paint-brush"></i> Graphics</a>
                  </h4>
                </div>
                <div id="graphics" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Animate your message. Our graphic capabilities range from 2D text animation to 3D projections mapped on buildings. <a href="">Watch our graphics reel here</a>.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#video-design-section" href="#studios"> <i class="fa fa-envelope"></i> Studios</a>
                  </h4>
                </div>
                <div id="studios" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Our facility, with one of the largest shooting stages in Chicago, is a powerhouse of capabilities. We have everything you need within our walls &mdash; multiple stages, dressing rooms and workspaces are a few of our offerings. We serve as a unique place to host an event.</p>
                  </div>
                </div>
              </div>
            </span>
            <span class="accordion-section" id="webcast-section">
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#webcast-design-section" href="#continuing-education"> <i class="fa fa-book"></i> Continuing Education</a>
                  </h4>
                </div>
                <div id="continuing-education" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>From pharmaceutical to association, we understand the value of continuing education. We produce online programs that educate and entertain your audience.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#webcast-design-section" href="#broadcast"> <i class="fa fa-video-camera"></i> Broadcast</a>
                  </h4>
                </div>
                <div id="broadcast" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Are you reporting to a global audience?  Resolution Productions Group will coordinate broadcast trucks, satellite times and manage the network connections.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#webcast-design-section" href="#satellite-media-tour"> <i class="fa fa-signal"></i> Satellite Media Tour</a>
                  </h4>
                </div>
                <div id="satellite-media-tour" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Have your PR message delivered live to television networks. Resolution Productions Group is a best-in-class SMT provider. Take it a step further and let us edit and distribute the message as a VNR.  </p>
                  </div>
                </div>
              </div>
            </span>
            <span class="accordion-section" id="scenic-section">
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#scenic-design-section" href="#led"> <i class="fa fa-th"></i> LED</a>
                  </h4>
                </div>
                <div id="led" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Upgrade your presentation environment with our high resolution LED (light-emitting diode) displays.  Our inventory includes: hi-res 3mm Indoor, bevel/angle capable 4mm indoor, outdoor 5mm, and flexible 9mm indoor/outdoor. Our tiles are calibrated, matching and our inventory is in the thousands.  We build LED walls and structures for a variety of scenic solutions.  <a href="">Watch our LED sizzle reel here</a>.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#scenic-design-section" href="#projection-screens"> <i class="fa fa-square"></i> Projection Screens</a>
                  </h4>
                </div>
                <div id="projection-screens" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>When it comes to custom screen solutions that best fit your staging requirements, Resolution Productions Group owns and operates one of the largest screen manufacturers in North America. Our screens are available for purchase or rental and we offer repair services.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#scenic-design-section" href="#set-fabrication"> <i class="fa fa-wrench"></i> Set Fabrication</a>
                  </h4>
                </div>
                <div id="set-fabrication" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>Don't limit your design to just a traditional surface or screen. Leverage our manufacturing capabilities to build scenic accents for your production. </p>
                  </div>
                </div>
              </div>
            </span>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#creative-->
	<div id="promo-one" class="parallax-section">
		<div class="parallax-content">
			<div class="color-overlay"></div>
			<div class="container text-center">
				<h2>STAY CONNECTED</h2>
        <div class="col-sm-8 col-sm-offset-2">
				<p>We’d love to keep you in the loop on upcoming rooftop parties, open houses and other fun information. We don’t enjoy being spammed and don’t expect you to either.</p>
        </div>
        <form>
				  <div class="col-sm-3">
            <input type="text" class="form-control" placeholder="First Name" />
          </div>
				  <div class="col-sm-3">
            <input type="text" class="form-control" placeholder="Last Name" />
          </div>
				  <div class="col-sm-3">
            <input type="text" class="form-control" placeholder="Email" />
          </div>
          <div class="col-sm-3 ">
            <button type="submit" class="btn btn-submit" style="margin: 0;">Sign Up</button>
          </div>
        </form>
			</div>
		</div>
	</div><!--/parallax-section--> 
	<section id="portfolio" class="padding-top padding-bottom off-white">
		<div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Portfolio</h2>
					<p>We hope you enjoy our work as much as we did while creating it.</p>
				</div>
			</div>
			<div class="portfolio-wrapper">
				<ul class="portfolio-filter text-center">
					<li><a class="active" href="#" data-filter="*">All</a></li>
					<li><a href="#" data-filter=".photography">Live Events</a></li>
					<li><a href="#" data-filter=".video">Video</a></li>
					<li><a href="#" data-filter=".print-design">Scenic</a></li>
				</ul><!--/#portfolio-filter-->
				<div class="row portfolio-items">
					<div class="col-sm-4 col-md-3 portfolio-item print-design video">
						<div class="portfolio-content">
							<img class="img-responsive" src="img/thumb-editorial.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-detail" href="img/about-us.png" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item graphic video">
						<div class="portfolio-content">
							<img class="img-responsive" src="img/thumb-graphic-design.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-detail" href="images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
                <p>test</p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item print-design art">
						<div class="portfolio-content">
							<img class="img-responsive" src="img/thumb-led-sizzle.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-detail" href="images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item video art photography">
						<div class="portfolio-content">
							<img class="img-responsive" src="img/thumb-rpg-sizzle.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-detail" href="images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item video art">
						<div class="portfolio-content">
							<img class="img-responsive" src="img/thumb-screenworks.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-detail" href="images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item photography graphic">
						<div class="portfolio-content">
							<img class="img-responsive" src="img/thumb-sound-design.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-detail" href="images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-3 portfolio-item video art">
						<div class="portfolio-content">
							<img class="img-responsive" src="img/thumb-usg-launch.jpg" alt="">
							<div class="folio-overlay">
								<a class="folio-detail" href="images/portfolio/port-full.jpg" data-gallery="prettyPhoto"><i class="fa fa-plus"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#portfolio-->	
  <?php /*
	
	<div id="testimonial" class="parallax-section">
		<div class="parallax-content">
			<div class="color-overlay"></div>
			<a class="testimony-left" href="#testimonial-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="testimony-right" href="#testimonial-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">						
							<div class="carousel-inner text-center">							
								<div class="item active">							
									<img class="img-responsive img-circle" src="images/testimonial/client1.jpg" alt="" />
									<p>Octopus is a Unique, Creative and Awesome One Page Template. Designer and the Developers did well with this template and i am happy to using it. Thanks to Team Octopus. <span>CEO, Google</span> </p>							
								</div>
								<div class="item">							
									<img class="img-responsive img-circle" src="images/testimonial/client2.jpg" alt="" />
									<p>Octopus is a Unique, Creative and Awesome One Page Template. Designer and the Developers did well with this template and i am happy to using it. Thanks to Team Octopus. <span>CEO, Google</span> </p>							
								</div>
								<div class="item">							
									<img class="img-responsive img-circle" src="images/testimonial/client3.jpg" alt="" />
									<p>Octopus is a Unique, Creative and Awesome One Page Template. Designer and the Developers did well with this template and i am happy to using it. Thanks to Team Octopus. <span>CEO, Google</span> </p>							
								</div>
							</div>
						</div>					
					</div>
				</div>				
			</div>
		</div>
	</div><!--/#testimonial--> 

	<section id="our-team" class="padding-top padding-bottom">
        <div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Our Team</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
				</div>				
			</div>	
            <div class="team-members text-center">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="images/team/member1.jpg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>																
							<div class="member-info">
								<h4>Marsha Burns</h4>
								<p>UI/UX DESIGNER</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-sm-6 col-md-3">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="images/team/member2.jpg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>												
							<div class="member-info">
								<h4>Ronald Cook</h4>
								<p>WEB DEVELOPER</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
                    </div>
                   <div class="col-sm-6 col-md-3">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="images/team/member3.jpg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>													
							<div class="member-info">
								<h4>Darlene D. Lyons</h4>
								<p>MANAGER SUPPORT</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
                    </div>
                    <div class="col-sm-6 col-md-3">
						<div class="member">
							<div class="member-image">
								<img class="img-responsive" src="images/team/member4.jpg" alt="">
								<div class="member-overlay">
									<a href="#"><i class="fa fa-plus"></i></a>	
								</div>
							</div>											
							<div class="member-info">
								<h4>Martin Black</h4>
								<p>Web Developer</p>
							</div>							
							<ul class="member-social">
								<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
                    </div>
                </div>
            </div>            
        </div>
    </section><!--/#Our team-->
	
	
	<div id="twitter" class="text-center parallax-section">
		<div class="parallax-content">
			<div class="color-overlay"></div>
			<a class="twitter-left-control" href="#twitter-slide" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="twitter-right-control" href="#twitter-slide" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="twitter-icon">
							<i class="fa fa-twitter"></i>
						</div>
						<div id="twitter-slide" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<a href="#">Octopus is a Unique, Creative and Awesome One Page Template. Designer and the Developers did well with this template and i am happy to using it. <span>5 hours ago</span></a>
								</div>
								<div class="item">
									<a href="#">Octopus is a Unique, Creative and Awesome One Page Template. Designer and the Developers did well with this template and i am happy to using it. <span>9 hours ago</span></a>
								</div>
								<div class="item">                                
								   <a href="#">Octopus is a Unique, Creative and Awesome One Page Template. Designer and the Developers did well with this template and i am happy to using it. <span>2 hours ago</span></a>
								</div>
							</div>                        
						</div>                    
					</div>
				</div>
			</div>
        </div>
    </div><!--/#twitter-->
	
	<section id="blog" class="padding-top bottom60">
		<div class="container">
			<div class="row text-center section-title">
				<div class="col-sm-8 col-sm-offset-2">
					<h2>Latest Blog</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="blog-content">
						<div class="entry-header">
							<div class="blog-image">
								<img class="img-responsive" src="images/blog/post1.jpg" alt="" />
								<div class="more-link">
									<a href="#"><i class="fa fa-plus"></i></a>
								</div>
							</div>							
							<div class="post-date">
								<h2>21<span>June</span></h2>
							</div>							
						</div>
						<div class="entry-content">							
							<h3 class="entry-title"><a href="#">Adipisicing elit, sed do eiusmod tempor</a></h3>
							<ul class="entry-meta">
								<li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-tags"></i> Photograph <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-comments"></i> 3 Comments</a></li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="blog-content">
						<div class="entry-header">
							<div class="blog-image">
								<img class="img-responsive" src="images/blog/post2.jpg" alt="" />
								<div class="more-link">
									<a href="#"><i class="fa fa-plus"></i></a>
								</div>
							</div>							
							<div class="post-date">
								<h2>21<span>June</span></h2>
							</div>							
						</div>
						<div class="entry-content">							
							<h3 class="entry-title"><a href="#">Adipisicing elit, sed do eiusmod tempor</a></h3>
							<ul class="entry-meta">
								<li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-tags"></i> Photograph <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-comments"></i> 3 Comments</a></li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
					</div>
				</div>	
				<div class="col-sm-6">
					<div class="blog-content">
						<div class="entry-header">
							<div class="blog-image">
								<img class="img-responsive" src="images/blog/post3.jpg" alt="" />
								<div class="more-link">
									<a href="#"><i class="fa fa-plus"></i></a>
								</div>
							</div>							
							<div class="post-date">
								<h2>21<span>June</span></h2>
							</div>							
						</div>
						<div class="entry-content">							
							<h3 class="entry-title"><a href="#">Adipisicing elit, sed do eiusmod tempor</a></h3>
							<ul class="entry-meta">
								<li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-tags"></i> Photograph <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-comments"></i> 3 Comments</a></li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="blog-content">
						<div class="entry-header">
							<div class="blog-image">
								<img class="img-responsive" src="images/blog/post4.jpg" alt="" />
								<div class="more-link">
									<a href="#"><i class="fa fa-plus"></i></a>
								</div>
							</div>							
							<div class="post-date">
								<h2>21<span>June</span></h2>
							</div>							
						</div>
						<div class="entry-content">							
							<h3 class="entry-title"><a href="#">Adipisicing elit, sed do eiusmod tempor</a></h3>
							<ul class="entry-meta">
								<li><a href="#"><i class="fa fa-user"></i> By: Admin <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-tags"></i> Photograph <span>/</span></a></li>
								<li><a href="#"><i class="fa fa-comments"></i> 3 Comments</a></li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#blog-->
		
  <?php */ ?>
	
	<section id="contact-us" class="parallax-section">
		<div class="parallax-content">
			<div class="color-overlay"></div>
			<div class="container">
				<div class="row text-center section-title">
					<div class="col-sm-8 col-sm-offset-2">
						<h2>Contact Us</h2>
						<!--<p>We’d love to keep you in the loop on upcoming rooftop parties, open houses and other fun information. We don’t enjoy being spammed and don’t expect you to either.</p>-->
            <p>We look forward to hearing from you. If you would like to submit an RFP – please do so to the email address provided below.</p>
					</div>
				</div>
				<div class="col-sm-6">
          <?php
          if ($_SERVER['REQUEST_METHOD'] === "POST") {
            echo "<strong>Thank you for contact us.</strong>";
          }
          ?>
					<form id="contact-form" name="contact-form" method="post" action="./">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input type="text" name="name" class="form-control" required="required" placeholder="Name">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<input type="email" name="email" class="form-control" required="required" placeholder="Email">
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="4" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-submit">Send Message</button>
						</div>
					</form>
				</div>
				<div class="col-sm-6">
					<div class="contact-info">
						<ul>
							<li><i class="fa fa-phone"></i> Phone: 312.243.8230</li>
							<li><i class="fa fa-map-marker"></i>  2226 West Walnut Street, Chicago, IL 60612</li>
							<li><i class="fa fa-envelope"></i><a href="mailto:info@resolutionproductionsgroup.com"> info@resolutionproductionsgroup.com</a></li>
						</ul>
						<!--<p>We’d love to have a conversation with you so please reach out.</p>-->
						<div class="social-icons">
							<h3>Get in Touch</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#contact-us-->	
	<div id="gmap"></div><!--/#gmap-->
<?php require("includes/footer.php"); ?>
