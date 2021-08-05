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
		<h1>Vamos fazer um quiz e adivinhar a série que mais se encaixa em seu perfil!</h1>
		<h2>Responda as perguntas e o sistema irá lhe indicar a série</h2>

		<div id="go"><span>Clique para começar</span></div>
	
	<?php

		$questions= array();
		
	 	array_push($questions, 
	 		array(
	 			"question" => "De manhã, você...",
	 			"name"	   => "acorda",
	 			"options"  =>
	 			array(
				'a' => 'Acorda cedo e come frutas cortadas metodicamente',
				'b' => 'Sai da cama com o despertador e se prepara para a batalha da semana.',
				'c' => 'Só consegue lembrar do seu nome depois do café.',
				'd' => 'Levanta e faz café pra todos da casa.',
				'e' => 'Passa o café e conserta um erro no HTML')
			)
		);
		array_push($questions, 
	 		array(
	 			"question"  => "Indo para o trabalho você encontra uma senhora idosa caída na rua.",
	 			"name"	    => "idosa",
	 			"options"   =>
	 			array(
				'a' => 'Ela vai atrapalhar seu horário. Oculte o corpo.',
				'b' => 'Levanta a senhora e jura protegê-la com sua vida.',
				'c' => 'Ajuda-a, mas questiona sua real identidade.',
				'd' => 'Oferece para caminharem juntos até um destino em comum.',
				'e' => 'Testa se ela roda bem no Firefox. Não roda.')
			)
		);

		array_push($questions, 
	 		array(
	 			"question"  => "Chega no prédio e o elevador está cheio.",
	 			"name"	    => "elevador",
	 			"options"   =>
	 			array(
				'a' => 'Convence parte das pessoas a esperarem o próximo.',
				'b' => 'Ignora as pessoas no elevador e entra de qualquer forma.',
				'c' => 'Você questiona a realidade, as coisas e tudo mais. Sobe de escada.',
				'd' => 'Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.',
				'e' => 'Cria um app que mostra a lotação do elevador. Vende o app e fica milionário.')
			)
		);

		array_push($questions, 
	 		array(
	 			"question"  => "Você chega no trabalho e as convenções sociais te obrigam a puxar assunto.",
	 			"name"	    => "assunto",
	 			"options"   =>
	 			array(
				'a' => 'Fala sobre a política, eleições, como tudo é um absurdo.',
				'b' => 'Larga uma frase polêmica e vê uma pequena guerra se formar.',
				'c' => 'Puxa um assunto e te lembram que já foi discutido semana passada.',
				'd' => 'Sugere que os colegas trabalhem na ideia de um novo projeto.',
				'e' => 'Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP.')
			)
		);

		array_push($questions, 
	 		array(
	 			"question"  => "A pauta pegou o dia todo, mas você está indo para casa.",
	 			"name"	    => "indo",
	 			"options"   => 
	 			array(
				'a' => 'Vou chamar aqui o meu Uber..',
				'b' => 'Pegarei o bus junto com o resto do povo.',
				'c' => 'No ponto de ônibus mais uma vez, espero não errar a linha de novo.',
				'd' => 'Vou de carro, mas ofereço uma carona para os colegas.',
				'e' => 'Acho que descobri uma forma de fazer aquela senhora rodar no Firefox.')
			)
		);


//var_dump($questions);





	?>

		<section class="questions" id="quiz">

			<form action="result.php" method="post">
				

			<?php $cont=0;
			
 
			foreach ($questions as $q) { 
				$cont++;

				echo "
						<p>{$cont}. {$q['question']}</p>";

						$keys = array_keys($q['options']);
						shuffle($keys);
						//var_dump($keys);
						$random = array();
						//echo $q['name'];
						

						//foreach ($q['options'] as $option => $v) {
							foreach ($keys as $k) {
								echo 
							"<span>
								<input type='radio' name='{$q['name']}' id='{$q['name']}{$k}' value='{$k}' required>
								<label for='{$q['name']}{$k}'>{$q['options'][$k]}</label>
							</span>";



							/*echo 
							"<span>
								<input type='radio' name='{$q['name']}' id='{$q['name']}{$option}' value='{$option}'>
								<label for='{$q['name']}{$option}'>{$v}</label>
							</span><br>";*/
						}
						

				echo "	<br>";
			}?>

			<input type="submit" name="enviar" value="Vamos lá">

			</form>
			</center>

		</section>
		
	

	
	<script type="text/javascript">
		document.getElementById("go").addEventListener("click", function( event ) {
			//window.scrollTo( 0, 1000 );
			//scrollIntoView('#quiz', document.querySelector('#quiz').offsetHeight)
			var scrollDiv = document.getElementById("quiz").offsetTop;
			window.scrollTo({ top: scrollDiv-10, behavior: 'smooth'});
		});

		
	</script>
</body>
</html>