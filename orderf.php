<html>
	<body>
<?php
$dbhost="localhost";
$dbuname="root";
$dbpass="";
$dbname="bookowl";

$conn=mysqli_connect($dbhost,$dbuname,$dbpass,$dbname);

if(!$conn){
	die("not connected");
}
$a=$_POST["carry"];
$qu="select * from pick where title = '$a'";
$res=mysqli_query($conn,$qu);
if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res)){
echo "
		<div class=outer>
			<div class=one>
				<img width=44% src=$row[image] />
			</div>
			<div align=center class=two>
				<p id=title>$row[title]</p>
				<p id=author>$row[author]</p>
				<p id=rating>rating $row[rating]</p>
				<p class=tam><span class=u>$$row[rent]</span> per week</p>
				<p id=lib>From $row[library]</p>
				<div>
					<button onclick=sub() class=ni>-</button>
					<button id=cre class=in>$row[rent]</button>
					<button onclick=add() class=ni>+</button>
				</div>
				<button id=buy class=btn onclick=track()>RENT</button>
			</div>
		</div>";


	}
}




?>
<script>
var a=document.getElementById("cre").innerHTML;
function add(){
	let k=document.getElementById("cre").innerHTML;
	let z=Number(k)+Number(a);
	if(z<=a*10){
		document.getElementById("cre").innerHTML=z;
	}
}
function sub(){
	let k=document.getElementById("cre").innerHTML;
	let z=Number(k)-Number(a);
	if(z>0){
		document.getElementById("cre").innerHTML=z;
	}
}
function track(){
	location.href="orderpage.php";
}
</script>
		<style>
.in{
	font-size:135%;
	border-radius:5px;
	border:1px solid gold;
	padding:1px 10px;
	color:white;
}
.ni{
	font-size:135%;
	border:1px solid gold;
	padding:1px 7px;
	border-radius:20px;
	color:silver;
}
.in,.ni{
	background:transparent;
}
.outer{
	margin-top:10%;
	display:flex;
}
.one{
        width:50%;
	display:flex;
	justify-content:right;
}
.two{
	padding:5%;
}
		</style>
		<style>
.zind{
position:fixed;
width:100%;
z-index:-1;
}
#lib{
        color:white;
}
#title{
	text-transform:uppercase;
	color:white;
	text-shadow:1px 1px 1px white;
	font-size:130%;
	font-weight:bold;
	letter-spacing:0.3px;
}
#author{
	font-size:120%;
	color:white;
	letter-spacing:0.3px;
}
#rating{
	color:lightgrey;
	text-transform:uppercase;
}
.btn{
	font-size:120%;
	background-color:gold;
	color:black;
	letter-spacing:3px;
	border:2px solid orange;
	border-radius:7px;
	padding:4px 10px;
	margin-top:40px;
}
.u{
	color:tomato;
	font-size:150%;
}
.tam{
	color:dimgrey;
}
body{
	background-color:#272727;
}
		</style>
	</body>
</html>
