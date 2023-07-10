# estudos_php

## Geral
#### Comando para rodar o projeto PHP na localhost
```
php -S localhost:8000
```
#### Comando para rodar um arquivo php no terminal
```
php nomeDoArquivo.php
```

## Aula 1
### Vantagens de POO

- Confíavel
    - O isolamento entre as partes gera confiabilidade ao software. Ao alterar uma parte, nenhuma outra é afetada.
- Oportuno
    - Ao dividir tudo em partes, várias delas podem ser desenvolvidas em paralelo.
- Manutienível
    - Atualizar um software é mais fácil. Uma pequena modificação vai beneficiar todas as partes que usarem o objeto.
- Extensível
    - O software não é estático. Ele deve crescer para permanecer útil.
- Reutilizável
    - Podemos usar objetos de um sistema que criamos, em um outro sistema futuro.
- Natural
    - Mais fácil de enteder. Você se preocupa mais nas funcionalidades do que nos detalhes de implementação.

## Aula 2
### Objeto
Coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por meio das suas características, comportamentos e estado atual.

### Classe Caneta

#### Atributos
- Modelo
- Cor
- Ponta
- Carga
- Tampada
#### Métodos
- Escrever
- Rabiscar
- Pintar
- Tampar
- Destampar
#### Estado
- Como está no momento atual.

## Aula 3
### Linguagem de modelagem unificada
### UML -> Diagrama de classe
| **Caneta** |
| ---------- |
|   modelo   |
|    cor     |
|   ponta    |
|   carga    |
|  tampada   |
| ---------- |
| escrever() |
| rabiscar() |
|  pintar()  |
|  tampar()  |
| destampar()|

### Modificadores de visibilidade
- Indicam o nível de acesso aos componentes internos de uma classe

- público (+)
    - A classe atual e todas as outras classes.
- privado (-)
    - Somente a classe atual.
- protegido (#)
    - A classe atual e todas as sub-classes.

|  **Caneta**  |
| ------------ |
|  +  modelo   |
|  +  cor      |
|  -  ponta    |
|  #  carga    | 
|  #  tampada  |
| ------------ |
| + escrever() |
| + rabiscar() |
| + pintar()   |
| - tampar()   |
| # destampar()|

## Aula 4
### Métodos especiais

### Getters e Setters
- Para pegarmos atributos de uma classe e para mudarmos atributos de uma classe devemos utilizar métodos especiais como getter e setters.

```
classe Caneta {
    publico modelo: caracter
    privado ponta: real
    publico metodo getModelo(){
        return modelo
    }
    publico metodo setModelo(m:caracter){
        modelo = m
    }
    publico metodo getPonta(){
        return ponta
    }
    publico metodo setPonta(p:real){
        ponta = p
    }
}

c1 = nova Caneta()
c1.setModelo("BIC")
c1.setPonta(0.5)
c1.getModelo()
c1.getPonta()
```

### Construtores
- E podemos utilizar construtores que irão atribuir valores aos atributos da classe que ela for instanciada, podendo ele receber parâmetros ou não.
    - Em pseudocodigo fica da seguinte forma:
        ```
        classe Caneta{
            metodo construtor(){
                tampar()
                cor = "azul"
            }
        }
        ```
        ou
        ```
        classe Caneta{
            metodo construtor(m:caracter, c:caracter, p:real){
                setModelo(m)
                setCor(c)
                setPonta(p)
                tampar()
            }
        }
        ```
    - Utilizando o PHP ficará assim:
        ```php
        class Caneta{
            function __construct(){
                $this->tampar();
                $this->cor = "azul";
            }
        }
        ```
        ou
        ```php
        class Caneta{
            - Caneta($m, $c, $p){
                $this->modelo = $m;
                $this->cor = $c;
                $this->ponta = $p;
                $this->tampar();
            }
        }
        ```

## Aula 5
### Exercício - Conta no banco
#### Descrisção
- Crie um programa que o usuário possa manipular uma conta de banco, esta conta podendo ser uma conta corrente ou conta poupança. O usuário poderá criar conta, fechar conta, sacar um valor de sua conta, depositar um valor na sua conta e pagar a mensalidade de sua conta.
- Regras
    - Abrir conta receberá um tipo que só poderá ser 'cp' para conta poupança ou 'cc' para conta corrente;
    - Abrir conta corrente será recebido R$50,00;
    - Abrir conta poupança  será recebido R$150,00;
    - Fechar a conta necessita que o saldo seja R$0,00;
    - Sacar a conta necessita está aberta;
    - Sacar o valor tem que ser menor ou igual ao saldo da conta;
    - Depositar a conta necessita está aberta;
    - Pagar mensalidade da conta poupança será R$20,00;
    - Pagar mensalidade da conta corrente será R$12,00; 

- Atributos e seus níveis de visibilidade
    - Número da Conta (público);
    - Tipo (protegido);
    - Dono (privado);
    - Saldo (privado);
    - Status (privado);

- Métodos
    - Todos getters e setters;
    - construtor;
    - abrirConta();
    - fecharConta();
    - sacar();
    - depositar();
    - pagarMensalidade();

## Aula 6
### Pilares de POO
- Encapsulamento
- Herança
- Polimorfismo

### Encapsulamento
#### Descrisção
-  Um software encapsulado tem um padrão, além de proteger o código do usuário e proteger o usuário do código. Pense como uma pilha AA, nela há uma capa para seus componentes que realização funcionamento para que em seus polos disseminem a energia, essa capa serve para que o usuário não mexa e danifique seus componentes internos, e nem que os componentes vazem e prejudiquem o usuário, além de que essa capa irá servir como um padrão para todas pilhas AA, então qualquer objeto que receber pilhas AA, poderão receber de qualquer fabricante, descártavel ou recarregável contanto que sejam pilhas AA.

#### Encapsular
-  Ocultar partes independentes da implementação permitindo construir partes invísiveis ao mundo exterior.

#### Interface
- Lista de serviços fornecidos por um componente. É o contato com o mundo exterior, que define o que pode ser feito com um objeto dessa classe

#### Vantagens de Encapsular
- Tornar mudanças invisíveis;
- Facilitar reutilização de código;
- Reduzir efeitos colaterais;

#### Exercício
- Crie uma interface com os métodos que serão implementados em uma classe de um controle remoto;
- A interface deve conter os seguintes métodos:
    - ligar;
    - desligar;
    - abrirMenu;
    - fecharMenu;
    - maisVolume;
    - menosVolume;
    - ligarMudo;
    - desligarMudo;
    - play;
    - pause;
- A classe Controle deve ter os seguintes atributos:
    - volume;
    - ligado;
    - tocando;

## Aula 7 e 8
### Relacionamento entre classes

#### Regras da classe Luta
- Uma luta só pode acontecer entre lutadores da mesma classe;
- A luta só acontece entre lutadores diferentes;
- A luta só pode acontecer se for aprovada;
- Na luta só pode haver a vitória de um único lutador ou então um empate;


## Aula 10
### Herança entre classes
- Permite basear uma nova classe na definição de uma outra classe previamente existente.
- A herança será aplicada tanto para as características quanto para os comportamentos.  

#### Exemplo
- Em uma instituição de ensino temos três indivíduos, um aluno no qual eles tem nome, idade, sexo, matrícula, curso e pode realizar aniversário e cancelar matrícula; temos um professor no qual tem nome, idade, sexo, especialidade, salário e pode realizar aniversário e receber aumento; e por último temos um funcionário que tem nome, idade, sexo, setor que trabalho, se está trabalhando ou não e pode fazer aniversário e mudar status se está trabalhando. Seguindo esse exemplo temos as seguintes classes:

|   **Aluno**   |  **Professor** |   **Aluno**   |
| ------------- | -------------- | ------------- |
|  - nome       |  - nome        |  - nome       |
|  - sexo       |  - nome        |  - nome       |
|  - idade      |  - idade       |  - idade      |
|  - matrícula  |  - salário     |  -trabalhando |
|  - curso      |  -especialidade|  - setor      |
| ------------  | -------------- | ------------  |
| +fazerAniv()  | +fazerAniv()   | +fazerAniv()  |
| +cancelarMat()| +receberAume() | +mudarTrabal()|

- Dessa forma irão se repetir muitos atributos e métodos, sendo assim usamos a herança para que possamos diminuir a quantidade de linhas repetidas. Utilizando o conceito de herança ficaria da seguinte forma:

| **Pessoa** |
| ---------- |   **Aluno**   |  **Professor** |   **Aluno**   |
| - nome     | ------------- | -------------- | ------------- |
| - sexo     |  - matrícula  |  - salário     |  -trabalhando |
| - idade    |  - curso      |  -especialidade|  - setor      |
| ---------  | ------------  | -------------- | ------------  |
|+fazerAniv()| +cancelarMat()| +receberAume() | +mudarTrabal()|

- Utilizando os conceitos de herança acima, teremos uma classe pessoa que irá ser extendida para as classes Aluno, Professor e Funcionário, sendo assim as três classes (Aluno, Professor e Funcionário) irão herdar os atributor e métodos da classe Pessoa. 

- A classe pessoa será a Classe Mãe (ou Progenitora ou Superclasse).
- As classes Aluno, Professor e Funcionário serão Classes Filhas (ou Subclasses).

