@extends('layouts.layout')

@section('content')
<section id="slider">
			<div id="slider-container">
				<h2>We're Open and We're Here for You!</h2>
		    	<h3>YOUR SOURCE FOR FLUID POWER AND AUTOMATION</h3>
		    	<h4>You can also <a href="{{ route('products') }}"><span class="underline">browse our online catalog</span></a> or <a href="{{ route('products') }}"><span class="underline">view product categories</span></a></h4>
		    	<a href="{{ route('products') }}"><button class="default-button">shop our online store</button></a> 
		    	<h4>John Henry Foster's Covid-19 Response Statement</h4>
			</div>
		</section>
		<aside id="about">
				<h2 class="default-headline">AT JOHN HENRY FOSTER</h2>
				<p class="default-paragraph">We help you maximize your bottom line. Since 1944, we have been helping our customers minimize production interruptions and maximize efficiency with the same care and expertise as if it were our own business.</p><br />
				<p class="default-paragraph">Producing high-quality products and services is challenging and we know how hard it can be to find someone who wants your business to succeed as much as you do. Go from wasted time, money and effort dealing with the other guys, to consistently maximizing production and minimizing costs with top-notch products and services. With John Henry Foster, you gain peace of mind with a lifelong, trusted partner.</p>
				<p class="default-paragraph"><a href="{{ route('story') }}">Read More</a></p>
		</aside>
		<section>
			<div class="feature-divider">
	    		<div class="image-1 default-image"></div>
	   	 		<div class="right-text-description">
		    		<h2 class="default-headline">OUR PRODUCTS</h2>
		    		<p class="default-paragraph">Quickly getting the best off-the-shelf parts for repairs and maintenance, or custom-fabricated products for your unique applications should always be a phone call away.</p>
		    		<a href="{{ route('products') }}"><button class="default-button">View Product Categories</button></a>
		    	</div>
	   		</div>
		</section>
		<section>
			<div class="feature-divider">
	    		<div class="image-2 default-image"></div>
	    		<div class="left-text-description">
		    		<h2 class="default-headline">OUR SERVICES</h2>
		    		<p class="default-paragraph">To more easily run your business, service needs to go beyond just a phone call for repairs or maintenance.  Your goals and metrics are an ever-moving target, so we know that you need a total system to support your inventory, efficiency, value-added and customized needs.<p>
		    		<a href="{{ route('services') }}"><button class="default-button">View Services</button></a>
	    		</div>
			</div>
		</section>
		<section>
			<div class="feature-divider">
				<div class="image-3 default-image"></div>
				<div class="right-text-description">
		    		<h2 class="default-headline">TRAINING & RESOURCES</h2>
		    		<p class="default-paragraph">Having information at your fingertips is a necessity in today's fast-paced world. Having accurate information is even more important. Here, you get both.</p>
	        		<a href="{{ route('training') }}"><button class="default-button">View All</button></a>
	    		</div>
			</div>
		</section>
		<aside>
			<div id="timeline">
				<h2>Your Partner In Performance Since 1944</h2>
			</div>
		</aside>
		<section>
			<div id="timeline-expansion">
				<div class="image-4"></div>
				<div class="right-timeline-description">
		    		<h2 class="default-headline">THE JOURNEY OF JOHN HENRY FOSTER</h2>
		    		<p class="default-paragraph">"John Henry Foster, born in Rhode Island, was a "pull-yourself-up-by-the-bootstraps" kind of entrepreneur. He was a born salesman and an even better friend to all who knew him. With an abundance of charisma, charm and business intuition, he took his vision of becoming a businessman and turned it into a successful, long-standing industrial distributorship, now employing over 170 employees and going into its 75th year. John Henry passed away in 1986 but his memory lives on in all the lives touched by his graciousness, ambition and his vision."</p>
		    		<a href="{{ route('story') }}"><button class="default-button">View All</button></a>
	    		</div>
			</div>
		</section>
		<section>
			<div id="home-form">
	    	<div id="form-container">
		    	<h2>We build custom <span class="partnership-crossout">parts.</span></h2>
		    	<p>Tell us about your unique needs below.</p>
		    	<form>
			    	<input type="text" name="name" placeholder="Name *" size="55"><br />
			    	<input type="text" name="email" placeholder="Email *" size="55"><br />
			    	<input type="text" name="phone" placeholder="Phone *" size="55"><br />
			    	<textarea placeholder="How can we help you? *" name="help"></textarea><br />
			    	<input type="submit" value="Get Started" class="default-button">
		    	</form>
		    	<div id="home-form-contact">
		        	<div id="home-form-phone">
		            	<h4>Toll-Free</h4>
		            	<a href="tel:1-800-444-0522"><h3>1.800.444.0522</h3></a>
		        	</div>
		        	<div id="home-form-other">
		            	<h4>Other Options</h4>
		            	<h3>CONTACT CENTER</h3>
		        	</div>
		    	</div>
			</div>
			</div>
		</section>
		<section>
			<div id="divider">
				<div id="certification-seal"></div>
				<div id="certified">
					<h2 class="default-headline">We Are ISO Certified</h2>
					<p class="default-paragraph">Striving for excellence in meeting your requirements, John Henry Foster completed the International Organization for standardization- ISO 9001: 2015 certification. This certification provides a host of benefits both internally and to our deserving customers.</p>
					<a href="{{ route('products') }}"><button class="default-button">Learn More</button></a>
				</div>
				<div id="clients">
					<h2>WHAT OUR CLIENTS SAY</h2>
					<p class="default-paragraph">For one thing, John Henry Foster is very easy to work with. Their salesmen are very knowledgeable and very easy to work with. They're a very reputable company; we deal with them already and it was just very smooth. They pretty much ran the program: they put everything together. They...</p>
					<p>John Eldridge</p>
				</div>
			</div>
		</section>
		<section>
			<div id="partners">
				<h2>Industry Trusted Partners</h2>
				<div id="partner-images">
				    <div id="partner-1"></div>
				    <div id="partner-2"></div>
				    <div id="partner-3"></div>
				    <div id="partner-4"></div>
				</div>
			</div>
		</section>
@endsection