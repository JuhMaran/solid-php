# SRP - Single Responsibility Principle (Princípio da Responsabilidade Única)

Nessas aulas, o curso segue uma abordagem **progressiva**:

1. Primeiro, constrói um sistema simples **sem aplicar SOLID**
2. Depois, analisa esse sistema
3. Por fim, introduz o **SRP (Single Responsibility Principle)** mostrando os problemas reais

## 1. Iniciando o Projeto

### Objetivo

Criar a base do projeto **Carrinho de Compras**, focando apenas em **orientação a objetos**, sem se preocupar ainda com boas práticas.

### Conceitos Principais

#### 1. Separação entre teoria e prática

* Primeiro: construir “do jeito simples”
* Depois: aplicar os princípios SOLID
* Isso permite **comparar antes vs depois**

#### 2. Independência de linguagem

* O exemplo usa PHP
* Mas os conceitos de SOLID são **agnósticos de tecnologia**

#### 3. Uso do Composer

* Gerenciador de dependências do PHP
* Responsável por:
  * organizar o projeto
  * configurar autoload
  * evitar `require` manual em vários arquivos

#### 4. Estrutura inicial

* Criação do projeto via `composer init`
* Geração do arquivo `composer.json`
* Base para organização futura

## 2. Configurando o Autoloader

### Objetivo

Automatizar o carregamento de classes

### Conceito Central: Autoload

#### Sem autoload

Você precisa fazer:

```php
require 'CarrinhoCompra.php';
```

#### Com autoload

Você apenas usa a classe:

```php
$carrinho = new CarrinhoCompra();
```

O sistema carrega automaticamente.

### PSR-4 (Padrão de Autoload)

Mapeamento:

```json
"autoload": {
  "psr-4": {
    "AppCarrinhoCompras\\": "src/"
  }
}
```

#### O que isso significa?

* Tudo dentro de `/src`
* Pertence ao namespace `AppCarrinhoCompras`
* O Composer resolve automaticamente

### Fluxo Correto

1. Configurar: `compose.json`
2. Executar: `composer install` ou `composer dumpautoload`
3. No projeto:
   ```php
   require 'vendor/autoload.php';
   ```

### Insight importante

O autoload:

* **não é SOLID**
* é apenas **infraestrutura**
* prepara o terreno para escrever código php melhor

## 3. Abstração da Classe Carrinho

### Objetivo

Modelar o domínio usando **orientação a objetos**.

### Abstração

Transformar o mundo real em código.

#### Exemplo

Um carrinho tem:

* **Atributos**
  * `itens`
  * `status`
  * `valorTotal`
* **Métodos**
  * `exibirItens()`
  * `adicionarItem()`
  * `exibirValorTotal()`
  * `exibirStatus()`
  * `confirmarPedido()`
  * `enviarEmailConfirmacao()`
  * `validarCarrinho()`

### Lógica Implementada

#### 1. Adicionar Item

* Guarda item + valor
* Atualiza valor total

#### 2. Confirmar Pedido

* Valida se há itens
* Altera status
* Envia e-mail

#### 3. Validação

```php
return count($this->itens) > 0;
```

### Conceito-Chave

#### O código está correto?

Sim.

#### Está bem projetado?

Ainda não.

Esse é o ponto didático da aula.

## 4. Entendendo o SRP

### Definição do SRP

> Uma classe deve ter **apenas um motivo para mudar**.

ou

> Uma classe deve ter **uma única responsabilidade**.

### Análise da Classe Criada

A classe `CarrinhoCompra` parece simples, mas:

#### 🚨 Ela tem múltiplas responsabilidades

#### 1. Carrinho

* Controla estado (status, total)

#### 2. Itens

* Adiciona e gerencia itens

#### 3. Pedido

* Confirma pedido

#### 4. Comunicação

* Envia e-mail

### Problema Central

#### Muitos motivos para mudar

| Mudança            | Afeta a classe? |
| ------------------ | --------------- |
| Regra de cálculo   | Sim             |
| Estrutura de itens | Sim             |
| Processo de pedido | Sim             |
| Envio de e-mail    | Sim             |

### Consequências

#### 1. Alto acoplamento

Tudo está ligado em um único lugar

#### 2. Baixa reutilização

* Quer usar envio de e-mail em outro lugar?
* Teria que usar o carrinho inteiro ❌

#### 3. Dificuldade de testes

* Testar e-mail exige instanciar carrinho
* Testar carrinho dispara e-mail

#### 4. Risco de efeitos colaterais

* Um erro em pedido → quebra e-mail, itens, etc.

### Insight essencial

Mesmo que:

* o código funcione
* seja simples

Ele pode estar mal projetado.

### Ideia central do SRP

Separar responsabilidades:

Em vez de:

```text
CarrinhoCompra
 ├── itens
 ├── pedido
 ├── email
```

Ter algo como:

```text
CarrinhoCompra
Item
Pedido
EmailService
```

