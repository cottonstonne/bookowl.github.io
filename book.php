<html>
<body>
<img class=zind width=100% src="lpicker.png"/>
<?php
error_reporting(0);
$dbhost="localhost";
$dbuname="root";
$dbpass="";
$dbname="bookowl";

$conn=mysqli_connect($dbhost,$dbuname,$dbpass,$dbname);
if(!$conn){
	die("connection failed");
}
$c=$_POST["boot"];
$a=$_POST["authors"];
$b=$_POST["ser"];
$d=$_POST["up"];
echo $d;
if(isset($a)){
	$qu="select * from pick where author = '$a'"; //change query here!!!
}
elseif(isset($b)){
	$qu="select * from pick where author like '$b' or genre like '$b' or title like '$b' or language like '$b' or library like '$b'"; //change query here!!!
}
elseif(isset($c)){
	$qu="select * from pick where genre = '$c'"; //change query here!!!
}
elseif(isset($d)){
	if($d=="sell"){
		header('location:seller.html');
	}
	if($d=="all"){
		$qu="select * from pick"; //change query here!!!
	}
	else{
		$qu="select * from usedbooks"; //change query here!!!
	}
}
$res=mysqli_query($conn,$qu);
if(mysqli_num_rows($res)>0){
	while($row=mysqli_fetch_array($res)){
		echo "<form action=orderf.php method=post>
                        <div class=outer>
			<div class=one>
			<img src=$row[image] />
			</div>
			<div align=center class=two>
			<p id=title>$row[title]</p>
			<p id=author>by $row[author]</p>
			<p id=rating>rating $row[rating]</p>
			<p class=tam><span class=u>$$row[rent]</span> per week</p>
                        <p id=lib>From $row[library]</p>
			<button type='submit' name='carry' value='$row[title]' id=buy class=btn>PICK</button>
			</div>
			</div>
                        </form>";

	}
}
else{
	echo "<p id=result>Oops!!!<br/>NO RESULTS FOUND<p>";
}
?>

<style>
.rebtn{
       padding:0;
       background:none;
       border:none;
}
#result{
       font-size:300%; 
       position:absolute;
       top:40%;
       left:55%;
       text-align:center;
       transform:translate(-50%,-50%);
       color:silver;
}
.zind{
position:fixed;
width:100%;
z-index:-1;
opacity:50%;
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
.outer{
	display:flex;
	margin:30px;
}
.one{
        width:50%;
	display:flex;
	justify-content:right;
}
.two{
        width:20%;
	padding:10px;
}
.btn{
	font-size:120%;
	background-color:gold;
	color:black;
	letter-spacing:3px;
	border:2px solid orange;
	border-radius:7px;
	padding:4px 10px;
	margin:5px;
}
.u{
	color:tomato;
	font-size:150%;
}
.tam{
	color:dimgrey;
}
img{
	width:25%;
}
body{
	background-color:#272727;
}
		</style>

</body>
</html>
