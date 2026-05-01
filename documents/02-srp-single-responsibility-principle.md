# SRP - Single Responsibility Principle (Princípio da Responsabilidade Única)

## Objetivo da Seção

Ensinar, na prática, o **Princípio da Responsabilidade Única (SRP)**:

> Uma classe deve ter apenas um motivo para mudar.

A estratégia da seção é didática:

1. Criar um sistema **sem aplicar SRP**
2. Identificar problemas
3. Refatorar aplicando o princípio
4. Comparar os resultados

## Aula 4 - Iniciando o Projeto

### 4.1 Ideia Principal

Criar a base do projeto de carrinho de compras **sem se preocupar com boas práticas ainda**.

### 4.2 Pontos Importantes

* Projeto em PHP com **Composer**
* Estrutura inicial simples
* Foco: preparar ambiente

### 4.3 Conceito

> Antes de melhorar um código, você precisa ter um código funcional.

## Aula 5 - Configurando o Autoload

### 5.1 Objetivo

### 5.2 Solução

### 5.3 Conceito Importante

### 5.4 Benefício

## Aula 6 - Abstraindo o Carrinho de Compras

### 6.1 Objetivo

Criar a classe `CarrinhoCompra` usando orientação a objetos.

### 6.2 Estrutura Criada

#### Atributos

* `itens`
* `status`
* `valorTotal`

#### Métodos

* `adicionarItem()`
* `exibirItens()`
* `exibirValorTotal()`
* `exibirStatus()`
* `confirmarPedido()`
* `enviarEmailConfirmacao()`
* `validarCarrinho()`

### 6.3 Conceito-Chave: Abstração

Você modela o sistema baseado no mundo real:

* Carrinho tem itens
* Carrinho tem valor
* Carrinho pode ser confirmado

Até aqui, o código fnciona corretamente.

### 6.4 Problema (ainda oculto)

A classe começa a assumir **muitas responsabilidades**.

## Aula 7 - Entendendo o SRP

### 7.1 Conceito Central

> Uma classe deve ter apenas **uma responsabilidade**.

### 7.2 Problema identificado

A classe `CarrinhoCompra` faz:

* Gerenciamento de itens
* Cálculo de valores
* Controle de status do pedido
* Envio de e-mail

### 7.3 Consequência

Ela tem **vários motivos para mudar**:

* Mudança na regra de itens
* Mudança no envio de e-mail
* Mudança no fluxo do pedido

### 7.4 Problema técnico

Isso gera:

* Alto acoplamento
* Baixa coesão
* Dificuldade de manutenção
* Código frágil

### 7.5 Insight importante

> Quanto mais responsabilidades uma classe tem, mais difícil é mantê-la.

## Aula 8 - Início do Refactoring

### 8.1 Objetivo

Começar a aplicar o SRP.

### 8.2 Ação

Separar responsabilidades criando novas classes:

* `Item`
* `Pedido`
* `EmailService`

### 8.3 Conceito importante

> Aplicar SRP geralmente **aumenta o número de classes**, mas melhora a organização.

## Aula 9 - Separação de Responsabilidades

### 9.1 Objetivo

Distribuir corretamente as responsabilidades.

### 9.2 Resultado Final

#### CarrinhoCompra

* Gerenciar itens

#### Item

* Representa um item (descrição + valor)

#### Pedido

* Controla status
* Confirma pedido

#### EmailService

* Envia e-mails

### 9.3 Conceitos fundamentais

#### Coesão

Cada classe faz **uma única coisa bem feita**.

#### Baixo Acoplamento

Classes dependem pouco umas das outras.

## Aula 10 - Integração das Classes

### 10.1 Objetivo

Fazer as classes trabalharem juntas.

### 10.2 Fluxo do Sistema

1. Criar pedido
2. Criar itens
3. Adicionar itens ao carrinho
4. Validar carrinho
5. Confirmar pedido
6. Enviar e-mail

### 10.3 Conceitos aplicados

#### 1. Composição

```text
Pedido → Carrinho → Itens
```

#### 2. Delegação

* `Pedido` delega validação ao `Carrinho`
* `Carrinho` não valida item
* `Item` cuida de si mesmo

#### 3. Encapsulamento

Cada classe controla seus próprios dados

### 10.4 Resultado

Sistema mais:

* Modular
* Organiado
* Flexível

## Aula 11 - Testando as Vantagens do SRP

### 11.1 Mudança proposta

Adicionar validações:

* Item não pode ter valor ≤ 0
* Item não pode ter descrição vazia

### 11.2 Sem SRP

Validação feita em `CarrinhoCompra`

#### Problemas

* Classe cresce demais
* Regra duplicada
* Difícil reaproveitamento

### 11.3 Com SRP

Validação feita em `Item`

#### Benefícios

1. **Local correto da regra**
    A regra pertence ao objeto correto
2. **Reutilização**
    Pode usar validação em qualquer lugar
3. **Manutenção simples**
    Mudou a regra? → altera só `Item`
4. **Código limpo**
    Classes continuam pequenas e focadas

## Conclusão Geral

O que é necessário fixar:

### 1. SRP não é sobre dividir por dividir

É sobre **responsabilidade clara**
  
### 2. Pergunta-chave

> "Por que essa classe mudaria?"

Se houver mais de uma resposta → problema

### 3. Classes devem ser especializadas

| Classe         | Responsabilidade |
| -------------- | ---------------- |
| CarrinhoCompra | Gerenciar itens  |
| Item           | Representar item |
| Pedido         | Controlar pedido |
| EmailService   | Enviar e-mail    |

#### 4. Benefícios reais

* Código mais organizado
* Fácil manutenção
* Alta reutilização
* Menor impacto de mudanças

### Regra prática para o dia a dia

> Se uma classe começa a crescer muito ou “saber demais”, divida ela.