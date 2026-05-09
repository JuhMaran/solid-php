# DIP - Dependency Inversion Principle (Princípio da Inversão de Dependência)

## 33. Iniciando o Projeto Mensageiro

Muito bem dando continuidade ao estudo dos princípios SOLID. A partir dessa aula nós vamos falar sobre Dependency Inversion Principle ou em português Princípio da Inversão de Dependência ou simplesmente DIP. Mas antes de entrarmos na parte teórica e prática desse princípio nessa aula nós vamos nos concentrar na inicialização do projeto que será a base para os nossos estudos. O projeto que vamos desenvolver ao longo dessa sessão será o projeto mensageiro. Então vamos lá vou acessar o diretório `SOLID` de vou criar um novo diretório chamado `app_mensageiro`. Muito bem e aí vou copiar aqui esse endereço vamos abrir aqui no CMD e através do Composer nós vamos iniciar esse projeto vou teclar Enter, aqui para avançar na configuração do projeto aqui no autor vou colocar o meu nome e o meu contato e também vamos seguir aqui teclando a entra aqui nas configurações de instalação das dependências, vou dizer que não. E aí vamos confirmar a geração do composer.json. Na sequência vamos acessar aqui o nosso projeto através de um editor de texto de código Fontes. Vou utilizar aqui o VSCode vou adicionar esse diretório à nossa área de trabalho aqui está vamos configurar aqui no composer.json o nosso autoload. Vou criar o diretório `src`, fechar o arquivo composer.json e aqui através da linha de comando Vamos executar a instrução `php ../composer.phar install` e aí é só aguardar alguns instantes, instalação realizada com sucesso. Vamos voltar aqui no nosso projeto para criar o `index.php` que fará o required do autoload. Vamos da um `echo` na mensagem `Funcionando!`, de volta ao CMD, vamos executar o comando `php -S localhost:8000` para servir a nossa aplicação mensageiro e aí através do browser vamos acessar a aplicação instalada no nosso projeto portanto está iniciado então até a próxima aula.

* index.php

```php
<?php
require __DIR__ . '/vendor/autoload.php';
echo 'Funcionando!';
```

* composer.json

```json
{
    "name": "julia/app_mensageiro",
    "autoload": {
        "psr-4": {
            "AppMensageiro\\": "src/"
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

## 34. Projeto Mensageiro - Implementando os Componentes da Aplicação (parte 1)

* `Mensageiro`
  * `enviarToken()`
* `Email`
  * `enviar()`

Dando continuidade ao desenvolvimento do projeto mensageiro nessa nós vamos trabalhar no desenvolvimento das classes mensageiro e e-mail. Um detalhe importante aqui é o seguinte nós não faremos as implementações de fato das funcionalidades de envio de e-mail. Nós vamos apenas criar métodos sem a implementação da Lógica em si, mas que nos possibilite ter um nível prático da teoria que estamos utilizando. A ideia do projeto do mensageiro é semelhante ao recurso de envio de tokens por e-mail ou SMS para permitir a autenticação de dois fatores para usuários dentro de um determinado sistema onde mesmo com o usuário e senha a aplicação exige um token de validação. Esse tipo de recurso ainda é bastante utilizado por bancos para aumentar o nível de segurança das transações dentro dos sistemas. Então a ideia é análoga. Mas novamente, nós não vamos chegar no nível de implementação das funcionalidades. Nós vamos avançar apenas até o nível necessário para que a teoria da inversão de dependência seja possível ser aplicada na prática. Então está nessa aula, nós vamos começar aqui de olho no SRP (Princípio da Responsabilidade Única) e aí conforme formos avançado no momento certo você entenderá onde o princípio de inversão de dependência será ferido. Na sequência nós vamos corrigir isso. Então voltando aqui para o nosso código dentro do diretório `src`, eu vou criar os arquivos `Mensageiro.php` e `Email.php`. A classe Mensageiro, será responsável por coordenar de fato o método de envio da mensagem. Nesse caso por e-mail, mas nós poderíamos estender isso. Nós poderíamos ter métodos de envio de notificações por exemplo por SMS ou por WhatsApp ou por qualquer outro método que surgisse no futuro. Então repare que nós estamos trabalhando com o SRP. Mas de olho também nós OCP, estamos criando uma classe para tornar a nossa aplicação fechada para modificações mais aberta para expansões. Então vamos lá podemos definir aqui o `namespace`, `class Mensageiro {}`, teremos um método público que será o `enviarToken()`, será um método sem retorno (`void`). Vamos criar aqui a instância de um objeto, que será o objeto Email. Vamos implementar a classe Email, definindo o `namespace`, e nessa classe teremos outro método público que será o método `enviar()`. Vamos adicionar `echo` na mensagem `'E-mail: Seu token é 555-333'`, por exemplo. Ilustrando aqui, que o e-mail teria sido enviado se esse método tivesse sido chamado corretamente. Retornando na classe `Mensageiro`, vamos adicionar ao atributo `$obj` o `new Email();` e na sequência executar esse método `$obj->enviar();`. Para usar a classe `Email`, é necessário adicionar o importe `use AppMensageiro\Email;`. No arquivo `index.php`, adicionar a importação `use AppMensageiro\Mensageiro;`. Na sequência vou criar uma variável chamada `$msg`, por exemplo que vai receber `new Mensageiro();`, por fim, vamos executar o método `enviarToken()` que é o método da classe Mensageiro responsável por disparar esse token dependendo do método utilizado na nossa aplicação, nesse momento apenas por e-mail, mas já preparados aqui caso a nossa aplicação cresça, caso outros métodos de envio também sejam implementados futuramente. Então aqui nós temos um método de `enviarToken()` que será reutilizado aqui no `index`. Vamos testar aqui no browser. Tá lá. Por enquanto tudo funcionando. A nossa classe está seguindo um princípio importante que é o de responsabilidade única mas nós ainda temos muitos desafios pela frente. Então até a próxima aula.

* Email.php

```php
<?php
namespace AppMensageiro;
class Email {
    public function enviar(): void {
        echo 'E-mail: Seu token é 555-333';
    }
}
```

* Mensageiro.php

```php
<?php
namespace AppMensageiro;
use AppMensageiro\Email;
class Mensageiro {
    public function enviarToken(): void {
        $obj = new Email();
        $obj->enviar();
    }
}
```

* index.php

```php
<?php
require __DIR__ . '/vendor/autoload.php';
use AppMensageiro\Mensageiro;
$msg = new Mensageiro();
$msg->enviarToken();
```

* Resultado via browser:

```text
E-mail: Seu token é 555-333
```

## 35. Projeto Mensageiro - Implementando os Componentes da Aplicação (parte 2)

* Classe `Mensageiro`
  * `canal`
  * `enviarToken()`
* Interface `IMensagem`
  * `enviar()`
* Classe `Email` --implements--> `IMensagem`
  * `enviar()`
* Classe `Sms` --implements--> `IMensagem`
  * `enviar()`

Dando continuidade ao desenvolvimento do projeto mensageiro nessa aula nós vamos aumentar os requisitos do nosso projeto para deixá-lo um pouco mais complexo. Nós vamos implementar um novo canal de comunicação que poderá ser utilizado pelo mensageiro para enviar os tokens. Esse novo canal será o SMS. E claro nós vamos aplicar aqui todos os princípios que aprendemos ao longo desse treinamento. Então vamos lá voltando aqui no código. Eu vou criar uma nova classe chamada `Sms.php`:

```php
<?php
namespace AppMensageiro;
class Sms {
    public function enviar(): void {
        echo 'SMS: Seu token é 888-333';
    }
}
```

Muito bem. Repare que tanto o `Sms` quanto o `Email` que eles possuem o método `enviar()`. Qualquer canal que seja implementado dentro da nossa aplicação que tenha o propósito de enviar token precisará implementar esse método `enviar()`. Então nós precisamos garantir que as classes que habilitaram esses canais de comunicação sempre implementem esse método. Pra fazer isso pra estabelecer esse contrato. Essa regra para todas as classes desse tipo, nós vamos criar uma interface. Dessa forma essa interface será implementada por essas classes obrigando que os respectivos métodos da interface sejam implementados pelas classes. Vamos criar mais um script chamado `IMensagemToken.php`

* Definir o namespace
* Criar a interface `IMensagemToken`
* Assinatura do método público `enviar()`. Todos os métodos de uma interface são públicos

```php
<?php
namespace AppMensageiro;
interface IMensagemToken {
    public function enviar(): void;
}
```

Na classe `Sms.php` nós faremos a implementação dessa interface. Como a interface faz parte do `namespace AppMensageiro;`, não é necessário importar, como ambos os arquivos estão no mesmo espaço, portanto elas se enxergam. 

```php
<?php
namespace AppMensageiro;
class Sms implements IMensagemToken {
    public function enviar(): void {
        echo 'SMS: Seu token é 888-333';
    }
}
```

Na classe `Email.php` iremos implementar a interface, como foi feito no `Sms`.

```php
<?php
namespace AppMensageiro;
class Email implements IMensagemToken {
    public function enviar(): void {
        echo 'E-mail: Seu token é 555-333';
    }
}
```

Se atualizar a aplicação, no navegador, observe que não haverá erro nenhum.

```text
E-mail: Seu token é 555-333
```

Porque a class `Email` está implementando corretamente o método `enviar()` definido na interface. O próximo passo seria testar o SMS, além do canal e-mail, o canal sms, para que nossa aplicação se mantenha aberta para expansão, nós precisamos fazer algumas modificações na classe Mensageiro. Então vamos criar um atributo privado, chamado `canal`, implementar os métodos `get` e `set`.

```php
<?php
namespace AppMensageiro;
use AppMensageiro\Email;
class Mensageiro {
    private $canal;
    public function getCanal(): string {
        return $this->canal;
    }
    public function setCanal(string $canal): void {
        $this->canal = $canal;
    }
    public function enviarToken(): void {
        $obj = new Email();
        $obj->enviar();
    }
}
```

No `index.php` após a instância da classe, ou seja, na hora de criar o objeto `Mensageiro`, nós vamos precisar informar, também, qual será o canal que será utilizado para enviar o token. O `$msg` fará o envio do token via e-mail e `$msg2` fará o envio do token via SMS. O método `enviarToken()` precisará lidar com isso. 

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AppMensageiro\Mensageiro;

// ----- canal e-mail -----
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br>'; // quebra de linha para facilitar a leitura

// ----- canal sms -----
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
```

Então aqui mensageiro nós precisamos recuperar o `canal` que será utilizado para determinar qual classe fará o trabalho para nós. Caso novas classes sejam criadas, como por exemplo `WhatsApp` ou `PushNotification`. Então bastaria determinar o canal para que o mensageiro utilizasse corretamente a classe que será implementada não através de uma alteração de código, mas sim através de uma expansão de código, através da criação de um novo tipo que trataria isso. No método `enviarToken()`, na classe `Mensageiro`, vamos criar uma variável chamada `$classe` que vai receber o path de onde os tipos que podem ser utilizados para enviar email estão, ou seja, está em `\AppMensageiro\\`, vamos utilizar o `ucfirst()` para recuperar `($this->getCanal())` para que com base na informação definida no `setCanal()` do arquivo `index.php`, seja possível instanciar a classe correta. Na classe `Mensageiro.php`, basta criar uma variável que irá receber a instância dessa classe. E na sequência vamos executar o método `enviar()`, existente dentro de `$classe`, inclusive, obrigado devido a interface que está sendo implementada, que diz 'classes desse tipo precisam ter um método `enviar()`. Vamos incluir `echo $classe;` para que seja possível acompanhar com mais detalhe.

```php
<?php
namespace AppMensageiro;
use AppMensageiro\Email;
class Mensageiro {
    private $canal;
    public function getCanal(): string {
        return $this->canal;
    }
    public function setCanal(string $canal): void {
        $this->canal = $canal;
    }
    public function enviarToken(): void {
        $classe = 'AppMensageiro\\' . ucfirst($this->canal);
        echo $classe;
        echo '<br>'; // quebra de linha para facilitar a leitura
        $obj = new $classe();
        $obj->enviar();
    }
}
```

Retorno via navegador:

```text
AppMensageiro\Email
E-mail: Seu token é 555-333
AppMensageiro\Sms
SMS: Seu token é 888-333
```

Utilizou a classe `Email` e executou até enviar corretamente, na sequência utilizou a classe SMS e chamou o método de SMS corretamente. Notificou mais fácil. Temos uma aplicação que respeita o princípio da responsabilidade única, que respeita o princípio de aberto e fechado que respeita o princípio da substituição de Liskov e se houvessem novas interfaces aqui e para outros propósitos nós iríamos atender também ao princípio da segregação de interface. O que falta agora é descobrir como que esse projeto feriu o Dependency Inversion Principle ou Princípio da Inversão de Dependência, e principalmente como podemos corrigir e quais as vantagens de ficar de olho nesse princípio também. Mas isso é assunto para aproximá la. Então até lá.

## 36. Entendendo o Dependency Inversion Principle

## 37. Refactoring do Projeto - Aplicando o Princípio na Prática