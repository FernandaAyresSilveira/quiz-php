<!DOCTYPE html>
<html lang="pt-br">
<head>
 <title>Quiz Geek</title>

  <meta property="og:url"           content="#" />
  <link rel="shortcut icon" href="src/dist/img/favicon.ico" />
  <meta charset="UTF-8">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
  <!-- META TAGS -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

  <meta name="keywords" content="Quiz queek" />
  <meta name="description" content="Faça o quiz e descubra sua série favorita" />
  <!-- FACEBOOK TAGS -->

  <link rel="stylesheet" href="src/dist/css/style.css">


  <meta property="og:type" content="website">
  <meta property="fb:app_id" content="#" /> 
  <meta property="og:title" content="Quiz Geek" />
  <meta property="og:image" content="src/dist/img/logo.png" />
  <meta property="og:site_name" content="Quiz Geek" />
  <meta property="og:description" content="Faça o quiz e descubra sua série favorita" />

  <meta property="og:image:width" content="290px" />
  <meta property="og:image:height" content="140px" />
</head>
<body>
	<center>
		<img src="src/dist/img/logo.png">
		
<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$acorda 	= $_POST["acorda"];
		$idosa 		= $_POST["idosa"];
		$elevador 	= $_POST["elevador"];
		$assunto 	= $_POST["assunto"];
		$indo 		= $_POST["indo"];

		$a = 0;
		$b = 0;
		$c = 0;
		$d = 0;
		$e = 0;


		switch ($acorda) {
			case 'a':
				$a++;
				break;
			case 'b':
				$b++;
				break;
			case 'c':
				$c++;
				break;
			case 'd':
				$d++;
				break;
			case 'e':
				$e++;
				break;			
		}

		switch ($idosa) {
			case 'a':
				$a++;
				break;
			case 'b':
				$b++;
				break;
			case 'c':
				$c++;
				break;
			case 'd':
				$d++;
				break;
			case 'e':
				$e++;
				break;			
		}

		switch ($elevador) {
			case 'a':
				$a++;
				break;
			case 'b':
				$b++;
				break;
			case 'c':
				$c++;
				break;
			case 'd':
				$d++;
				break;
			case 'e':
				$e++;
				break;			
		}

		switch ($assunto) {
			case 'a':
				$a++;
				break;
			case 'b':
				$b++;
				break;
			case 'c':
				$c++;
				break;
			case 'd':
				$d++;
				break;
			case 'e':
				$e++;
				break;			
		}
		switch ($indo) {
			case 'a':
				$a++;
				break;
			case 'b':
				$b++;
				break;
			case 'c':
				$c++;
				break;
			case 'd':
				$d++;
				break;
			case 'e':
				$e++;
				break;			
		}

		$result = array('a' => $a, 'b' => $b,'c' => $c, 'd' =>  $d , 'e' =>  $e);
		arsort($result);

		//print_r($result);
		if (current($result) == next($result)) {
			switch (array_key_first($result)) {
				case 'a':
					$a++;
					break;
				case 'b':
					$b++;
					break;
				case 'c':
					$c++;
					break;
				case 'd':
					$d++;
					break;
				case 'e':
					$e++;
					break;			
			}
			arsort($result);
		}
		$option = array_key_first($result);


		$answer = array(
			'a' => '<b>Você é House of Cards:</b><br><br> ataca o problema com método e faz de tudo para resolver a situação.',
			'b' => '<b>Você é Game of Thrones:</b><br><br> não tem muita delicadeza nas ações, mas resolve o problema de forma prática.',
			'c' => '<b>Você é Lost:</b><br><br> faz as coisas sem ter total certeza se é o caminho certo ou se faz sentido, mas no final dá tudo certo.',
			'd' => '<b>Você é Breaking Bad:</b><br><br> pra fazer acontecer você toma a liderança, mas sempre contando com seus parceiros.',
			'e' => '<b>Você é Silicon Valley:</b><br><br> vive a tecnologia o tempo todo e faz disso um mantra para cada situação no dia.'
		); 


	}

	    echo "<h1 class='answer'>$answer[$option]</h1><br><br><br>";
?>
	<a href="index.php" class="back">Voltar ao início</a>
</center>
</body>
</html>