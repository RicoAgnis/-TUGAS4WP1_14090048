<head>
<title>Belajar website</title>
<style type="text/css">
.judul{font-family: comic sans ms; font-size: 32; font-weight: bold}
td{font-family: verdana; font-size: 11}
a{font-family: comic sans ms; font-size: 16; font-weight: bold; textdecoration:
none}
a:hover{color: #ff6600; font-size: 18}
h1{font-family: comic sans ms; font-size: 22; font-weight: bold}
body{font-family: verdana; font-size: 12}
</style>
</head>
<body>
<table border="0" width="100%">
<tr bgcolor="#ff6600">
<td class="judul">WEB RAM</td></tr>
</table>

<table border="0">
<tr bgcolor="#cccccc">
<td><a href="index.html">Home>></a></td>
<td><a href="profil.html">Profil>></a></td>
<td><a href="krs.html">KRS>>></a></td>
<td><a href="kontak.html">Kontak>></a></td>
<td><a href="kalkulator.php">Kalkulator>></a></td>
<td><a href="faktorial.php">Menghitung Faktorial>></a></td>
<td><a href="for.while.php">While&For>></a></td>
<td width="90%"></td></tr>
</table>
<tr>
<td colspan="2" align="right"><marquee scrollamount="4">SELAMAT DATANG DI WEBSITE SAYA
</marquee></td>
<?php
echo "FOR DAN WHILE <br/><br/>";
for($i=1; $i<=5; $i++){
$j=1;
while ($j <= $i){
$j++;
echo $i;
}
echo "<br/>";
}
?>