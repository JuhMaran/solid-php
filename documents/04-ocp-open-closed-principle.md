# OCP - Open/Closed Principle

_Princípio Aberto/Fechado_

## Visão Geral

Nesta seção do curso, o foco é o segundo princípio do SOLID:

> OCP — Open/Closed Principle
>
> “Entidades de software devem estar abertas para extensão, mas fechadas para modificação.”

O instrutor utiliza um projeto prático de **ETL (Extract Transform Load)** para demonstrar:

* como um sistema evolui ao longo do tempo;
* como surgem novos requisitos;
* como o código pode ficar difícil de manter;
* e como aplicar o OCP para tornar o sistema extensível.

## O que é ETL?

ETL é um padrão muito utilizado em integração de sistemas e processamentos de dados.

O nome significa:

| Etapa     | Significado | Objetivo                        |
| --------- | ----------- | ------------------------------- |
| Extract   | Extrair     | Buscar dados de várias fontes   |
| Transform | Transformar | Padronizar, tratar e organizar  |
| Load      | Carregar    | Enviar os dados para um destino |

### Fluxo do ETL

```Mermaid
flowchart LR
    A[Arquivos CSV/TXT/API] --> B[Extract]
    B --> C[Transform]
    C --> D[Load]
    D --> E[Banco de Dados / Data Warehouse / Sistema]
```

## Objetivo do Projeto ETL

O projeto criado no cruso:

* lê arquivos CSV;
* lê arquivos TXT;
* transforma os dados;
* organiza tudo em arrays;
* prepara os dados para envio a um destino.

O principal objetivo pedagógico não é o ETL em si.

O verdadeiro objetivo é mostrar:

* como organizar responsabilidades;
* como aplicar SRP;
* como perceber violações do OCP;
* e como refatorar o sistema.

## Iniciando o Projeto ETL

### Objetivo da Aula 17

Nesta aula o instrutor:

* cria a estrutura inicial do projeto;
* configura o Composer;
* configura autoload PSR-4;
* prepara o ambiente para os exemplos seguintes.

### Estrutura Inicial

```Mermaid
flowchart TD
    A[Projeto ETL] --> B[src/]
    A --> C[arquivos/]
    A --> D[vendor/]
    A --> E[index.php]
```