# LSP - Liskov Substitution Principle

_Princípio da Substituição de Liskov_

## 23. Iniciando o Projeto Polígonos

* Retângulo
* Quadrado

Muito bem dando continuidade ao estudo dos princípios SOLID a partir dessa aula nós vamos falar sobre Liskov Substitution Principle ou Princípio da Substituição de Liskov. Mas antes de entrarmos na parte teórica e prática desse princípio nessa aula nós vamos nos concentrar na inicialização do projeto polígonos onde vamos de fato aplicar esse princípio ok. Bom com o projeto que vamos desenvolver nessa sessão é baseado no exemplo clássico aplicado ao Princípio da Substituição de Liskov. Nesse projeto você verá de forma clara e objetiva como a tipagem forte de comportamento que é a característica defendida pelo LSP pode ser ferida mesmo com a abstração de orientação a objetos aparentemente correta, mas não se preocupe ainda com os detalhes ok. Vamos por partes. Vamos começar iniciando o projeto bom, sem segredo, dentro do diretório SOLID, aqui na área de trabalho. Eu vou criar mais um diretório chamado `app_poligonos`. Muito bem vou abrir aqui esse diretório pra copiar o caminho e colar na linha de comando que nós vamos acessar esse diretório para na sequência executar o comando `php ../composer.phar init`. O Composer que será executado fica num diretório acima. Se você se lembra bem lá estamos falando desse script aqui dentro do diretório SOLID. Então por isso eu estou subindo um nível para que a partir desses script seja possível iniciar o nosso projeto. Vou teclar Enter. Será que isso é um segredo. Vamos preencher as informações para a criação do composer.json.

* Package name - teclar enter (pular)
* Description - teclar enter (pular)
* Author - teclar enter (pular)
* Minium Stability - teclar enter (pular)
* Package Type - teclar enter (pular)
* License - teclar enter (pular)
* Definição de dependências: no
* Definição de desenvolvimento: no
* Gerar arquivo: yes
* Abrir o diretório na IDE Visual Studio Code
* No arquivo composer.json, configurar o autoload com PSR-4

**app_poligonos/composer.json**

```json
{
    "name": "julia/app_poligonos",
    "autoload": {
        "psr-4": {
            "AppPoligonos\\": "src/"
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

Vou incluir aqui o autoload de inclusão feita vou salvar esse scripts vamos aqui criar o diretório SRC e aí pra baixar o autoload para o nosso projeto nós precisamos executar o comando Install do Composer estão voltando na linha de comando dentro do diretório de projeto ou executar a instrução `php` subiram o nível para acessar o `../composer.phar` para executar o comando `install` E aí é só aguardar o download das dependências.

```bash
php ../composer.phar install
```

Ele baixou aqui para nós o diretório `vendor/` com o `composer/` e também com o `autoload.php` do Composer. O próximo passo é criar aqui no diretório `app_poligonos` o arquivo `index.php`.

**app_poligonos/index.php**

```php
<?php
require __DIR__ . '/vendor/autoload.php';
echo "Funcionando";
```

* Adicionar o diretório do autload.php
* Adicionar `echo` com mensagem para testar a aplicação.
* Salvar os arquivo index.php e composer.json.
* Fechar os scripts
* Na linha de comando, executar o comando `php -S localhost:8000` para servir esse diretório para subir o servidor embutido do PHP servindo a nossa aplicação.
* No navegador acesse `http://localhost:8000/` e verifique se está funcionando corretamente.
* No navegador deve aparecer a mensagem `Funcionando`.

Nas próximas aulas nós homens evoluíram o desenvolvimento desse projeto é claro vamos entender na teoria e na prática o que é o LSP (Liskov Substitution Principle). Então até a próxima aula.

## 24. Projeto Polígonos - Retângulo e Quadrado

Retângulo <--Herança-- Quadrado

Na matemática os quadriláteros ue possuem todos os ângulos retos são chamados de retângulos. Sendo assim **todo Quadrado é também um Retângulo**, mas **nem todo Retângulo é também um Quadrado**.

Nessa nós daremos continuidade ao desenvolvimento do projeto polígonos lembrando que esse projeto é baseado no exemplo clássico do LSP. Nessa aula nós vamos trabalhar na criação da classe retângulo e da classe quadrado. Mas o mais importante é a forma como nós vamos abstrair esses objetos para implementar dentro do nosso sistema. Ocorre que na matemática os quadrilátero os que possuem todos os ângulos retos são chamados de retângulos. Isso significa que todo o quadrado que é um quadrilátero, possui quatro lados e possui ângulos retos. Também é por definição um retângulo. Mas nem todo retângulo é um quadrado. Então repare que num exercício inicial de abstração faria sentido criar uma classe retângulo e uma classe quadrado fazendo com que Quadrado herdasse as características de retângulo. Afinal de contas por definição Todo quadrado é também um retângulo. Então repare que essa abstração num primeiro momento faz sentido mas ela vai acabar ferindo o  princípio LSP. Nessa aula vamos criar esses objetos com essa relação de herança. Seguindo as considerações da definição matemática e aí nas próximas aulas através do LSP. Você vai entender que nem toda a abstração ao pé da letra observando os objetos do mundo real faz sentido na programação. Mas vamos por partes. 

* O instrutor estava compartilhando a tela com slide
* Retorno ao VSCode
* Abriu o arquivo `index.php` do projeto `app_poligonos`
* Vamos deixar aberto e realizar alguns testes
* No diretório `src/`, criar os arquivos:
  * `Retangulo.php`
  * `Quadrado.php`
* No arquivo `Retangulo.php`:
  * Definir o namespace
  * Classe pai da abstração que será feita
  * Criar dois atributos protegidos (`protected`): largura e altura
  * Criar os métodos `getters` e `setters`
  * Criar o método para calcular a área, que é o grande objetivo da aplicação
    * largura * altura = area

```php
<?php

namespace AppPoligonos;

// Classe Retângulo é a classe pai, ou seja, a classe base. 
class Retangulo {

    // Atributos protegidos
    protected $largura;
    protected $altura;

    // Getters e Setters
    public function getLargura(): float {
        return $this->largura;
    }

    public function setLargura(float $largura): void {
        $this->largura = $largura;
    }

    public function getAltura(): float {
        return $this->altura;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
    }

    // Método para calcular a área
    public function getArea(): float {
        return $this->largura * $this->altura;
    }
}
```

* Testar a classe `Retangulo.php`
* Retornar no arquivo `index.php`
  * Recuparar a classe `Retangulo.php` para instanciar um objeto desse tipo.
  * Incluir: `use AppPoligonos\Retangulo;`
  * Criar uma variável para chamada o `$retangulo = new Retangulo();`
  * Definir o valor de altura: `$retangulo->setAltura(5);`
  * Definir o valor de largura: `$retangulo->setLargura(10);`
  * Adicionar `echo`

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AppPoligonos\Retangulo;

$retangulo = new Retangulo();
$retangulo->setLargura(5);
$retangulo->setAltura(10);
echo '<h3?>Área do Retângulo: ' . $retangulo->getArea() . ' </h3>';
```

Retorno:

```text
Área do Retângulo: 50
```

* 5 x 10 = 50
* Implementar a classe `Quadrado.php`

Por definição matemática, TODO Quadrado é também um Retângulo. Faria sentido do ponto de vista de abstração, da forma que conhecemos, extender a classe `Retangulo.php`, para não precisar digitar todos os métodos novamente. E simplesmente ajustar os métodos de acordo com a necessidade. É justamente isso, que será feito.

* Definir o namespace da classe Quadrado.php
* A classe Quadrado extende para classe Retangulo
* A classe Quadrado herda os atributos e métodos já implementados na classe Retangulo
* Por definição matemática TODO quadrado possui os quatro lados iguais.
* É necessário garantir essa lógica na nossa aplicação.

No arquivo index.php, se implementar um objeto quadrado, é necessário garantir que altura e largura sejam iguais. Como o objeto possui os dois métodos, então é necessário, na classe Quadrado.php, ter certeza de que ao 'settar' uma largura com uma altura, que essa informação seria replicada para todos os lados do quadrado. Para garantir isso nós podemos fazer uma sobre escrita dos métodos `setters` dos atributos que estamos herdando, mas antes de fazer isso vamos só fazer um teste. Olha só que salvei aqui há classe quadrado. Vou criar aqui uma variável chamada `$quadrado = new Quadrado();` pra utilizá la aqui, nós precisamos importá-la do seu respectivo namespace.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AppPoligonos\Quadrado;
use AppPoligonos\Retangulo;

$retangulo = new Retangulo();
$retangulo->setLargura(5);
$retangulo->setAltura(10);
echo '<h3?>Área do Retângulo: ' . $retangulo->getArea() . ' </h3>';

echo '<hr>';

$quadrado = new Quadrado();
$quadrado->setLargura(5);
$quadrado->setAltura(5);
echo '<h3?>Área do Quadrado: ' . $quadrado->getArea() . ' </h3>';
```

Da forma que está, o cálculo do quadrado está errado, pois irá retornar o valor como se fosse um retângulo. Para corrigir isso, e mantendo a estratégia de herança de especialização do quadrado. É necessário ir na classe Quadrado e sobrescrever os métodos `setLargura` e `setAltura`. Conhecido também como Polimorfismo.

* Polimorfismo, é quando uma classe filha/especializada modifica o comportamento herdado da classe pai.

Para fazer essa modificação, na classe Quadrado.php, para garantir a característica do quadrado.

* Método `setLargura`
  * largura do tipo float
  * método será apenas de processamento
  * setar largura do nosso objeto como sendo o valor recuperado
  * a altura também deve receber o valor de largura, desta forma estamos garantindo que ao setar a largura, altura também terá o mesmo tamanho.
* Método `setAltura`
  * lógica de altura é a mesma da largura
  * receber altura
  * método apenas de processamento
  * com base na altura recebida, vamos forçar o tamanho da largura

```php
<?php

namespace AppPoligonos;

class Quadrado extends Retangulo {

    public function setLargura(float $largura): void {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function setAltura(float $altura): void {
        $this->largura = $altura;
        $this->altura = $altura;
    }
}
```

Então aqui na nossa índex muito depois da nossa aplicação nós podemos sentar com um valor com o outro e esse valor citado será utilizado como base para o outro e vice versa. Então por exemplo vou retirar aqui a largura ao sentar a altura estou definindo que 5 será utilizada tanto para altura quanto para a largura ok o inverso se nós utilizasse mos aqui a largura seria equivalente ao passar aqui de dez para a largura. Nós estaríamos definindo que a largura seria 10 a altura também 10. Então aqui nós podemos sentar à altura como sendo 5 portanto com o retorno esperado de 7 área. Lembrando que esse método está sendo herdado aqui de retângulo 5 vezes 5. Portanto 25. Salvar esse script vamos voltar aqui no browser. Vou atualizar tá lá. 

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AppPoligonos\Quadrado;
use AppPoligonos\Retangulo;

$retangulo = new Retangulo();
$retangulo->setLargura(5);
$retangulo->setAltura(10);
echo '<h3?>Área do Retângulo: ' . $retangulo->getArea() . ' </h3>';

echo '<hr>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);
echo '<h3?>Área do Quadrado: ' . $quadrado->getArea() . ' </h3>';
```

Repare que a área do quadrado está correta. 25. 

Retorno

```text
Área do Retângulo: 50
Área do Quadrado: 25
```

Do ponto de vista de abstração e implementação dos objetos dentro da nossa aplicação parece estar fazendo sentido e de fato funciona. Porém o LSP ele basicamente diz que uma classe filha deve poder ser utilizada num lugar da classe pai sem que haja qualquer erro. Na próxima aula nós vamos explorar um pouco mais isso e aí você verá de forma bastante clara de que modo o LSP ferido então até a próxima aula.

## 25. Projeto Polígonos - Testando a Substituição de Tipos

## 26. Entendendo o Liskov Substitution Principle

## 27. Refactoring do Projeto - Aplicando o Princípio na Prática

## Implementação Final Completa

```php
```

```php
```

## Comandos

```bash
php ../composer.phar init
php ../composer.phar install
php -S localhost:8000
```
