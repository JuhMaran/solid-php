# OCP - Open/Closed Principle

_Princípio Aberto/Fechado_

## 17. Iniciando o Projeto ETL (Extract Transform Load)

Muito bem dando continuidade ao estudo dos princípios sólidos. A partir dessa aula nós vamos falar sobre o Open Cloud principal ou princípio aberto fechado. Mas antes de entrarmos na parte teórica e na parte prática desse princípio nessa aula nós vamos nos concentrar na inicialização do nosso projeto onde vamos de fato aplicar esse princípio. Ok. Qual o projeto que nós vamos criar nessa sessão. Será o projeto Ted de que se trata de transformá lo. Trata se de uma aplicação um tipo de aplicação de mercado responsável por extrair informações de diversas origens diferentes. Transformar essas informações é empurrar carregar essas informações para um destino. Esse disco não pode ser um banco de dados data Marcos com data warehouse como também pode ser uma ou outra aplicação uma aplicação final. Eu sugiro que você pesquise um pouco sobre tela sobre abstract transforme Cloud. Caso você não conheça esse tipo de aplicação é um recurso bem interessante. Quando estamos falando de sistemas que fazem muitas integrações fica a dica será um projeto bem interessante para nós nesse momento. Ok então vamos lá. Sem segredo aqui dentro do diretório Solid eu vou criar mais um diretório que eu vou chamar de meu lar. Na sequência vou acessar aqui dou dois aninhos com Madonna ou copiar aqui o caminho completo desse diretório legal. Lembrando que aqui um diretório acima nós já temos o Composer. Nosso projeto será escrito em PHP. Vamos utilizar o Composer para isso. Então aqui dentro do diretório BTL eu vou subir um nível para acessar o Composer. Por falar vamos iniciar o nosso projeto podemos pegar aqui o nome sugerido vamos avançar ele pede aqui um autor então podemos definir aqui colocar o meu nome no meu e-mail. Muito bem vamos avançar. Aqui podemos falar que não queremos tratar das dependências agora nem de produção nem de desenvolvimento. Vamos confirmar aqui olha só a criação do Composer portuguesa. Só teclar Enter. Bacana. Vamos dar uma olhada aqui. Aqui está. Agora vamos abrir o nosso projeto Petrelli em um editor de texto de código fonte ou em uma ideia de sua preferência. No meu caso eu vou seguir utilizando o Visual Studio Code ao clicar aqui fail folder Space vamos selecionar o diretório do projeto aqui está o arquivo Composer ponto e eu vou incluir aqui a entrada do Outlook e do Composer pra fazer o carregamento automático dos componentes das classes da nossa aplicação aqui tão bem sem segredo. Vou incluir a entrada altura onde vamos passar aqui como o valor um objeto que por sua vez conterá a entrada TSR 4. O valor será um novo objeto que vai escrever aqui qual será o país e qual será o diretório origem para esse país. Vamos passar aqui SC Barra Barra indicando que esse é o nome Express na sequência passará pelo diretório raiz na nossa aplicação muito bem. Agora é só criar esse diretório e por fim através da linha de comando executar a instrução história do Composer ou utilizar o Composer que está um nível acima do diretório do projeto. Nesse momento eu estou dentro do diretório do projeto então eu estou subindo o nível para executar o Composer passando a instrução estola. Vamos aguardar aqui a finalização o que é basicamente o download das dependências do auto iludido Composer que servirá para fazer os carregamentos automáticos dos clipes da nossa aplicação. A instalação foi concluída. Repare que aqui no diretório do projeto foi criado o diretório venda e aqui dentro nós temos o UOL Tablóide bacana. Vamos criar agora um script que será muito útil na nossa aplicação. O escolhido que vai permitir criar os objetos com base nas classes para testar mais adiante o princípio Open closed. Então vou colocar aqui a extensão ponto PHP. Vamos abrir aqui apego à HP e vamos fazer um Claire recuperando aqui o script autor do PHP dentro do diretório venda. Então basta passar aqui Barra venda Barra Outlook PHP. E aí eu vou dar um eco aqui daí string funcionando para fechar a sala aqui no diretório do projeto vamos executar PHP espaço traço S maiúsculo para servir mas essa aplicação que podemos utilizar localizou se na Porta 8 mil. Qualquer servidor web embutido do PHP subiu a aplicação através do browser. Nós podemos recuperar aqui a aplicação através do local Rust suporta 8 mil conforme definimos aqui na instrução de criação do nosso servidor. Bacana tudo ok. A partir da próxima aula nós vamos começar a implementar o nosso eterno sem nos preocuparmos. Nesse primeiro momento com o Open closed principal troquei apenas levando em consideração o paradigma de orientação a objetos e também o S&P ou single responsabilidade por isso isto porque esse sim é o princípio que nós nesse momento já conhecemos. Então até a próxima aula.

![ETL - Extract Transform Load](./../images/003_ETL.png)

Arquivos CSV e TXT --Extrai--> ETL (Transforma) --Carrega--> DESTINO (exemplo: banco de dados)

### Sobre ETL

_Explicar/Responder as perguntas abaixo_

1. O que é ETL?
2. Quais suas etapas?
3. Para que serve?
4. Qual sua importância?
5. Quais são as ferramentas comuns?

## 18. Projeto ETL - Lendo um arquivo CSV

Dando continuidade ao desenvolvimento do projeto tele aula nós vamos trabalhar implementando a leitura de arquivos CSV. A ideia nessa aula é criar duas classes a classe `leitor` e a classe `arquivo` cada classe com as suas responsabilidades únicas. A classe arquivo vai ser responsável pelo arquivo em si pelo seu respectivo conteúdo. é uma classe que poderia tratar as informações contidas dentro do próprio arquivo poderia ajustar um dos caracteres poderia remover linhas inválidas. Enfim a responsabilidade dela sobre o arquivo CSV que será lido. Já a classe leitor ela será responsável por definir qual que é o local onde esse arquivo se encontra. Ela será uma classe bastante simples. Ela vai funcionar como uma espécie de interface mas ela poderia no futuro ser estendida ela poderia atestar a existência do arquivo antes de tentar ler esses arquivos. Ela poderia abrir e testar conexões de rede para recuperar arquivos por exemplo que estivessem em repositórios FTP. Enfim a classe leitor fica responsável por essa interface de leitura enquanto a classe arquivo fica responsável pelo arquivo em si. Então vamos lá. Voltando aqui no código aqui dentro de `src/` eu vou criar a classe `Leitor.php` e a classe `Arquivo.php`. Vamos começar aqui pela classe leitor. Vamos criar aqui dois atributos o primeiro atributo será o `diretorio` local onde o arquivo se encontra, o segundo atributo será o `arquivo` em si, o nome e a extensão desse respectivo arquivo. Na sequência vamos criar aqui os métodos `get` e `set`, desses respectivos atributos de modo fluído. Aqui no `get` nós vamos dar um `return $this->diretorio();`, vamos fazer o mesmo para `arquivo`. Vou copiar aqui para facilitar um pouco (`return $this->arquivo();`). Legal nós faremos aqui os métodos `set` também. vamos receber aqui o diretório. Nesse caso mais é o arquivo também. E aí nós podemos inclusive para que os retornos desses métodos não vou falar que esse método ele retorne mais trendy. Esse método também já que nós estamos equipando os parâmetros nós podemos equipar também os retornos. O nosso próximo passo é criar aqui um método que vai de fato ler o arquivo e aí nós podemos ter um `echo` aqui da mensagem `'teste'` Ok. Feito isso aqui no índex vamos recuperar o namespace mais especificamente a classe leitor. Dentro desse namespace, vou criar aqui uma variável chamada leitor que vai receber um `new Leitor();`. E aí nós podemos executar o método ler arquivo. Esse método aqui olha só só para verificar se de fato a nossa classe está funcionando. Voltando aqui no browser vou atualizar está lá. Agora nós precisamos trazer aqui pra nossa aplicação o arquivo CSV que será lido pra facilitar eu disponibilize como um recurso dessa aula um arquivo chamado `arquivos_necessarios.zip`. é só fazer o download descompactar aqui dentro nós teremos um diretório chamado arquivos e dentro desse diretório um arquivo chamado dados do CSV nós podemos recortar esse diretório e colocar dentro do nosso projeto até aqui na raiz do projeto mesmo. Vamos voltar aqui para o código e vamos configurar o nosso leitor. Eu vou passar aqui o diretório se você se lembra bem. Nós temos um atributo que guarda essa informação. Vou utilizar o método `set` para definir. Então nós podemos passar aqui lá o diretório como sendo `'/arquivos'`. Aqui está o diretório para não ter erro eu vou concatenar aqui o caminho completo até esse script também. Na sequência nós vamos fazer a mesma coisa 'setando' o nome do arquivo. Vou apenas confirmar aquele atributo `setArquivo` legal. Então o nome do arquivo vamos confirmar aqui `dados.csv`. Dessa forma aqui no leitor nós podemos trazer esse caminho para o contexto ou criar a variável caminho. Vou atribuir aqui o `this->getDiretorio()` concatenando essa informação com uma `.'/'` na sequência concatenar com `.$this->getArquivo();`, formando portanto o caminho completo até esse arquivo. Só nós podemos testar aqui ou voltar aqui no navegador. Ele deu um erro aqui falou que `getDiretorio()` retorna um valor vazio. Vamos dar uma olhada. A chamada do método está OK, o atributo também está OK. Vamos dar uma olhada no index.php. Vamos testar aqui o método `set`. Aqui olha só faltou atribuir. Eu criei o método `set` copiando a informação dos métodos `get` e esqueci de ajustar aqui a atribuição do valor ao que nós pagaríamos se estivéssemos fazendo os testes unitários. Logo de cara se estivéssemos utilizando a metodologia TDD. Então fica a dica, olha como os testes são importantes, nesse caso esses erros eles foram bastante simples. Mas repare que erros pequenos acontecem. Então erros pequenos podem gerar erros complexos difíceis de serem testados depois. Então fica a dica reforçando a importância dos testes unitários. Vamos voltar aqui no navegador tá lá temos o caminho completo. Muito bem voltando aqui no nosso código. O que nós podemos fazer agora que temos esse caminho, é delegar esse caminho para classe `Arquivo.php`, o objeto que vai controlar de fato o arquivo. Vamos criar a nossa classe `Arquivo.php`, vou definir aqui o `namespace`. Vamos criar uma função aqui, que vou chamar de `lerArquivoCSV()` que vai receber o `$caminho`. Portanto aqui no leitor vamos dar um `use src\Arquivo`. Ou seja vamos recuperar aqui desse namespace a classe arquivo e aqui vamos criar uma variável chamada `$arquivo$` que vai receber `new Arquivo();`. Na seqüência nós vamos pegar esse objeto e vamos executar o método do arquivo CSV passando o caminho também novamente a classe leitor. Repare que ela está atuando como uma interface para no futuro ter as responsabilidades de leitura sobre as variáveis tipos de arquivos que podem compor o nosso ETL. Por isso nesse momento parece até um pouco redundante mas lembre-se é natural ter essa sensação. A sensação de que temos classes desnecessárias mas porque nós estamos trabalhando com as responsabilidades únicas isso vai ter impacto direto em como nós vamos implementar os outros princípíos SOLID. Ou então vamos lá retornando ao nosso código. Nós estamos encaminhando para o método `lerArquivoCSV($caminho)`, nós podemos testar.
Aqui é esperado um `string` (`lerArquivoCSV(string $caminho)`), depois mas podemos tipar qual o retorno do método, caso exista de fato um retorno. Vamos por partes. Vou apenas ver se estamos chegando até esse ponto. Olha só que ele um erro aqui na linha 3 vamos confirmar por quê. Até porque aqui nós precisamos definir o `namespace`.
No código o instrutor colocou: `use src;` e o correto é `namespace src;`
Agora sim. Bacana então chegamos até esse ponto. Nós podemos implementar aqui a abertura do arquivo e recuperação de seu conteúdo. Então vou criar uma variável chamada `$handle` que vai exibir aqui o resultado `resource` do método `fopen()` nativo do PHP, responsável por abrir um arquivo `open file`, ok! E aí nós vamos passar aquele caminho com o parâmetro de leitura. Dessa forma nós temos o `$handle` apontando para um arquivo que foi aberto. Nós podemos portanto acessar cada uma das linhas desse arquivo recuperando seu respectivo conteúdo. Então aqui dentro do `while()` eu vou declarar uma variável chamada `$linha` que vai receber o retorno do método `fgetcsv()`. Esse método também é nativo do PHP. Aqui nós passamos o `$handle` e temos também a possibilidade de definir mais alguns parâmetros como por exemplo a quantidade máxima de linhas que queremos ler dentro desse arquivo, por exemplo 10 mil linhas (`10000`) e também que é o caractere limitador das colunas de cada uma das linhas contidas no arquivo. Nesse caso o nosso CSV é separado por ponto e vírgula (`;`). Então basta passar essa informação aqui também. E aí nós podemos abrir aqui o arquivo de dados CSV só para entender um pouco melhor. Olha só repare que nós temos aqui um nome separado por ponto e vírgula do CPF separado por ponto e vírgula do e-mail (`nome;cpf;email`). Então nós temos três colunas quatro linhas. Nós temos também aqui um erro de code porque o arquivo que eu criei o arquivo CSV provavelmente está configurado para ISO88591. O meu editor está configurado para o UTF-8. Então ele dá um conflito, mas não se preocupe porque nós vamos resolver isso aqui no código ok vamos fechar aqui. E aí. Claro que nós precisamos de um critério de parada o `fgetcsv` possui um cursor interno sempre quando ele é executado ele recupera a próxima linha do arquivo até um determinado momento que não existem mais linhas para serem recuperadas. A linha não tem conteúdo então ele retorna para a gente `false` e essa informação pode ser utilizada como critério para Parada do nosso laço. Nós podemos pegar todo esse resultado aqui e testar esse laço só vai acontecer enquanto o retorno for diferente de falso (`!== false`). Pronto. Dessa forma nós temos aqui um critério de parada. Agora vamos dar um `print_r($linha);` que está recebendo a cada uma das iterações do nosso `while` o resultado prometido aqui dentro de `fgetcsv()` vou salvar o nosso script. Vamos voltar aqui no browser e vou atualizar tá lá. Estamos recuperando os registros. Aqui está o erro code. Mas vamos por partes. Voltando aqui no nosso código. O próximo passo é pegar minha linha ou até dar `echo <br>` para quebra de linha para facilitar a leitura. A ideia aqui é pegar linha a linha e atribuir essas informações ao aqui ou seja ao atributo do Objeto arquivo. Voltando aqui no código vamos criar mais um atributo que eu vou chamar por exemplo de `private $dados` que será iniciado aqui com array vazio (`= array();`). Muito bem. E aqui para cada linha nós vamos recuperar a informação contida na coluna zero. Nesse caso no índice zero que o nome, mas recuperar também o CPF que está aqui na posição 1, e o email que está na posição 2 ok. E aí nós podemos fazer o seguinte, vou recuperar aqui `$this->setDados()` e nós vamos passar o nome, o CPF e o email (`$this->setDados($linha[0], $linha[1], $linha[2])`). E aí vamos implementar nosso método `setDados()`, então ele passa a receber o nome, CPF e o e-mail. Definir que cada parâmetro é uma string. Todos aqui, parâmetros de texto (`string`). Nesse caso como uma função `set`, não tem retorno. Então podemos 'tipá-la' do tipo `void`. E aí sim nós vamos utilizar `$this->dados.push(['nome' => $nome, 'sobrenome' => $sobrenome, 'email' => $email]);`. Então, podemos testar, após executar o `while`. Nós podemos dar um `print_r($this->dados)`. Vamos acessar o atributo diretamente, pois é apenas um teste. Para verficar se de fato está sendo preenchida corretamente com as informações dentro do array. Vamos voltar para o Browser/Navegador. Ops. Deu um erro: um parâmetro passado para `setDados()` não é uma instância. `string` estava escrito errado. Agora sim vamos voltar novamente aqui vamos atualizar. Olha só tivemos aqui um novo erro por causa do `push` vamos voltar aqui no código. A anotação no PHP é um pouco diferente. No PHP usamos o método `array_push`, com nosso atributo (`$this->dados`) e na sequência a informação que queremos adicionar dentro desse array. Nesse caso, o outro array e valores: `['nome' => $nome, 'sobrenome' => $sobrenome, 'email' => $email ]`. Muito bem, vamos voltar aqui no navegador. Agora sim. Bom nós estamos na reta final aqui da implementação do fluxo de leitura de arquivo CSV pelo nosso ETL. Vamos apenas fazer mais alguns ajustes vamos acertar essa questão do `encoding` que está apresentando aqui para nós um caractere inválido. Aqui no código. Nós podemos tratar isso no `array_push`. Ajustando a identação para facilitar a leitura. Podemos recuperar este valor e submeter esse valor também nativo do PHP, que é o `iconv`, que é um conversor de encoding. Basicamente ele espera que o um encoding atual e um encoding esperado (`'nome' => iconv('encoding atual', 'encoding esperado', $nome),`). Então por exemplo o nosso arquivo CSV, foi armazenado como contendo o econding `iso-8859-1` (encoding atual) porque o idioma do meu sistema operacional é o português do Brasil. O Excel entendeu que o conjunto de caracteres que deve ser utilizado dentro do arquivo é o conjunto de caracteres que faz parte da tabela iso-8859-1. Porém, a aplicação trabalha com UTF-8. Vamos pegar este valor `$nome` que esta em iso-8859-1 e converter para UTF-8 (encoding esperado), para corrigir na aplicação. O instrutor precisou remover `;` e colocar `,`. Com isso o problema deve ser resolvido. Olhando no navegador, apresenta a correção esperada. O próximo passo é criar uma função que irá retornar o array de dados.

```php
public function getDados(): array {
    return $this->dados;
}
```

Sem segredos. Desta forma, podemos remover o trecho de código do método `lerArquivoCSV()`:

```php
echo '<pre>';
print_r($this->dados);
echo '<pre>';
```

`lerArquivoCSV` se torna apenas um método de processamento com retorno do tipo `void`. Em `Leitor.php`, após executar esse processamento nós podemos dar `return $arquivo-getDados();`. E podemos incluiro o retorno na assinatura do método:

```php
public function lerArquivo(): array {
    $caminho = $this->getDiretorio().'/'.$this->getArquivo();
    echo $caminho;
    $arquivo = new Arquivo();
    $arquivo->lerArquivoCSV($caminho);
    return $arquivo->getDados();
}
```

Método `setArquivo`, também incluir retorno do tipo `void`. Os métodos `set`, apenas processam não possuem retorno (`void`). Classe Leitor e Arquivo implementadas.

Apenas ajustar o index.php, para testar o retorno da leitura do arquivo. Incluir o trecho abaixo, para verificar se de fato estão retornando as informações esperadas que contém o arquivo CSV.

```php
echo '<pre>';
print_r($leitor->lerArquivo());
echo '<pre>';
```

Retornando no browser. Vamos atualizar. Está lá, tudo funcionando corretamente. Implementamos portanto a leitura de arquivo CSV dentro do ETL e nós também queremos classes com responsabilidades únicas. Ou seja já temos um ambiente ideal para iniciarmos os nossos testes sobre o Open/Closed Priciple. Então até a próxima aula.

### Classes com Responsabilidades Únicas (SRP)

![Classes com Responsabilidades Únicas (SRP)](./../images/004_classes_SRP.png)

## 19. Projeto ETL - Lendo um arquivo TXT

Nessa aula nós vamos implementar o fluxo de leitura de arquivos TXT dentro do nosso projeto. Nesse primeiro momento nós não vamos levar em consideração nada do Open/Closed Principle. A ideia é desenvolvermos esse projeto com essa proposta de modo funcional e aí sim na sequência entendermos o que é o Open/Closed Principle, para aí sim com base no entendimento do que é esse princípio aplicar as melhorias dentro do nosso projeto. Ou seja, primeiro vamos desenvolver uma aplicação que algo sem olhar para esse princípio e depois vamos entender a teoria e como podemos aplicar essa teoria na prática fazendo o refactoring no nosso projeto. Então vamos lá. Voltando aqui no nosso código. Olha só nós temos aqui a função que leu o arquivo nesse momento utilizando a classe leitor, que olha para o arquivo CSV. Na classe Arquivo.php. Nós vamos implementar um novo método um método que vai ler agora arquivos TXT. Ele continua recebendo o caminho e continua abrindo o arquivo para leitura. O que muda é que nós não vamos utilizar o método `fgetcsv()`, porque agora nós estamos falando de um TXT e a forma de leitura muda um pouco. Então aqui no `while()`, olha só nós vamos retirar essa condição e aí nós vamos recuperar cada uma das linhas contidas dentro do nosso arquivo TXT. Para fazer isso eu vou criar uma variável chamada linha que vai receber o retorno de `fgets()` e nós vamos passar aqui como parâmetro o nosso `$handle`, a variável que guarda o resource, o arquivo aberto. A cada execução do `fgets()` nós podemos através de uma outra função que é `feof` testar pelo fim do arquivo. E esse teste pode ser feito aqui olha só dentro do `while()`. Basta utilizar a função `feof()`, passando aqui o nosso `$handle`, resource.

 ```php
 while(feof($handle)) {}
 ```

Então na prática a cada execução da função `fgets()` o ponteiro interno retorna de leitura do arquivo é incrementado. E a função `feof()`, retorna para nós, se esse ponteiro em questão aponta para o final do arquivo. Enquanto esse ponteiro não apontar para o final do arquivo, `feof()` vai retornar para nosso `false`. Ou seja, somente quando chegar no final do arquivo é que `feof()` retornaria `true`. Então por isso nós precisamos pegar esse retorno e utilizar aqui a negação. Porque enquanto houver linhas para serem lidas a função `feof()` vai retornar `false` para nós. Então nós podemos inverter aqui o resultado desse método dessa função para que o `while()` seja executado enquanto houverem linhas para serem recuperadas aqui pelo método `fgets()`. Na sequência, podemos dar um `echo` dessa variável `$linha` para verificar como que o nosso amado está se comportando e para implementar o nosso método aqui no fluxo da nossa aplicação. Nós precisamos voltar aqui no `index.php` e fazer a leitura do arquivo txt. Até então nós estávamos lendo o arquivo CSV. Então nós podemos fazer o seguinte. Aqui na leitura do arquivo dentro da classe leitor nós podemos verificar qual tipo de arquivo nós vamos ler. Nós temos aqui o nome do arquivo e o nome do arquivo contém a extensão dele. Então nós podemos testar a extensão para decidir se vamos ler o arquivo CSV utilizando o método `lerArquivoCSV()` ou o método `lerArquivoTXT()`. Então, teremos um `if`, em ambos os casos vamos passar o `$caminho`. Então por exemplo eu posso criar aqui uma variável chamada extensão que vai receber aqui o `explode()` e o nome do arquivo. Vamos utilizar como parâmetro para usar esse `explode()` o caracter `.` e na sequência passar a string `$this->getArquivo()` que corresponde ao `explode` que queremos fazer. E aí nós teremos aqui, no nome do arquivo, através do ponto com índice zero que conterá a descrição do arquivo e um índice 1 conterá sua respectiva extensão. Então nós podemos utilizar aqui no teste. Então posso fazer um `if` para verificar se a extensão na posição 1 é igual a CSV. Se for, vamos utilizar o método `lerArquivoCSV`, caso contrário, se a extensão for igual a TXT, vamos executar o método `lerArquivoTXT` Feito isso nós podemos voltar aqui no `index.php` e apenas corrigir aqui o nome do arquivo. Nesse caso o txt é para agilizar um pouco o andamento dessa aula, eu disponibilizar como recurso um arquivo, compactado chamado `arquivos_necessarios.zip`, é só fazer o download descompactar. Nós queremos que o diretório Arquivos dentro desse diretório nós teremos `dados.txt`, que será testado nessa aula. Incluir o arquivo dados.txt no diretório `app_etl/arquivos/`, junto com o arquivo `dados.csv`. Voltando aqui para o código. Repare que nós temos os dois arquivos portanto já estamos preparados aqui para ler dados.txt e a diferença olha só que no caso do dados.txt pra deixar as coisas um pouco mais complexas ao invés de separar os valores nas colunas por ponto e vírgula como é o caso aqui do CSV. Nós vamos utilizar aqui posições. Ou seja, o CPF ele estará em uma determinada posição de até o nome em uma determinada posição de até o e-mail, a mesma coisa, ok!?. Então nós vamos utilizar aqui uma espécie de formato de importação em que as colunas serão importantes para nós para decidir qual o conjunto de colunas compõe determinadas informações durante o processo de leitura do arquivo. Bom então vamos testar. O leitor já está ajustado com base na extensão determinada no nome do arquivo. Nós estamos determinando qual método será chamado e o método aqui do arquivo `lerArquivoTXT()` também já está implementado com o `echo $linha`, então voltando aqui no browser (navegador) eu vou atualizar legal. Repare que nós tivemos aqui sucesso na leitura. Repare que aqui no final nós temos a impressão de um array vazio.

```text
35495984080Gustavo Santos                gustavo.santos@contato.com.br
99422057051Marcela Moreira               marcela.moreira@contato.com.br
00119677067Carlos Silva                  carlos.silva@contato.com.br
22079999044Rosana Marques                rosana.marques@contato.com.brArray
(
)
```

Isso está acontecendo porque aqui no `index.php` nós temos esse `print_r` e nesse momento ele está tentando exibir aqui o retorno de `get` dos dados do arquivo que representa o atributo dados do arquivo que nesse momento não está sendo preenchido. Nós estamos apenas exibindo aqui `$linha`. Nós ainda precisamos 'setar' os valores dentro do `array` de dados,  mas antes de fazer isso nós precisamos determinar que essas posições. Então repare que o CPF, a informação correspondente ao CPF vai da coluna zero nesse caso,  embora aqui seja reconhecido como coluna 1, nós vamos entender que é a coluna 0. E o CPF tem 11 dígitos. Como podemos ler isso? Simples, utilizando o método sub string nativo do PHP. Vou submeter `$linha` para o método `substr()`, falando que essa string, nós queremos recuperar dessa string, a partir da posição do zero com 11 caracteres.

```php
echo substr($linha, 0, 11); // CPF
```

Olha só vamos testar ou voltar aqui no navegador vou atualizar tá lá todos os CPFs estão aqui.

```text
35495984080994220570510011967706722079999044Array
(
)
```

Incluir quebra de linha para facilitar a leitura: `echo '<br>';`

```text
35495984080
99422057051
00119677067
22079999044
Array
(
)
```

Agora sim que isso significa que nós podemos pegar essa informação e já passar aqui para `setDados` na posição que é esperado o CPF, então vamos confirmar aqui em `setDados`. Olha só, CPF fica aqui como segundo parâmetro. Então nós vamos passar aqui essa informação.

```php
$this->setDados($linha[0], substr($linha, 0, 11), $linha[2]);
```

Agora vamos ver a questão do nome. Repare que o nome ele começa aqui da posição 12. Nesse caso nós vamos considerar posição 11 porque a sub string trata a partir da posição 0. Então aqui da posição 11, temos 30 caracteres. Então vou aqui, nós vamos recuperar dessa mesma linha a partir da posição 11. Total de 30 caracteres. Vamos testar. Vou voltar aqui no browser. Vou atualizar tá lá estamos recuperando seu nome. Nós podemos passar por esse parâmetro aqui para `setDados` na posição em que o nome é inspirado.

```php
$this->setDados(substr($linha, 11, 30), substr($linha, 0, 11), $linha[2]);
```

Então vamos confirmar só o nome fica aqui na primeira posição. Então nós podemos passar aqui. E por fim nós precisamos passar o e-mail. Se observarmos em dados pouco TXT o e-mail começa aqui na coluna 42 portanto com 41 ou maior e-mail que nós temos aqui. Possui 30 caracteres. Então nós podemos falar que o e-mail é parte da coluna 41 e podemos colocar aqui mais 50 posições mais 50 caracteres por e-mail.

Isso significa que ele poderia ser bem maior aqui não poderia ter mais caracteres.

Enfim já vamos deixar aqui uma quantidade maior para a leitura do e-mail.

```php
$this->setDados(substr($linha, 11, 30), substr($linha, 0, 11), $linha[2]);
```

Bacana tudo salvo vou voltar aqui no navegador vamos atualizar tá lá está não se recuperar no e-mail corretamente. Aqui em sete dados o e-mail é esperado. A terceira posição no terceiro parâmetro. Então nós podemos cortar isso daqui a apagar essas duas instruções ou disso comentar. E nós vamos passar aqui na terceira posição. E aí para facilitar um pouco a leitura vou colocar essas informações aqui dentadas muito bem aqui nós temos um homem com nome CPF e o e-mail todo salvo. Vou voltar aqui no navegador vou atualizar tá lá. Repare que o nosso array está sendo retornado. 

```text
Array
(
    [0] => Array
        (
            [nome] => Gustavo Santos                
            [sobrenome] => 35495984080
            [email] => gustavo.santos@contato.com.br

        )

    [1] => Array
        (
            [nome] => Marcela Moreira               
            [sobrenome] => 99422057051
            [email] => marcela.moreira@contato.com.br

        )

    [2] => Array
        (
            [nome] => Carlos Silva                  
            [sobrenome] => 00119677067
            [email] => carlos.silva@contato.com.br

        )

    [3] => Array
        (
            [nome] => Rosana Marques                
            [sobrenome] => 22079999044
            [email] => rosana.marques@contato.com.br
        )

)
```

As informações estão sendo armazenadas corretamente dentro do atributo dados do objeto do arquivo que por sua vez ou não só é recuperado aqui no leitor e retornado para o Index e aí nós podemos fazer o seguinte podemos separar o nosso código falando que aqui nós temos o TXT e aqui abaixo o CSV para ajustar eu vou apenas renomear as nossas variáveis aqui. Então eu vou chamar aqui leitor TXT vou executar aqui a definição do diretório na sequência com o nome do arquivo para que a extensão é importante. No final vou recuperar essa informação aqui e aqui processe vou chamar a variável de leitor CSV. Vamos fazer o mesmo processo. A diferença é que aqui nós vamos definir o arquivo de dados ponto CSV e no final nós vamos executar ao lado do arquivo que agora está apontando para dados ponto CSV. Ou seja o nosso eterno já está lendo um arquivo txt no arquivo CSV Vamos testar aqui no navegador vou atualizar muito bem temos os dois arrays.

*app_etl/index.php*

```php
<?php
require __DIR__ . '/vendor/autoload.php';
use AppEtl\Leitor;
// ---------- TXT ----------
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/arquivos');
$leitorTXT->setArquivo('dados.txt');
echo '<pre>';
print_r($leitorTXT->lerArquivo());
echo '<pre>';
// ---------- CSV ----------
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/arquivos');
$leitorCSV->setArquivo('dados.csv');
echo '<pre>';
print_r($leitorCSV->lerArquivo());
echo '<pre>';
```

Podemos mesclar os dados dos arquivos. Olha só voltando aqui eu vou recortar essa função. Esse método aliás vou colocar aqui muito bem vou recortar esse outro método vou colocá-lo aqui.

```php
// ---------- TXT ----------
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/arquivos');
$leitorTXT->setArquivo('dados.txt');
$leitorTXT->lerArquivo();
// ---------- CSV ----------
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/arquivos');
$leitorCSV->setArquivo('dados.csv');
$leitorCSV->lerArquivo();
```

Vamos definindo o merge entre TXT e CSV. Criar uma variável chamada `arr_txt` que vai receber o retorno do método `$leitorTXT->lerArquivo();`. E criar uma outra variável `arr_csv` que vai recuperar o retorno `$leitorCSV->lerArquivo();`. Agorva vamos dar um `print_r`, utilizando o método `array_merge`, para juntar o `arr_txt` e com `arr_csv`. Para facilitar a leitura, é incluído `echo '<pre>';`

```php
// ---------- TXT ----------
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arr_txt = $leitorTXT->lerArquivo();
// ---------- CSV ----------
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arr_csv = $leitorCSV->lerArquivo();
// ---------- Merge entre TXT e CSV ----------
echo '<pre>';
print_r(array_merge($arr_txt, $arr_csv));
echo '<pre>';
```

Retornando e atualizando o navegador, temos um único array com os dados do TXT e do CSV. Voltando ao código, um único detalhe que ficou faltando, é o seguinte que após abrir os arquivos, é uma boa prática fechá-los. Então, ao final de cada método `lerArquivoCSV` e `lerArquivoTXT`, vamos incluir `fclose($handle);`. Dessa forma nós vamos abrir e fechar os arquivos corretamente Muito bem então nessa aula nós implementamos esse segundo fluxo de leitura de arquivos txt. Porém nesse momento nós não estávamos nos preocupando com o Open/Closed Principle. Embora a nossa aplicação tenha ficado bastante funcional inclusive bastante reutilizável. Repare que nós temos métodos distintos que respeitam a questão da responsabilidade única esses métodos estão inseridos dentro de uma classe que manipula os arquivos. Nós estamos aqui com um leitor que diz como esses arquivos devem ser lidos. Então repare que por mais que a gente tenha a responsabilidade única nesse momento nós ainda não estamos aplicando os princípios de aberto e fechado mas porque nesse momento você ainda não foi apresentado a esses princípios. Na próxima aula eu vou falar um pouco sobre a teoria do Open/Closed Principle. Na sequência faturar o nosso projeto para entender quais são os benefícios propostos por esse princípio. Até a próxima aula.

## 20. Entendendo o Open/Closed Princple (OCP)

## 21. Refactoring do Projeto - Aplicando o Princípio na Prática

## 22. Testando as Vantagens do OCP

## Comandos

```bash
php ../composer.phar init
php ../composer.phar install
php -S localhost:8000
```

## Código

* app_etl/composer.json

```json
{
    "name": "julia/app_etl",
    "autoload": {
        "psr-4": {
            "AppEtl\\": "src/"
        }
    },
    "authors": [
        {
            "name": "JuhMaran",
            "email": "julianemaran@gmail.com"
        }
    ],
    "require": {}
}
```

* app_etl/index.php

```php
<?php

require __DIR__ . '/vendor/autoload.php';

echo 'Funcionando';
```