<?php 

//$html_content = file_get_contents('http://jconline.ne10.uol.com.br/canal/cidades/policia/noticia/2018/06/11/homem-e-morto-a-tiros-em-igarassu-342742.php');

$html_content = file_get_contents('http://jconline.ne10.uol.com.br/canal/cidades/policia/noticia/2018/02/16/suspeito-de-matar-enteada-e-linchado-em-igarassu-328103.php');
$dom = @DOMDocument::loadHTML($html_content);
$xpath = new DOMXPath($dom);
$nodes = $xpath->query('//div/div/div/div[@id="noticia"]');    

foreach ($nodes as $node) {

    $titulo  = $xpath->query('h1[@class="titulo-materia"]', $node)->item(0);
    $corpo  = $xpath->query('div[@id="noticia_corpodanoticia"]/p', $node)->item(0);
    echo "<h1> Notícia: </h1> <h2>". $titulo->nodeValue . "</h2> <p> ". $corpo->nodeValue  . "</p>";
}

$bairros = ["Agamenon Magalhães", "Alto do Ceu", "Ana Albuquerque", "Ana de Albuquerque", "Araçoiaba", "Bela Vista", "Bonfim","Campina de Feira", "Centro", "Cruz de Rebouças", "Cruz do Rebouças", "Distrito Industrial", "Encanto Igarassu", "Inhama", "Jabaco", "Jardim Boa Sorte", "Loteamento Agam Magalhães", "Mangabeira", "Monjope", "Nova Cruz", "Panco", "Posto de Monta", "Rubina", "Santa Luzia", "Santa Rita", "Santo Antônio", "Saramandaia",  "Sede", "Sítio Boa Vista", "Sítio dos Marcos", "Sítio Mumbaba", "Tabatinga", "Triunfo", "Umbura", "Vila Rural", "Zona Rural", "BR 101", "BR-101", "Estrada de Santa Helena"];
$assassinado = "assassinado";

$tipo = "";
$local = "";

$assassinato = ["assassinado", "assassinada", "assassinados", "assassinadas", "morto","mortos"];
$espancamento = ["linchado", "agredido","agredidos",  "agressão", "espancado",  "espancados"];
$roubo = ["roubado", "roubada", "roubados", "roubadas", "assalto", "assaltos", "assaltados", "assaltadas", "assaltado", "assaltada", "tentativa de assalto"];
$furto = ["roubado", "roubada", "roubados", "roubadas"];
$feminicidio = ["agredida", "agredidas", "espancada", "espancadas", "morta", "mortas"];
$latrocinio = ["latrocínio", "roubo seguido de morte"];
for ($i=0; $i < sizeof($assassinato); $i++) { 
	if (strpos($corpo->nodeValue,$assassinato[$i]) !== FALSE or strpos($titulo->nodeValue,$assassinato[$i]) !== FALSE){
		$tipo = $assassinato[$i];
		echo "<h1>Tipo de Crime: </h1> <p>Assassinato </p> <br>";
		break;
	}
}
for ($i=0; $i < sizeof($espancamento); $i++) { 
	if (strpos($corpo->nodeValue,$espancamento[$i]) !== FALSE or strpos($titulo->nodeValue,$espancamento[$i]) !== FALSE){
		$tipo = $espancamento[$i];
		echo "<h1>Tipo de Crime: </h1> <p>Espancamento </p> <br>";
		break;
	}
}
for ($i=0; $i < sizeof($roubo); $i++) { 
	if (strpos($corpo->nodeValue,$roubo[$i]) !== FALSE or strpos($titulo->nodeValue,$roubo[$i]) !== FALSE){
		$tipo = $roubo[$i];
		echo "<h1>Tipo de Crime: </h1> <p>Roubo </p> <br>";
		break;
	}
}
for ($i=0; $i < sizeof($furto); $i++) { 
	if (strpos($corpo->nodeValue,$furto[$i]) !== FALSE or strpos($titulo->nodeValue,$furto[$i]) !== FALSE){
		$tipo = $furto[$i];
		echo "<h1>Tipo de Crime: </h1> <p>Furto </p> <br>";
		break;
	}
}
for ($i=0; $i < sizeof($feminicidio); $i++) { 
	if (strpos($corpo->nodeValue,$feminicidio[$i]) !== FALSE or strpos($titulo->nodeValue,$feminicidio[$i]) !== FALSE){
		$tipo = $feminicidio[$i];
		echo "<h1>Tipo de Crime: </h1> <p>Feminicídio</p> <br>";
		break;
	}
}
for ($i=0; $i < sizeof($latrocinio); $i++) { 
	if (strpos($corpo->nodeValue,$latrocinio[$i]) !== FALSE or strpos($titulo->nodeValue,$latrocinio[$i]) !== FALSE){
		$tipo = $latrocinio[$i];
		echo "<h1>Tipo de Crime: </h1> <p>Latrocínio </p> <br>";
		break;
	}
}
for ($i=0; $i < sizeof($bairros); $i++) { 
	if (strpos($corpo->nodeValue,$bairros[$i]) !== FALSE or strpos($titulo->nodeValue,$bairros[$i]) !== FALSE){
		$local = $bairros[$i];
		echo "<h1>Local do Ocorrido: </h1> <p>". $local . "</p>";
	}
}

	
?>