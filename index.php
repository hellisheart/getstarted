<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style> 
table, th, td
{
	margin-top:30px;
	margin-left:auto;
	margin-right:auto;
	border-style:solid;
	border-width:3px;
	color:white;
	background-color:blue;
	border-color:white;
	
}

.kol {
	
    width: 200px;	}
body
{
	
	padding-top:50px;
}

.txt {
	font-family:Serif;
	font-size:12px;
	font-style:italic;
	color:blue;

}

.bt {
	color: red;
	font-style:bold;
}

a.button17 {
  display: inline-block;
  width: 15em;
  font-size: 80%;
  color: rgba(255,255,255,.9);
  text-shadow: #2e7ebd 0 1px 2px;
  text-decoration: none;
  text-align: center;
  line-height: 1.1;
  white-space: pre-line;
  padding: .7em 0;
  border: 1px solid;
  border-color: #60a3d8 #2970a9 #2970a9 #60a3d8;
  border-radius: 6px;
  outline: none;
  background: #60a3d8 linear-gradient(#89bbe2, #60a3d8 50%, #378bce);
  box-shadow: inset rgba(255,255,255,.5) 1px 1px;
}
a.button17:first-line{
  font-size: 170%;
  font-weight: 700;
}
a.button17:hover {
  color: rgb(255,255,255);
  background-image: linear-gradient(#9dc7e7, #74afdd 50%, #378bce);
}
a.button17:active {
  color: rgb(255,255,255);
  border-color: #2970a9;
  background-image: linear-gradient(#5796c8, #6aa2ce);
  box-shadow: none;
}

 </style> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Spolka gieldowa</title>
</head>

<body bgcolor="lightblue">
<p align="center">
<font color="red" size="8">
<b><i>Spolka gieldowa</i></b>
</font>
</p>
<p align="right" class="txt">
Wykonal Yevhenii Buhai <br>
Projekt z przedmiotu <b>Midelowanie danych</b>
</p>
<hr size="5" color="red">

<table border="5" align="center" cellspacing="3" frame="border" rules="all"> 
 <tr> 
 <th align="center" colspan="3"><h1>New York Stock Exchange (NYSE) </h1></th>  
 <td class="kol" align="center" ><input name="1A" type="button"  class="bt" onclick="parent.location='gieldy/strona1a.php'" value="Litera A link" /><br>
 
 <td align="center" class="kol"><input name="1B" type="button" class="bt" onclick="parent.location='gieldy/strona1b.php'" value="Litera B link" /><br>
 
 <td align="center" class="kol"><input name="1C" type="button" class="bt" onclick="parent.location='gieldy/strona1c.php'" value="Litera C link" /><br>
 
 <tr> 
 <th colspan="3" align="center"><h1>NASDAQ Stock Exchange </h1>
 <td align="center" class="kol"><input name="2A" type="button" class="bt" onclick="parent.location='gieldy/strona2a.php'" value="Litera A link" /><br>
 
 <td align="center" class="kol"><input name="2B" type="button" class="bt" onclick="parent.location='gieldy/strona2b.php'" value="Litera B link" /><br>

 <td align="center" class="kol"><input name="2C" type="button" class="bt" onclick="parent.location='gieldy/strona2c.php'" value="Litera C link" /><br>
 
 <tr> 
 <th align="center" colspan="3"><h1>American Stock Exchange (AMEX) </h1>
 <td align="center" class="kol"><input name="3A" type="button" class="bt" onclick="parent.location='gieldy/strona3a.php'" value="Litera A link" /><br>
 
 <td align="center" class="kol"><input name="3B" type="button" class="bt" onclick="parent.location='gieldy/strona3b.php'" value="Litera B link" /><br>

 <td align="center" class="kol"><input name="3C" type="button" class="bt" onclick="parent.location='gieldy/strona3c.php'" value="Litera C link" /><br>
 

 
 
</table> 
<br><br><hr size="5" color="red"><br><br>
<p align="center">
<a href="http://v-ie.uek.krakow.pl/~s175584/dokumentacja.html" class="button17">Dokumentacja</a>
</p>


<?php
$logowanie=pg_connect("host=sbazy dbname=s178027 user=s178027 password=Ta07aksDt");
$usuniecie_wierszy=pg_query($logowanie,'DELETE FROM gieldy');
?>

 
</body>
</html>
