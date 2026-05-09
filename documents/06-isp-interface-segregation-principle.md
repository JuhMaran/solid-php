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

## 30. Projeto CRM - Implementando a Interface

## 31. Entendendo a Interface Segregation Principle

## 32. Refactoring do Projeto - Aplicando o Princípio na Prática
