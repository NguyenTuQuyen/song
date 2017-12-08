<style>
#wraper{
	margin: 0px auto;
}
#header{
	height: 60px;
	width: 100%;
	background: grey;
	color:white;

}
#content{
	height: 500px;
	width: 100%;
	float: left;
	background: black;
	color:white;
}
#footer{
	height: 60px;
	width: 100%;
	float: left;
	background: green;
	color:white;
}
</style>


<body>
<div id="wrapper">
	<div id="header">
	@section('menu')
	Menu 1 Intro
	@show
	 </div>
	<div id="content">Content
		@yield('noidung') 
	</div>
	<div id="footer">Footer </div>


</div>
</body>
