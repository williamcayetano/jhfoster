@extends('layouts.layout')

@section('content')
<section id="contact-header"></section>
		<div id="container">
		<section id="contact-container">
			<div id="contact-form">
		    	<h2>Contact JHF</h2>
		    	<form>
			    	<input type="text" name="name" placeholder="Name *" size="55"><br />
			    	<input type="text" name="email" placeholder="Email *" size="55"><br />
			    	<input type="text" name="phone" placeholder="Phone *" size="55"><br />
			    	<textarea placeholder="How can we help you? *" name="help"></textarea><br />
			    	<input type="submit" value="Get Started" class="default-button">
		    	</form>
			</div>
		</section>
		<section id="contact-details">
			<h3>Customer Service</h3>
			<p>Monday - Friday</p>
			<p>7:30am to 5:00 pm (CST)</p>
			<p>Phone: 314-427-0600 or 1-800-444-0522</p>
			<p>Fax: 314-427-3502</p>
			<p>Email: sales@jhf.com</p>
			<br />
			<h3>Accounting</h3>
			<p>Monday - Friday</p>
			<p>8:00am to 4:30 pm (CST)</p>
			<p>Phone: 314-427-0600 or 1-800-444-0522</p>
			<p>Fax: 314-593-1294</p>
			<br />
			<h3>24/7 EMERGENCY SERVICE</h3>
			<p>Phone: 314-427-0600 or 1-800-444-0522</p>
		</section>
        </div>
@endsection