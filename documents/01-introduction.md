# Introdução

## 1. O que é SOLID?

Os princípios **SOLID** são um conjunto de **boas práticas da Programação Orientada a Objetos (POO**), formalizados por Robert C. Martin (também conhecido como *Uncle Bob*). O termo “SOLID” foi posteriormente popularizado por Michael Feathers.

### Benefícios esperados ao aplicar SOLID

- Código **fácil de manter**
- Código **adaptável a mudanças**
- Código **testável**
- Código **reutilizável**
- Sistemas com **maior tempo de vida útil**
  
### Os 5 princípios SOLID

| Sigla | Nome | Ideia principal |
| --- | --- | --- |
| **S** | SRP (Single Responsibility Principle) | Uma classe deve ter **uma única responsabilidade** |
| **O** | OCP (Open/Closed Principle) | Código deve estar **aberto para extensão, fechado para modificação** |
| **L** | LSP (Liskov Substitution Principle) | Subtipos devem poder substituir seus tipos base |
| **I** | ISP (Interface Segregation Principle) | Interfaces devem ser **específicas**, não genéricas demais |
| **D** | DIP (Dependency Inversion Principle) | Depender de **abstrações**, não de implementações |

## 2. Como vai o seu código?

Essa aula propõe uma **autoavaliação prática** da qualidade do seu código.

### Perguntas-chave

Se você responde “sim” para várias delas, há espaço para melhoria:

- Seu código tem **poucos ou nenhum teste automatizado**?
- Suas classes estão **grandes demais**?
- Seu código está **complexo** (muitas decisões, difícil de entender)?
- É difícil **reutilizar código**?
- Seu código **quebra facilmente** quando algo muda?

### Explicação dos problemas

#### Falta de Testes

- Aumenta o risco de erros.
- Dificulta manutenção.
- Testes automatizados são essenciais.

#### Classes muito grandes

- Difíceis de ler.
- Difíceis de manter.
- Geralmente indicam **múltiplas responsabilidades.**

#### Alta complexidade

- Muitos `if/else`, regras e caminhos.
- Aumenta a chamada **complexidade ciclomática.**
- Torna o código difícil de entender e modificar.

#### Baixa reutilização

- Você reescreve código várias vezes.
- Perda de produtividade.
- Indica acoplamento alto ou design ruim.

#### Código frágil

- Pequenas mudanças causam erros inesperados.
- Forte sinal de má estrutura.

## Mensagem principal da Seção

- **POO não garante qualidade por si só**
- **SOLID é o caminho para boas práticas reais**
- A melhoria começa com **consciência dos problemas atuais**
- O curso vai evoluir da teoria para a prática

## Conclusão

- SOLID = conjunto de **5 princípios fundamentais**
- Objetivo: **código limpo, sustentável e profissional**
- Antes de aprender, você precisa **reconhecer os problemas do seu código**
- Ao aplicar SOLID, você:
    - reduz complexidade
    - melhora manutenção
    - aumenta reutilização
    - cria sistemas mais robustos  