<?php
?>
<html>
	<head>
		<title>RehashedLib</title>
		<!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS link -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script>
		function populate()
		{
			var a=document.getElementById("city").value;
			//library names
			if(a==="Tirupati"){
				var arr=["Ocorner","Reading room"];
			}else if(a==="Kurnool"){
				var arr=["sahasra","S V U"];
			}
			var string="";
			for(i=0;i<arr.length;i++){
				string=string+"<option>"+arr[i]+" </option>";
			}
			document.getElementById("lib").innerHTML=string;
		}
		function populate1(){
			var b=document.getElementById("lib").value;
			//author name
			if(b=="1"){
				var ar=['robert galbrith','chetan bhagat'];
			}else if(b=="2"){
				var ar=['carolyn keene','sudha','jk rowling'];
			}else if(b="3"){
				var ar=['rohald dahl','dan brown','enid blyton'];
			}else if(b=="4"){
				var ar=['ba paris','steve alok'];
			}
		    var string="";
			for(i=0;i<ar.length;i++){
				string=string+"<option>"+ar[i]+" </option>";
			}
			document.getElementById("authors").innerHTML=string;
		}
        </script>
	
	</head>
	<body style="background-color:#272727">
		<img class="zind" width=100% src="rzindex.png"/>
		<!--first slot-->
		<div>
			<p id="title" style="font-size:200%;font-weight:bold;display:inline;color:#FFDE91">BOOK OWL</p>
			<form class="first" style="display:inline" action=book.php method="post">
				<select id="city" name="cities" onchange="populate()">
					<option>CITIES</span></option>
					<option value="Tirupati">Tirupati</option><!--added-->
					<option value="Kurnool">Kurnool</option>
					<option value="Ananthapur">Ananthapur</option>
					<option value=""></option>
					<option value=""></option>	
				</select>
				<select name="lib" id="lib" onchange="populate1()">
				<option>LIBRARIES</option>
				</select>
				<select id="authors" name="authors">
					<option>AUTHORS</option>
				</select>
					<input class=get type="submit" value=GET />
			</form>
			<div style="display:inline;float:right">
                        <form class="mor" action=book.php method=post>
			<input placeholder =" Find here :)" id="input-search" type="text" name="ser" />
                        <input type="submit" value="search" id="search" />
                        </form>
			<button onclick="run()" id="login">login</button>
			</div>
		</div>
		<!--text animation-->
		<div>
			<p style="color:#696969;padding-left:35%;font-size:600%"><span class="auto"></span><span style="color:#ffde91">BOOK</span></p>
		</div>

		<!--genre selector-->
		<div id="outer">
                        <div style="width:65%">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 1"></button>
                                        </div>
                                        <form id="slid" action="book.php" method="post">
                                        <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                        <button class="sick" name="boot" value="fantasy" onclick="document.getElementById('slid').submit"><img src="fantasy.png" class="d-block w-100" alt="fantasy"><button>
                                                </div>
                                                <div class="carousel-item">
                                                        <button class="sick" name="boot" value="mystery" onclick="document.getElementById('slid').submit"><img src="mystery.png" class="d-block w-100" alt="mystery"><button>
                                                </div>
                                                <div class="carousel-item">
                                                        <button class="sick" name="boot" value="romance" onclick="document.getElementById('slid').submit"><img src="romance.png" class="d-block w-100" alt="romance"><button>
                                                </div>
                                                <div class="carousel-item">
                                                        <button class="sick" name="boot" value="science" onclick="document.getElementById('slid').submit"><img src="science.png" class="d-block w-100" alt="science"><button>
                                                </div>
                                                <div class="carousel-item">
                                                        <button class="sick" name="boot" value="crime" onclick="document.getElementById('slid').submit"><img src="crime.png" class="d-block w-100" alt="crime"><button>
                                                </div>
                                                <div class="carousel-item">
                                                        <button class="sick" name="boot" value="history" onclick="document.getElementById('slid').submit"><img src="history.png" class="d-block w-100" alt="history"><button>
                                                </div>
                                                <div class="carousel-item">
                                                        <button class="sick" name="boot" value="humor" onclick="document.getElementById('slid').submit"><img src="humor.png" class="d-block w-100" alt="humor"><button>
                                                </div>
                                                <div class="carousel-item">
                                                        <button class="sick" name="boot" value="children" onclick="document.getElementById('slid').submit"><img src="children.png" class="d-block w-100" alt="children"><button>
                                                </div>
                                                <div class="carousel-item">
                                                        <button class="sick" name="boot" value="textbook" onclick="document.getElementById('slid').submit"><img src="textbook.png" class="d-block w-100" alt="textbook"><button>
                                                </div>
                                        </div>
                                        </form>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                        </button>
                                </div>
                        </div>
                </div>

		<!--buy,pick,sell-->
                <form action="book.php" method="post">
		<div style="display:flex;justify-content:center">
			<div style="padding:30px 35px 155px 35px" class="inner-block">
				<h1 class="inner-block-head">BUY</h1>
				<p class="inner-block-p">buy used books<br/> from different sellers</p>
                                <button type="submit" value="buy" name="up" style="margin-top:45px" class="mbtn">BUY</button>
			</div>
			<div style="margin-left:1%;padding:25px 40px 120px 40px" class="inner-block">
				<h1 class="inner-block-head">PICK AND<br/> RENT</h1>
				<p class="inner-block-p">select books from <br/>different libraries</p>
                                <button type="submit" value="all" name="up" class="mbtn">RENT</button>
			</div>
			<div style="margin-left:1%;padding:25px 40px 150px 40px" class="inner-block">
				<h1 class="inner-block-head">SELL</h1>
				<br/>
				<p class="inner-block-p">sell you books here</p>
                                <button type="submit" value="sell" name="up" style="margin-top:65px" class="mbtn">SELL</button>
			</div>
		</div>
                </form>
		<!--bubbles-->
		<div class="bubble">
			<div class="bubbleu">
			<img class="bimg" src="jkrowling.png"/>
			<img class="bimg" src="stephenking.png"/>
			</div>
			<div class="bubbled">
			<img style="" class="bimg" src="die.png"/>
			<img class="bimg" src="thomas.png"/>
			</div>
		</div>
		<div class="cover">
			<div class="bubblea1">
			<img src="bubble.png"/>
			<img src="bubble.png"/>
			</div>
			<div class="bubblea2">
			<img src="bubble.png"/>
			<img src="bubble.png"/>
			</div>
		</div>
		<div class="cover1">
			<div class="bubbleb1">
			<img src="bubble.png"/>
			<img src="bubble.png"/>
			</div>
			<div class="bubbleb2">
			<img src="bubble.png"/>
			<img src="bubble.png"/>
			</div>
		</div>
                <p class=ttitle>TOP PICKS<p>
		<div class=touter>
			<div class=thold>
				<img class=timg src=harry.jpg>
				<img class=timg src=lostsymbol.jpg>
				<img class=timg src=gonegirl.jpg>
				<img class=timg src=sharpobjects.jpg>
			</div>
			<div class=thold>
			</div>
		</div>
		<p class=ttitle>TOP RATED<p>
		<div class=touter>
			<div class=thold>
				<img class=timg src=oneofus.jpg>
				<img class=timg src=eleven.jpg>
				<img class=timg src=murderon.jpg>
				<img class=timg src=digital.jpg>
			</div>
			<div class=thold>
			</div>
		</div>

		<!--css-->
		<style>
/*top css*/
.ttitle{
	font-size:500%;
	color:white;
	text-align:center;
	margin-top:50px;
}
.timg{
	height:40vh;
	margin:2%;
	filter: grayscale(1);
}
.timg:hover{
	filter: grayscale(0);
	box-shadow:0 0 6px 2px gold;
}
.thold{
	display:flex;
	align-items:center;
	justify-content:center;
}
/* first segment css*/
.mor{
	display:inline;
}
.zind{
	top:0px;
	left:0px;
	position:absolute;
	z-index:-2;
}
select,.get{
	color:white;
	background:transparent;
	border-radius:20px;
	border-color:#8A2BE2;
	padding:8px;
	margin-left:10px;
	margin-top:40px;
	letter-spacing:2px;
}
.get{
        background:gold;
	color:black;
}
select:hover,.get:hover{
	background-color:gold;
	color:black;
	border:2px solid black;
	padding:10px;
	transition:0.4s;

}
#input-search{
	background-color:#E6E6FA;
	border-radius:20px;
	padding:5px;
	border:black;
	width:40%;
}
#search{
	font-size:120%;
	background-color:gold;
	color:black;
	letter-spacing:3px;
	margin:45px 8px;
	border:2px solid black;
	border-radius:10px;
	padding:4px 10px;
}
#search:hover{
	text-shadow:4px 4px #FFE4B5;
	padding:5px 11px;
	transition:0.2s;
}
#login:hover{
	text-shadow:2px 2px #FFE4B5;
	padding:5px 11px;
	transition:0.2s;
}
#login{
	font-size:120%;
	background-color:transparent;
	border:none;
	color:white;
	letter-spacing:3px;
	padding:45px 10px;
}
/*bubbles*/
.bubble,.cover,.cover1{
	position:fixed;
	bottom:-60vh;
}
.bubbleu,.bubbled,.bubblea1,.bubblea2,.bubbleb1,.bubbleb2{
	display:flex;
	justify-content:space-between;
}
.bimg{
	display:block;
	width:15%;
	animation:bob 40s infinite;
}
.bubbleu img:nth-child(1){
}
.bubbleu img:nth-child(2){
	animation-delay:5s;
}
.bubbled img:nth-child(1){
	animation-delay:10s;
	margin-left:5%;
}
.bubbled img:nth-child(2){
	animation-delay:20s;
	margin-right:3%;
}
/*carry css*/
.cover img{
	width:10%;
	animation:bob 40s infinite;
}
.cover1 img{
	width:5%;
	animation:bob 40s infinite;
}
.bubblea1 img:nth-child(1){
	animation-delay:2s;
}
.bubblea1 img:nth-child(2){
	animation-delay:7s;
}
.bubblea2 img:nth-child(1){
	animation-delay:14s;
}
.bubblea2 img:nth-child(2){
	animation-delay:10s;
}
.bubbleb1 img:nth-child(1){
	animation-delay:3s;
	margin-left:5%;
}
.bubbleb1 img:nth-child(2){
	animation-delay:6s;
	margin-left:5%;
}
.bubbleb2 img:nth-child(1){
	animation-delay:5s;
	margin-right:3%;
}
.bubbleb2 img:nth-child(2){
	animation-delay:12s;
	margin-right:3%;
}
@keyframes bob{
	0%{
		transform:translateY(0);
		opacity:0;
	}
	25%{
		opacity:1;
	}
	50%{
		opacity:1;
	}
	75%{
		opacity:1;
	}
	100%{
		transform:translateY(-120vh);
		opacity:0;
	}
}
/*genre selector*/
#outer{
	display:flex;
	justify-content:center;
	margin:40px;
}
.sick{
        border:none;
        background:none;
        padding:0;
}
/*third segment css*/
.inner-block{
	text-align:center;
	display:inline;
	float:left;
	background-color:gold;
	box-shadow:0px 0px 2px 2px #FFDE91;
}
.inner-block:hover{
	transform:scale(1.03);
	box-shadow:0px 0px 3px 5px #FFDE91;
}
.inner-block-head{
	font-family:'Times New Roman',serif;
}
.inner-block-p{
	font-size:170%;
	font-family:cursive;
}
.mbtn{
       border-radius:10px; 
       padding:2px 5px;
       background:transparent;
       border:1px dotted black;
}
.mbtn:hover{
       border-radius:10px; 
       padding:2px 5px;
       background:transparent;
       border:1px solid black;
}
		</style>

		<!--js links-->
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
		
		<!--Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<!--js-->
		<script>
			var typed = new Typed(".auto",{
			strings: ["RENT A","BUY A","SELL A"],
				typeSpeed:100,
				backSpeed:50,
				loop:true
			})
		</script>
                <script>
function run(){
	location.href='log.html';
}
if(k==1){
	document.getElementById("login").innerHTML="logout";
}
                </script>
	</body>
</html>

