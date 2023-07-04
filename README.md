# estudos_php

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

| **Caneta** |
| ---------- |
|  + modelo   |
|  +  cor     |
|  - ponta    |
|  # carga    |
|  # tampada   |
| ---------- |
| + escrever() |
| + rabiscar() |
| + pintar()  |
| - tampar()  |
| # destampar()|
