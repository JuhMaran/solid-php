# SOLID

Projeto desenvolvido em PHP para estudo e aplicação dos princípios SOLID apresentados no curso [SOLID - Os 5 Princípios para as Boas Práticas da POO](https://www.udemy.com/course/solid-os-5-principios-para-as-boas-praticas-da-poo/).

O objetivo deste repositório é demonstrar, de forma prátia, como aplicar boas práticas da Programação Orientada a Objetos (POO) na construção de sistemas mais organizados, reutilizáveis, testáveis e sustentáveis.

O código apresentado possui finalidade exclusivamente didática e foi desenvolvido para exemplificar os conceitos abordados durante as aulas.

## Visão Geral

Os princípios SOLID foram formalizados por Robert C. Martin e posteriormente popularizados por Michael Feathers.

Esses princípios ajudam a reduzir acoplamento, aumentar coesão e melhorar a capacidade de evolução de sistemas orientados a objetos.

### Objetivos do Projeto

* Demonstrar os princípios SOLID na prática
* Aplicar refatoração orientada a boas práticas
* Melhorar organização arquitetural
* Reduzir acoplamento entre componentes
* Facilitar manutenção e testes automatizados
* Construir código extensível e reutilizável

## Princípios SOLID

| Sigla | Princípio                             | Objetivo                                                                           |
| ----- | ------------------------------------- | ---------------------------------------------------------------------------------- |
| S     | SRP — Single Responsibility Principle | Uma classe deve possuir apenas uma responsabilidade                                |
| O     | OCP — Open/Closed Principle           | Entidades devem estar abertas para extensão e fechadas para modificação            |
| L     | LSP — Liskov Substitution Principle   | Subclasses devem substituir suas superclasses sem alterar o comportamento esperado |
| I     | ISP — Interface Segregation Principle | Interfaces devem ser específicas e coesas                                          |
| D     | DIP — Dependency Inversion Principle  | Classes devem depender de abstrações e não de implementações                       |

## Estrutura do Projeto

```text
solid-php/
│
├── app_carrinho_compras_b/
├── app_carrinho_compras/
├── app_crm/
├── app_etl/
├── app_etl_b/
├── app_mensageiro/
├── app_poligonos/
├── documents/
├── images/
├── .gitignore
├── README.md
└── composer.phar
```

## Tecnologias Utilizadas

### Linguagem e Ambiente

* PHP 8+
* Composer
* PHPUnit
* PSR-4 Autoload

### Conceitos Aplicados

* Programação Orientada a Objetos
* SOLID
* Refactoring
* Injeção de Dependência
* Polimorfismo
* Encapsulamento
* Abstrações
* Interfaces
* Testes Automatizados

## Como Executar o Projeto

### Pré-requisitos

* PHP 8 ou superior
* Composer instalado

### Clonar o Repositório

```bash
git clone https://github.com/JuhMaran/solid-php.git
```

### Acessar o Diretório

```bash
cd solid-php
cd solid-php/app_crm
```

### Inicializar o Composer

```bash
cd solid-php/app_crm
php ../composer.phar init
```

### Instalar Dependências

```bash
cd solid-php/app_crm
php ../composer.phar install
```

### Gerar Autoload

```bash
composer dump-autoload
```

### Executar um Projeto

Exemplo:

```bash
php -S localhost:8000
```

### Executar Testes

```bash
vendor\bin\phpunit.bat test\itemTest.php
```

## Arquitetura Geral

```mermaid
flowchart TD

A[Problema Inicial]
--> B[Código Acoplado]

B --> C[Refatoração]

C --> D[Aplicação do SOLID]

D --> E[Baixo Acoplamento]
D --> F[Alta Coesão]
D --> G[Testabilidade]
D --> H[Extensibilidade]
```

## SRP - Single Responsability Principle

### Objetivo

Demonstrar como separar responsabilidades de uma classe excessivamente acoplada.

### Cenário

Inicialmente, a classe `CarrinhoCompra` possuía múltiplas responsabilidades:

* gerenciamento de itens;
* validação;
* controle de pedido;
* envio de e-mails.

Isso tornava o sistema difícil de manter e evoluir.

### Estrutura Refatorada

```mermaid
classDiagram

class CarrinhoCompra {
    +adicionarItem()
    +getItens()
}

class Item {
    +descricao
    +valor
    +itemValido()
}

class Pedido {
    +confirmarPedido()
}

class EmailService {
    +enviar()
}

CarrinhoCompra --> Item
Pedido --> CarrinhoCompra
Pedido --> EmailService
```

### Conceitos Fundamentais

#### Baixo Acoplamento

Mudanças em uma classe devem impactar minimamente as demais.

#### Coesão

Componentes devem possuir responsabilidades claras e específicas.

#### Responsabilidade Única

Cada classe deve possuir apenas um motivo para mudar.

### Benefícios Obtidos

* Código mais organizado
* Melhor manutenção
* Facilidade de reutilização
* Maior previsibilidade

### Testes Automatizados

#### Objetivo

Introduzir testes unitários automatizados utilizando PHPUnit.

#### Estrutura Básica

```text
tests/
├── ItemTest.php
└── CarrinhoCompraTest.php
```

#### Fluxo dos Testes

```mermaid
flowchart LR

A[Classe]
--> B[Teste Unitário]
--> C[Asserções]
--> D[Validação do Comportamento]
```

### Conceitos Aplicados

* Testes unitários
* Asserções
* Data Providers
* TDD
* Isolamento de comportamento

### Benefícios

* Redução de regressões
* Maior confiabilidade
* Facilidade de refatoração
* Facilidade de refatoração
* Validação contínua

## OCP — Open/Closed Principle

### Objetivo

Demonstrar como construir sistemas extensíveis sem modificar código estável.

### Projeto ETL

O projeto realiza:

* leitura de arquivos CSV;
* leitura de arquivos TXT;
* transformação de dados;
* organização de estruturas.

### Problema Inicial

O sistema utilizava múltiplos condicionais:

```text
if csv
if txt
```

Cada novo formato exigia alteração de código existente.

### Estrutura Refatorada

```mermaid
classDiagram

class Leitor {
    +lerArquivo()
}

class Arquivo {
    +getDados()
}

class Csv {
    +lerArquivo()
}

class Txt {
    +lerArquivo()
}

class Xlsx {
    +lerArquivo()
}

Arquivo <|-- Csv
Arquivo <|-- Txt
Arquivo <|-- Xlsx

Leitor --> Arquivo
```

### Conceitos Fundamentais

#### Extensibilidade

O sistema cresce adicionando novas classes.

#### Refatoração

Melhoria estrutural sem alterar comportamento externo.

#### Polimorfismo

Múltiplas implementações compartilham o mesmo contrato.

### Benefícios Obtidos

* Menos alterações em código estável
* Maior flexibilidade
* Redução de acoplamento
* Facilidade de expansão

## LSP — Liskov Substitution Principle

### Objetivo

Demonstrar problemas causados por heranças inadequadas.

### Cenário

O exemplo clássico de:

* `Retangulo`
* `Quadrado`

é utilizado para mostrar que nem toda relação válida no mundo real é adequada para POO.

### Violação do LSP

```mermaid
flowchart TD

A[Retangulo]
--> B[Quadrado]

B --> C[Comportamento Alterado]

C --> D[Resultado Inesperado]
```

### Problema

A subclasse `Quadrado` alterava o comportamento esperado da classe `Retangulo`.

Isso quebrava previsibilidade e consistência.

### Estrutura Corrigida

```mermaid
classDiagram

class Poligono

class Retangulo {
    +calcularArea()
}

class Quadrado {
    +calcularArea()
}

Poligono --> Retangulo
Poligono --> Quadrado
```

### Conceitos Fundamentais

#### Substituição Segura

Subclasses devem preservar contratos da superclasse.

#### Contratos de Comportamento

A herança deve manter previsibilidade.

#### Polimorfismo

Objetos devem ser utilizados de forma intercambiável sem efeitos colaterais inesperados.

### Benefícios Obtidos

* Arquitetura previsível
* Redução de bugs
* Melhor extensibilidade
* Menor acoplamento inadequado

## ISP — Interface Segregation Principle

### Objetivo

Demonstrar como interfaces excessivamente grandes geram acoplamento desnecessário.

### Problema Inicial

Uma interface única obrigava classes a implementar métodos que não utilizavam.

```mermaid
flowchart TD

A[ICadastro]
--> B[salvar]
A --> C[registrarLog]
A --> D[enviarNotificacao]
```

### Estrutura Refatorada

```mermaid
flowchart TD

A[ICadastro]
--> B[salvar]

C[ILog]
--> D[registrarLog]

E[INotificacao]
--> F[enviarNotificacao]
```

### Aplicação nas Classes

```mermaid
classDiagram

class ICadastro {
    <<interface>>
    +salvar()
}

class ILog {
    <<interface>>
    +registrarLog()
}

class INotificacao {
    <<interface>>
    +enviarNotificacao()
}

class ContratoModel
class LeadModel
class UsuarioModel

ICadastro <|.. ContratoModel

ICadastro <|.. LeadModel
INotificacao <|.. LeadModel

ICadastro <|.. UsuarioModel
ILog <|.. UsuarioModel
INotificacao <|.. UsuarioModel
```

### Conceitos Fundamentais

#### Interfaces Coesas

Interfaces devem possuir responsabilidades específicas.

#### Especialização

Cada classe implementa apenas o que realmente utiliza.

#### Baixo Acoplamento

Dependências desnecessárias devem ser evitadas.

### Benefícios Obtidos

* Melhor organização
* Interfaces reutilizáveis
* Redução de implementações inúteis
* Código mais limpo

## DIP — Dependency Inversion Principle

### Objetivo

Demonstrar como depender de abstrações ao invés de implementações concretas.

### Problema Inicial

A classe `Mensageiro` criava diretamente objetos concretos:

```php
new Email()
```

Isso gerava forte acoplamento.

### Estrutura Refatorada

```mermaid
classDiagram

class IMensagemToken {
    <<interface>>
    +enviar()
}

class Mensageiro {
    -canal : IMensagemToken
    +enviarToken()
}

class Email {
    +enviar()
}

class Sms {
    +enviar()
}

class WhatsApp {
    +enviar()
}

IMensagemToken <|.. Email
IMensagemToken <|.. Sms
IMensagemToken <|.. WhatsApp

Mensageiro --> IMensagemToken
```

### Fluxo de Injeção de Dependência

```mermaid
sequenceDiagram

participant App
participant Mensageiro
participant Email

App->>Mensageiro: new Mensageiro(new Email())
Mensageiro->>Email: enviar()
```

### Conceitos Fundamentais

#### Inversão de Dependência

Módulos de alto nível devem depender de abstrações.

#### Injeção de Dependência

Dependências devem ser fornecidas externamente.

#### Interfaces

Garantem contratos padronizados.

### Benefícios Obtidos

* Baixo acoplamento
* Alta flexibilidade
* Facilidade de testes
* Melhor manutenção
* Maior extensibilidade

## Relação Entre os Princípios

```mermaid
flowchart LR

SRP --> OCP
OCP --> LSP
LSP --> ISP
ISP --> DIP

DIP --> ArquiteturaLimpa
```

## Principais Conceitos do Projeto

### Abstrações

Interfaces e contratos reduzem dependências entre comportamentos.

### Acoplamento

Dependências devem ser reduzidas sempre que possível.

### Coesão

Cada classe deve possuir responsabiliade clara e específica.

### Extensibilidade

O sistema deve crescer sem necessidade de modificar código estável.

### Refatoração

Melhor estrutura interna sem alterar comportamento externo.

### Testabilidade

Classes desacopladas são mais fáceis de testar.

## Resultado Final

Ao aplicar os princípios SOLID, o projeto evolui de uma estrutura rígida para uma arquitetura mais:

* modular;
* extensível;
* sustentável;
* previsível;
* reutilizável;
* testável.

## SRP — Single Responsibility Principle

O SRP define que uma classe deve possuir apenas uma responsabilidade e, consequentemente, apenas um motivo para mudar. O objetivo é evitar classes excessivamente grandes e acopladas, tornando o sistema mais organizado, reutilizável e fácil de manter. No projeto, a responsabilidade do carrinho de compras foi separada entre classes específicas, como `CarrinhoCompra`, `Item`, `Pedido` e `EmailService`.

## Projeto SRP — Carrinho de Compras

O projeto demonstra a evolução de uma aplicação inicialmente centralizada em uma única classe para uma estrutura mais modular. O sistema foi refatorado para separar responsabilidades de gerenciamento de itens, controle de pedidos, validações e envio de e-mails, aplicando o princípio da responsabilidade única.

## OCP — Open/Closed Principle

O OCP estabelece que entidades de software devem estar abertas para extensão, mas fechadas para modificação. Isso significa que novos comportamentos devem ser adicionados sem alterar código já estável. O objetivo é reduzir riscos de regressão e facilitar a evolução da aplicação.

## Projeto OCP — ETL

O projeto ETL demonstra como criar um sistema extensível para leitura de arquivos. Inicialmente, o sistema utilizava condicionais para tratar CSV e TXT. Após a refatoração, cada formato passou a possuir sua própria classe, permitindo adicionar novos formatos como XLSX ou XML sem modificar o código existente.

## LSP — Liskov Substitution Principle

O LSP define que subclasses devem poder substituir suas superclasses sem alterar o comportamento esperado do sistema. O foco do princípio é garantir previsibilidade, consistência e contratos corretos entre herança e comportamento.

## Projeto LSP — Polígonos

O projeto utiliza o exemplo clássico de `Retangulo` e `Quadrado` para demonstrar problemas de herança inadequada. A implementação inicial violava o comportamento esperado da superclasse. A solução foi remover a herança incorreta e reorganizar as classes utilizando abstrações mais adequadas.

## ISP — Interface Segregation Principle

O ISP afirma que classes não devem ser obrigadas a implementar métodos que não utilizam. O princípio incentiva a criação de interfaces pequenas, específicas e coesas, reduzindo acoplamento e implementações desnecessárias.

## Projeto ISP — CRM

O projeto CRM demonstra os problemas de uma interface excessivamente grande. Inicialmente, diferentes classes eram obrigadas a implementar métodos inúteis. Após a refatoração, a interface foi dividida em contratos menores e especializados, permitindo que cada classe utilize apenas os comportamentos necessários.

## DIP — Dependency Inversion Principle

O DIP estabelece que módulos de alto nível não devem depender de implementações concretas, mas de abstrações. O objetivo é reduzir acoplamento, aumentar flexibilidade e facilitar manutenção e testes.

## Projeto DIP — Mensageiro

O projeto Mensageiro demonstra a aplicação de abstrações e injeção de dependência em um sistema de envio de mensagens. Inicialmente, a classe principal dependia diretamente de implementações como `Email` e `Sms`. Após a refatoração, o sistema passou a depender de interfaces, permitindo adicionar novos canais sem alterar a lógica principal.

## Referências

* [Curso SOLID - Os 5 Princípios para as Boas Práticas da POO](https://www.udemy.com/course/solid-os-5-principios-para-as-boas-praticas-da-poo/)
* [Clean Architecture](url)
* [Clean Code](url)