@extends('layouts.master')

@section('content')
	

	<div class="container-fluid">
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active ">
					{!! Html::image('img/scneider.jpg','image',array('class'=>'d-block img-fluid'))!!}
				</div>
				<div class="carousel-item">
					{!! Html::image('img/4.png','image',array('class'=>'d-block img-fluid'))!!}
				</div>
				<div class="carousel-item">
					{!! Html::image('img/5.png','image',array('class'=>'d-block img-fluid'))!!}
				</div>
			</div>
		</div>
	</div>

	<!-- About us -->
	<div id="aboutUs" class="company_intro slideanim">
		<div class="container">
			<h1 class="text-center text-uppercase company_name">T&amp;A Electrical &amp; Hardware</h1>
			<h3 class="text-center">Our products are including categories of <strong>Electrical, Lighting, Hardware etc.</strong></h3>
			<div class="row">
				<div class="col-sm-6 offset-sm-2">
					<h3><strong>Vision:</strong></h3><h4>To be the largest Electrical &amp; Hardware supplier in Malaysia</h4> 
					<h3><strong>Mission:</strong></h3><h4>To provide the best sales service and products quality with competitive price</h4>
				</div>
			</div>
			<!--Modal button-->
			<button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">See More</button>

			<!--Modal-->
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h2 class="modal-title">T&amp;A Electrical &amp; Hardware</h2>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<p>T&amp;A Electrical &amp; Hardware Enterprise is an electrical/hardware distributor based at Seremban, Malaysia. The company was established in year 2012. We offer more than 1,000 quality products ranging from cables, lighting, switches, fans &amp; other electrical acessories or whatever products relevant in electrical industry. <br><br>
								T&amp;A Electrical &amp; Hardware Enterprise is well committed to the market demand &amp; always looking to improve the quality of our customer service.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Products -->
		<div id="products" class="container">
			<h2>Products</h2>
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						{!! Html::image('img/electrical.png','image',array('class'=>'card-img-top')) !!}
						<div class="card-block">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						{!! Html::image('img/lighting.png','image',array('class'=>'card-img-top')) !!}
						<div class="card-block">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						{!! Html::image('img/hardware.png','image',array('class'=>'card-img-top')) !!}
						<div class="card-block">
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
			</div>
			<a class="btn btn-default btn-lg" href="{{url('/products')}}" role="button">View More Products</a>
		</div>

		<!-- Partners -->
		<div id="partners" class="container">
			<h1 class="text-center text-uppercase">Partners</h1>
			<div class="row">
				<div class="col-sm-3">
					{!! Html::image('img/ABB Logo.jpg','ABB',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/FONEMAX Logo.jpg','FONEMAX',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/HAGER Logo.png','HAGER',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/KDK Logo.png','KDK',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/LEGRAND Logo.jpg','LEGRAND',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/Maxguard Logo.jpg','Maxguard',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/Megapower Logo.png','Megapower',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/MK Logo.png','MK',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/PANASONIC  Logo.png','PANASONIC',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/PHILIPS Logo.jpg','PHILIPS',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/PVC LINK Logo.jpg','PVC LINK',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/SCHNEIDER Logo.png','SCHNEIDER',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/tonn Logo.jpg','tonn',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/UNI-T Logo.jpg','UNI-T',array('class'=>'partner'))!!}
				</div>
				<div class="col-sm-3">
					{!! Html::image('img/WIREMAN Logo.png','WIREMAN',array('class'=>'partner'))!!}
				</div>
			</div>
		</div>

		<!-- Contact Us -->
		<div id="contactUs" class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="address_icon text-center">
							<span><i class="fa fa-home fa-3x" aria-hidden="true"></i></span>
						</div>
						<div class="address">
							<span> 71, Jalan S2 F1,<br> Garden Homes Seremban 2,<br> 70300 Seremban,<br> Negeri Sembilan, Malaysia </span>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact_icon">
							<span><i class="fa fa-phone fa-3x" aria-hidden="true"></i></span>
						</div>
						<div class="contact">
							<span> 06 - 603 0945 (Tel)<br>
                          06 - 631 4086 (Fax)<br>
                          012 - 683 2733 ( WONG ) <br>
                          016 - 727 3888 ( SUNNY LEE)</span>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="email_icon">
							<span><i class="fa fa-envelope fa-3x" aria-hidden="true"></i></span>
						</div>
						<div class="email">
							<span> <a href="mailto:ta_enterprise23@yahoo.com"> ta_enterprise23@yahoo.com</a> </span>
						</div>
					</div>
				</div>
				<h2 class="text-center">Drop us an email!<h2>

				<form action="javascript:sendContact()">
					{!! Form::token()!!}
					<div class="form-group"> 
						{!! Form::text('name',null, array('class'=>'form-control','placeholder'=>'Your Name'))!!}
					</div>
					<div class="form-group">
						{!! Form::email('email',null, array('class'=>'form-control','placeholder'=>'Your Email')) !!}
					</div>
					<div class="form-group">
						{!! Form::text('subject',null, array('class'=>'form-control','placeholder'=>'Subject')) !!}
					</div>
					<div class="form-group">
						{!! Form::textarea('message',null, array('class'=>'form-control','placeholder'=>'Message')) !!}
					</div>
						{!! Form::submit('Send Email',array('class'=>'btn btn-default'))!!}
				</form>
			</div>
		</div>
		
@endsection
		