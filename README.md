# Quiz Geek
###### _Este projeto apresenta um quiz em PHP_



Para criar o seu contexto foram utilizadas matrizes e arrays. O projeto está estruturado nas seguintes especificações:

- **index.php**
    Nesta página está a matriz que monta as questões do quiz, bem como contém um assunto e suas opções. O formulário direciona para a página _result.php_. Para criar o formulário, primeiramente é realizado um sorteio com o método _shuffle_ (ordena de forma aleatória o _array_).De acordo com esta ordenação é formado o _loop_ que estrutura as questões e suas opções.

- **result.php**
    Os parâmetros recebidos pela página através do método Post são tratados em variáveis. Para contabilizar as respostas, é utilizada a estrutura condicional _switch/case_ para cada questão. Após, os dados resultados são armazenados em um _array_ ordenado de forma decrescente de valores. **Caso haja empate**: Se ambos o valores em cada pergunta forem diferentes entre si, de forma a escolher uma de cada letra, a pergunta de número 5 desempata. Caso o empate fique entre duas letras é executado o código para verificar qual posição, 0 ou 1, se encontra na questão 5 - utilizada para desempate. Caso nenhuma se encontre, é utilizada uma nova verificação para encontrar na questão 4. Para finalizar, há um array com o resultado do quiz de acordo com a computação de respostas.


_Obs: para conseguir executar é preciso estar em um servidor que rode php_


