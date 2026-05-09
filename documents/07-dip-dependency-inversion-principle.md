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

Dando continuidade ao desenvolvimento do projeto mensageiro na sala nós vamos trabalhar no desenvolvimento

das classes mensageiro e e-mail.

Um detalhe importante aqui é o seguinte nós não faremos as implementações de fato das funcionalidades

de envio de e-mail.

Nós vamos apenas criar métodos sem a implementação da Lógica em si mas que nos possibilite ter um nível

prático da teoria que estamos utilizando.

A ideia do projeto do mensageiro é semelhante ao recurso de envio de tokens por e-mail ou SMS para permitir

a autenticação de dois fatores para usuários dentro de um determinado sistema onde mesmo com o usuário

e senha a aplicação exige um token de validação.

Esse tipo de recurso ainda é bastante utilizado por bancos para aumentar o nível de segurança das transações

dentro dos sistemas.

Então a ideia é análoga.

Mas novamente nós não vamos chegar no nível de implementação das funcionalidades.

Nós vamos avançar apenas até o nível necessário para que a teoria da inversão de dependência seja possível

ser aplicada na prática.

Quem está na sala.

Nós vamos começar aqui de olho no CRP.

A responsabilidade é única e aí conforme formos avançado no momento certo você entenderá onde o princípio

de inversão de dependência será ferido.

Na sequência nós vamos corrigir isso.

Então voltando aqui para o nosso código dentro do diretório.

RC Eu vou criar os arquivos mensageiro ponto PHP

meio ponto PHP a classe mensageiro.

Ela vai ser responsável por coordenar de fato o método de envio da mensagem.

Nesse caso por e-mail mas nós poderíamos estender isso.

Nós poderíamos ter métodos de envio de notificações por exemplo por SMS ou por WhatsApp ou por qualquer

outro método que surgisse no futuro.

Então repare que nós estamos trabalhando com o Sr IP.

Mas de olho também nós CP estamos criando uma classe para tornar a nossa aplicação fechada para modificações

mais aberta para expansões.

Então vamos lá

podemos definir aqui Honey uma espécie

less mensageiro e nós teremos aqui um médico público que será ao enviar Tolkien.

Será um método sem retorno.

Nós vamos criar aqui já a instância de um objeto que será objeto e meio como ainda não está criado.

Vou apenas ilustrar aqui e aí vamos passar aqui para o e-mail.

Vamos definir uma espécie

aqui no caso do e-mail.

Nós teremos um outro mas do público que será o método a enviar.

E aí meus olhos darão a da mensagem Mail seu toque é 5 5 5 3 3 3 por exemplo ilustrando aqui que o e-mail

teria sido enviado se esse matuto tivesse sido chamado corretamente.

Nós já temos a classe meio vamos voltar aqui pra classe modificação.

Então nós precisamos dar um milhão e meio na sequência executar esse método e enviar para utilizar um

e-mail aqui no contexto da classe mensageiro nós precisamos importar a classe e meio não há nenhuma

espécie SRC nós vamos dar ao Yes aqui de SC é meio perfeito e aqui no índex a mesma coisa lá vamos darão

e hoje quem SRC Barra mensageiro na sequência vou criar uma variável chamada MSG por exemplo que vai

receber um anel mensageiro e por fim nós vamos executar o mate enviar token que é o método da classe

mensageiro responsável por disparar e citou que dependendo do método utilizado na nossa aplicação nesse

momento apenas por e-mail mas já estamos preparados aqui caso a nossa aplicação cresça caso outros métodos

de envio também sejam implementados futuramente.

Então aqui nós temos um método de enviar token que será reutilizado aqui no index.

Aqui escrevi errado.

Agora sim vamos testar aqui no browser. Tá lá. Por enquanto tudo funcionando. A nossa classe está seguindo um princípio importante que é o de responsabilidade única mas nós ainda temos muitos desafios pela frente. Então até a próxima aula.

## 35. Projeto Mensageiro - Implementando os Componentes da Aplicação (parte 2)

## 36. Entendendo o Dependency Inversion Principle

## 37. Refactoring do Projeto - Aplicando o Princípio na Prática