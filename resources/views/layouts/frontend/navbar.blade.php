
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li class="{{ Request::segment(1) === 'branda' ? 'active' : '' }}">
						<a href="{{url('branda')}}">
							Branda
						</a>
					</li>
					<li class="{{ Request::segment(1) === 'profil' ? 'active' : '' }}">
						<a href="{{url('profil')}}">
							Profil
						</a>
					</li>
					<li class="{{ Request::segment(1) === 'ekstrakulikuler' ? 'active' : '' }}">
						<a href="{{url('ekstrakulikuler')}}">
							Ekstrakulikuler
						</a>
					</li>
					<li class="{{ Request::segment(1) === 'galery' ? 'active' : '' }}">
						<a href="{{url('galery')}}">
							Galery
						</a>
					</li>
					<!-- <li><a href="portfolio.html">Portfolio</a></li> -->
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
							<li><a href="#">Dummy Link1</a></li>
							<li><a href="#">Dummy Link2</a></li>
							<li><a href="#">Dummy Link3</a></li>
						</ul>
					</li> -->
					<li class="{{ Request::segment(1) === 'kontak' ? 'active' : '' }}">
						<a href="{{url('kontak')}}">
							Kontak
						</a>
					</li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
	@if(Request::segment(1) == 'branda')
		<!-- Header -->
	<header id="head"  style="background: #181015 url({{url('/assets/images/Siswa-SD.jpg')}}) no-repeat;
    background-size: cover;">
		<div class="container">
			<div class="banner-content">
				<div id="da-slider" class="da-slider">
					<div class="da-slide">
						<h2>Educational Website</h2>
						<p>Amazing free responsive website for free, enjoy!!!</p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide">
						<h2>Online Education</h2>
						<p>Bootstrap is a powerful mobile first front-end framework..</p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide">
						<h2>Super Success</h2>
						<p>HTML5 is a markup language used for structuring and presenting Web.</p>
						<div class="da-img"></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /Header -->
	@else
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>{{ucwords(Request::segment(1))}}</h1>
				</div>
			</div>
		</div>
	</header>
	@endif