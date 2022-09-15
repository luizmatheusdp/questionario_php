<?php
$r1= $_POST['p1'];
$r2= $_POST['p2'];
$r3= $_POST['p3'];
$r4= $_POST['p4'];
$r5= $_POST['p5'];
$r6= $_POST['p6'];
$r7= $_POST['p7'];
$r8= $_POST['p8'];
$r9= $_POST['p9'];
$r10= $_POST['p10'];


$nota=0;
if ($r1 == "hitler") {
	$nota++;
}
if ($r2 == "mitocondria" || "mitocôndria") {
	$nota++;
}
if ($r3 == "padrão") {
	$nota++;
}
if ($r4 == "3,14" || "3.14") {
	$nota++;
}
if ($r5 == "carvão") {
	$nota++;
}
if ($r6 == "-40") {
	$nota++;
}
if ($r7 == "magnésio" || "magnesio") {
	$nota++;
}
if ($r8 == "184") {
	$nota++;
}
if ($r9 == "sócrates" || "socrates" ) {
	$nota++;
}
if ($r10 == "josé de alencar" || "jose de alencar") {
	$nota++;
}
echo "<center><h1>";
echo "A SUA NOTA É DE ".$nota;
echo "</center></h1>";
echo "<br><br><br><br>";
echo "<h2>As respostas certas:</h2>";

echo "<h3>1.Qual o nome do reich alemão na época da 2ª guerra mundial?
</h3>";
echo "<h4>resposta: hitler</h4><br>";

echo "<h3>2.Como se chama a organela que faz a respiração celular?
</h3>";
echo "<h4>resposta: mitocôndria</h4><br>";

echo "<h3>3.Traduza a palavra 'default'?
</h3>";
echo "<h4>resposta: padrão</h4><br>";

echo "<h3>4.Qual o valor aproximado de 'pi', até as dezenas?
</h3>";
echo "<h4>resposta: 3,14</h4><br>";

echo "<h3>5.Qual o combustível usado por máquinas da 1ª revolução industrial?
</h3>";
echo "<h4>resposta: carvão</h4><br>";

echo "<h3>6.Qual a temperatura que tem o mesmo valor em escala celsius e fahrenheit?
</h3>";
echo "<h4>resposta: -40</h4><br>";

echo "<h3>7.Qual o elemento quimico que se encontra na familia 2 e no periodo 3?
</h3>";
echo "<h4>resposta: magnésio</h4><br>";

echo "<h3>8.Se uma pessoa tem 36 anos, qual sua frequencia cardiaca máxima?
</h3>";
echo "<h4>resposta: 184</h4><br>";

echo "<h3>9.Quem é considerado o pai da filosofia?
</h3>";
echo "<h4>resposta: sócrates</h4><br>";

echo "<h3>10.Quem o autor de 'luciola'?
</h3>";
echo "<h4>resposta: josé de alencar</h4><br>";

?>