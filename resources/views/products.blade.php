@extends('layouts.layout')

@section('content')
		<section id="products-header"></section>
		<aside id="about">
				<h2 class="default-headline">GREAT PRODUCTS BUILD GREAT BUSINESSES</h2>
				<p class="default-paragraph">Since 1944, we have been helping our customers minimize production interruptions and maximize efficiency with the same care and expertise as if it were our own business.</p><br />
				<p class="default-paragraph">Producing high-quality products and services is challenging and we know how hard it can be to find someone who wants your business to succeed as much as you do. With industry-respected brands, $8 million of ready-to-ship components and assemblies and 24/7 support, we have the products to keep your business moving forward.</p>
		</aside>
		<section id="cards">
			<ul>
				<li>
					<div class="card-photo"><img src="images/hydraulic-header-category.jpg" /></div>
					<h3 class="card-title">Hydraulics</h3>
				</li>
				<li>
					<div class="card-photo"><img src="images/pneumatic-header-photo.jpg" /></div>
					<h3 class="card-title">Pneumatic</h3>
				</li>
				<li>
					<div class="card-photo"><img src="images/RS250-AC-HEROSHOT.jpg" /></div>
					<h3 class="card-title">Compressed Air</h3>
				</li>
			</ul>
			<ul>
				<li>
					<div class="card-photo"><img src="images/automation-header-image.png" /></div>
					<h3 class="card-title">Automation</h3>
				</li>
				<li>
					<div class="card-photo"><img src="images/industrial-hydraulic-hose-header.jpg" /></div>
					<h3 class="card-title">Hydraulic Hose</h3>
				</li>
				<li>
					<div class="card-photo"><img src="images/Products-Tools-partners-002.png" /></div>
					<h3 class="card-title">Industrial Tools</h3>
				</li>
			</ul>
			<ul>
				<li>
					<div class="card-photo"><img src="images/material-handling.jpg" /></div>
					<h3 class="card-title">Aluminum Framing</h3>
				</li>
				<li>
					<div class="card-photo"><img src="images/Linear-Motion-Product-Image.jpeg" /></div>
					<h3 class="card-title">Linear Motion</h3>
				</li>
				<li>
					<div class="card-photo"><img src="images/Free-standing-guard.jpg" /></div>
					<h3 class="card-title">Modular Guards</h3>
				</li>
			</ul>
		</section>
		<section id="contact-section">
			<ul>
				<li>
					<div class="card-photo"><img src="images/Dashboard-e1588110756192.png" /></div>
					<h3 class="card-title">Remote Monitoring</h3>
				</li>
			</ul>
			<div id="contact-link">
				<i class=""></i>
				<h2>GET IN TOUCH</h2>
				<p>John Henry Foster can provide all your pneumatic system needs - from cylinders, valves and filters to fittings and hose.</p>
				<p class="default-paragraph"><a href="{{ route('contact') }}">Contact Us</a></p>
			</div>
        </section>
@endsection