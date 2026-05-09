# Seção 6: ISP - Interface Segregation Principle (Princípio da Segregação de Interface)

* Princípio SOLID:
  * Interface Segregation Principle ou Princípio da Segregação de Interface ou ISP
* Nome do projeto:
  * `app_crm`
* O projeto utiliza:
  * Composer
  * Autoload PSR-4
  * Estrutura básica de aplicação orientada a objetos

## 28. Iniciando o Projeto CRM

Nesta aula, vamos criar o Projeto CRM. Antes de entrarmos na parte de teória e prática do princípio ISP, vamos iniciliar o projeto, o qual será utilizado para praticar esse princípio.

* Estrutura Inicial do Projeto:

```text
solid/
└── app_crm/
    │
    ├── src/
    ├── vendor/
    ├── composer.json
    └── index.php
```

Iniciar o projeto atráves do Composer: `php ../composer.phar init`

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

**app_crm/composer.json**

json
{
    "name": "julia/app_crm",
    "autoload": {
        "psr-4": {
            "AppCrm\\": "src/"
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

* Instalação do Composer: `php ../composer.phar install`

Após as configurações iniciais, vamos criar no diretório `app_crm/` o arquivo `index.php`. Adicionar o `require` do `autoload` do composer. E adicionar `echo` com a mensagem `'Teste ISP'` para verificar se está tudo OK.

```php
<?php

require __DIR__ . '/vendor/autoload.php';

echo 'Teste ISP';
```

Na linha de comando, no diretório `app_crm`, executar o comando: `php -S localhost:8000`. E acessar o navegador e verificar no endereço `http://localhost:8000/` se retorna a mensagem. Retornou e está funcionando corretamente.

```text
Teste ISP
```

O projeto está iniciando. Até a próxima aula.

## 29. Projeto CRM - Implementando os Componentes da Aplicação

![Projeto CRM - Implementando os Componentes da Aplicação](./../images/007_projeto_crm.png)

**Explicação do Slide:** Nessa aula nós daremos continuidade ao desenvolvimento do projeto CRM. Nós vamos trabalhar na construção de alguns componentes da nossa aplicação que ainda não estão diretamente relacionados com o ISP Interface Segregation Principle. Ou seja, vamos apenas estruturar a nossa aplicação para que na próxima aula seja possível entendermos como podemos aplicar o ISP quando estamos trabalhando com interfaces. Nessa aula, portanto, nós não vamos implementar a interface, vamos apenas criar os componentes básicos para começar os nossos testes.

**No código:**

* Criar o diretório `componentes` dentro do diretório `src/`.
* No diretório `src/componentes/`, vamos criar os componentes:
  * `Contrato.php`
  * `Lead.php`
  * `Usuario.php`
  * `Log.php`
  * `Notificacao.php`

Arquivos criados, vamos apenas escrever as classes. Lembrando que não faremos a implementação do CRM em si. Vamos apenas criar alguns componentes e classes para inlustrar melhor o ISP.

* Definir o `namespace` como sendo `AppCrm\componentes;`

Vamos criar as classes:

* ContratoModel
* LeadModel
* UsuarioModel

Essas classes teriam como responsabilidade recuperar os respectivos objetos (Contrato, Lead e Usuario) e manipular esses objetos junto ao banco de dados. Ou seja, aqui teríamos uma interface DAO (Data Access Object), para manipular os objetos da nossa aplicação junto ao banco isolando a responsabilidade desses objetos.

**Sugestão do instrutor:** pesquisar sobre DAO (Data Access Object) para complementar os estudos.

Essas classes Model, vamos criar em outro diretório do projeto. Então, dentro de `src/`, vamos criar um diretório chamado `dao/` e dentro dele vamos criar:

* `ContratoModel.php`
* `LeadModel.php`
* `UsuarioModel.php`

Todas essas classes extenderão a classe BD (banco de dados) que ainda será criada. Vamos definir as classes dentro dos arquivos que nós criamos dentro do diretório `dao/`. Fechar todas as classes e facilitar o entendimento do que estamos fazendo. E dentro do diretório `src/`, vamos criar um script chamado `BD.php`. Essa classe deve ter:

* Um atributo privado de conexão com o banco de dados: `private $conexao;`
* Um método para estabelecer a conexão com o banco de dados: `conectar()`
* Adicionar a lógica
* Ao executar o método `conectar()` uma conexão com o banco de dados seria estabelecida
* Essa conexão (resource) seria atribuído a variável `conexao` da classe `BD.php`
* Adicionar o `namespace`

Os nossos model podem extender a classe `BD.php` para herdar essa característica de conexão. Já que são as classes model que manipulam os respectivos objetos no banco de dados. Em cada um dos models vamos dar `use AppCrm\BD;` para extender essa classe. Adicionar nas classes `ContratoModel`, `LeadModel` e `UsuarioModel`. Feito isso nós já temos aqueles objetos pra começar a testar o ISP. Mas antes de começar a fazer esses testes antes de implementar a interface que vai ser o alvo de um entendimento a respeito do que é o ISP vamos apenas fazer alguns testes aqui na nossa aplicação. Agora que os modelos extenderam a classe DB, que por sua vez possui a lógica de conexão com o banco. No arquivo `index.php` vamos incluir o `use` de cada um dos modelos.

```php
use AppCrm\dao\ContratoModel;
use AppCrm\dao\LeadModel;
use AppCrm\dao\UsuarioModel;
```

Adicionar o atributo `$contratoModel` e verificar se está instanciando corretamente.

```php
$contratoModel = new ContratoModel();
print_r($contratoModel);
echo '<br>';

// fazer o mesmo com LeadModel e UsuarioModel
```

Retorno via navegador:

```text
AppCrm\dao\ContratoModel Object ( [conexao:AppCrm\BD:private] => )
AppCrm\dao\LeadModel Object ( [conexao:AppCrm\BD:private] => )
AppCrm\dao\UsuarioModel Object ( [conexao:AppCrm\BD:private] => )
```

Os três objetos foram recuperados corretamente e estendem a classe BD, portanto herdam os atributos e métodos. Como dito anteriormente, nós montamos apenas os componentes da nossa aplicação, para começar a usar esses componentes desses objetos dentro de um contexo que faça sentindo a utilização de uma interface para nós estudarmos a fundo o ISP. Até a próxima aula.

## 30. Projeto CRM - Implementando a Interface

## 31. Entendendo a Interface Segregation Principle

## 32. Refactoring do Projeto - Aplicando o Princípio na Prática

## Estrutura Final

```text
solid/
└── app_crm/
    ├── src/
    │   ├── componentes/
    │   │   ├── Contrato.php
    │   │   ├── Lead.php
    │   │   ├── Log.php
    │   │   ├── Notificacao.php
    │   │   └── Usuario.php        
    │   ├── dao/    
    │   │   ├── ContratoModel.php
    │   │   ├── LeadModel.php
    │   │   └── UsuarioModel.php     
    │   └── BD.php
    ├── vendor/
    ├── composer.json
    └── index.php
```

## Código Final Implementado

* `componentes/Contrato.php`

```php
<?php
namespace AppCrm\componentes;
class Contrato {}
```

* `componentes/Lead.php`

```php
<?php
namespace AppCrm\componentes;
class Lead {}
```

* `componentes/Log.php`

```php
<?php
namespace AppCrm\componentes;
class Log {}
```

* `componentes/Notificacao.php`

```php
<?php
namespace AppCrm\componentes;
class Notificacao {}
```

* `componentes/Usuario.php`

```php
<?php
namespace AppCrm\componentes;
class Usuario {}
```

* `dao/ContratoModel.php`

```php
<?php
namespace AppCrm\dao;
use AppCrm\BD;
class ContratoModel extends BD {}
```

* `dao/LeadModel.php`

```php
<?php
namespace AppCrm\dao;
use AppCrm\BD;
class LeadModel extends BD {}
```

* `dao/UsuarioModel.php`

```php
<?php
namespace AppCrm\dao;
use AppCrm\BD;
class UsuarioModel extends BD {}
```

* `BD.php`

```php
<?php
namespace AppCrm;
class BD {
    private $conexao;
    public function conectar() {
      // add lógica
    }
}
```

* `index.php`

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use AppCrm\dao\ContratoModel;
use AppCrm\dao\LeadModel;
use AppCrm\dao\UsuarioModel;

$contratoModel = new ContratoModel();
print_r($contratoModel);
echo '<br>';

$leadModel = new LeadModel();
print_r($leadModel);
echo '<br>';

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo '<br>';

// echo 'Teste ISP';
```