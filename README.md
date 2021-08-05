# Quiz Geek
###### _Este projeto apresenta um quiz em Php_



Para criar o seu contexto foram utilizadas matrizes e arrays. O projeto está estruturado nas seguintes especificações:

- **index.php**
    Nesta página está a matriz que monta as questões do quiz, bem como contém um assunto e suas oções. O formulário direciona para a página _result.php_. Para criar o formulário, primeiramente é realizado um sorteio com o método _shuffle_ (ordena de forma aleatória o _array_).De acordo com esta ordenação é formado o _loop_ que estrutura a questão com suas opções.

- **result.php**
    Os parâmetros recebidos pela página através do método Post são tratados em variáveis. Para contabilizar as respostas, é utilizada a estrutura condicional _switch/case_ para cada questão. Após, os dados resultados são armazenados em um _array_ ordenado de forma decrescente de valores. Caso haja empate, é utilizada novamente _switch/case_ para encrementar na primeira chave para que haja desempate. Para finalizar, há um array com o resultado do quiz de acordo com a computação de respostas.


