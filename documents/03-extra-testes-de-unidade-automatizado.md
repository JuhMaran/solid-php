# Seção 3: Extra - Implementando Testes de Unidade Automatizados

Esta seção introduz **testes de software**, com foco prático em **testes de unidade automatizados** usando PHPUnit. O objetivo é mostrar como incorporar testes no dia a dia e como isso se conecta às boas práticas de desenvolvimento (incluindo SOLID).

## Aula 12 - O que são testes de software?

### Conceito Central

Testes de software são **processos para verificar se o sistema funciona conforme o esperado**, identificando erros antes que cheguem ao usuário final.

### Principais Ideias

* Existem vários tipos de testes, como:
  * Funcionais, integração, performance, segurança, regressão, aceitação do usuário, Caixa-branca, Caixa-cinza, Caixa-preta, Configuração, Carga, Instalação, Interface, Operacional, Positivo-negativo, Stress, Volume, etc.
* O foco da aula é:
  * **Teste de Unidade (Unit Test)**

### Teste de Unidade

* Testa **partes pequenas do sistema**:
  * Funções
  * Métodos
  * Classes
* Objetivo: garantir que cada unidade funcione isoladamente.

### Por que isso é importante?

* Bugs corrigidos no final custam até **100x mais**.
* Testes ajudam a:
  * Detectar erros cedo
  * Melhorar a qualidade do código
  * Evitar regressões

### TDD (Test Driven Development)

* Desenvolvimento orientado a testes:
  1. Escreve o teste primeiro
  2. Depois implementa o código
* Benefício:
  * Código mais confiável e bem estruturado

## Aula 13 - Incluindo o PHPUnit no projeto via Composer

### Objetivo

Preparar o ambiente para executar testes.

### Conceitos importantes

#### 1. Dependências de desenvolvimento

* PHPUnit é instalado com:
  
  ```bash
  composer require --dev phpunit/phpunit ^9.0
  ```

* `--dev`:
  * Indica que **não vai para produção**
  * Evita incluir código de teste no sistema final

#### 2. Organização do projeto

* Após instalação:
  * PHPUnit fica em `vendor/`
  * Configuração no `composer.json`

#### 3. Relação com SOLID

* O uso do **SRP (Single Responsibility Principle)** facilita testes:
  * Cada classe tem **uma única responsabilidade**
  * Mais fácil testar isoladamente

## Aula 14 - Implementando nosso Primeiro Teste

### Estrutura básica de um teste

#### 1. Criar pasta

```text
/test
```

#### 2. Criar classe de teste

```php
class ItemTest extends TestCase
```

#### 3. Importar

```php
use PHPUnit\Framework\TestCase;
```

### Regras importantes

* Classe deve:
  * **Estender `TestCase`**
* Métodos de teste:
  * Devem ser `public`
  * Devem começar com `test`

### Exemplo conceitual

```php
public function testAlgo() {
    $this->assertEquals(valorEsperado, valorAtual);
}
```

### Execução do teste

```bash
vendor/bin/phpunit test/ItemTest.php
```

### Resultado

* PHPUnit mostra:
  * Quantidade de testes
  * Falhas
  * Sucessos

## Aula 15 - Testes de Asserções

### O que são?

São **verificações** que validam o comportamento do código.

### Principal método usado

```php
$this->assertEquals(esperado, atual);
```

### Exemplos de testes feitos

#### 1. Estado inicial

* Verifica valores padrão ao criar objeto:
  * descrição = ''
  * valor = 0

#### 2. Getters e Setters

* Testa se:
  * Valor definido = valor retornado

#### 3. Regras de negócio (`itemValido`)

* Testa múltiplos cenários:
  * Item válido → `true`
  * Descrição vazia → `false`
  * Valor zero → `false`
  * Tudo inválido → `false`

### Aprendizado importante

* Testes ajudam a detectar erros simples (ex: getter errado)
* Pequenos bugs podem ser identificados rapidamente

## Aula 16 - Criando um Provedor de Dados para Testes

### Problema resolvido

Evitar repetir testes para vários valores.

### Solução: Data Provider

* Método que retorna:

```text
array de arrays
```

### Funcionamento

Cada array:

* Executa o teste uma vez com valores diferentes

### Estrutura

```php
/**
 * @dataProvider dataValores
 */
public function testMetodo($valor) { ... }

public function dataValores() {
    return [
        [100],
        [-2],
        [0]
    ];
}
```

### Resultado

* Um único teste roda várias vezes
* Aumenta cobertura de testes
* Código mais limpo e reutilizável

## Conclusão da Seção

### Principais aprendizados

* Testes são essenciais para qualidade de software
* Testes de unidade:
  * São rápidos
  * Testam partes isoladas
* PHPUnit permite:
  * Criar testes estruturados
  * Validar comportamento com asserções
* Boas práticas (como SOLID) facilitam testes
* Data Providers aumentam eficiência dos testes

## Resumo

Nesta seção, você aprendeu que testar **não é opcional**, é parte do desenvolvimento profissional.

O foco foi mostrar como validar pequenas partes do sistema usando testes automatizados.

Você viu que:

* Cada classe deve ser testável
* Testes garantem que mudanças não quebrem o sistema
* Ferramentas como PHPUnit automatizam tudo isso.

E o mais importante:

> Código bem estruturado (ex: seguindo SOLID) é naturalmente mais fácil de testar.