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
