# Conteúdo da Aula 05



### Variáveis



Variáveis são estruturas do PHP que nos permite armazenar dados.

A memória RAM de um computador é o hardware responsável por armazenar os dados durante a execução de um programa.



---

:fire: **Importante**

Os dados são mantidos na RAM apenas **durante a execução de um *script* PHP**.

Ao término da execução de um *script*, os dados são liberados, não sendo mais possível ter acesso a eles.

---



As variáveis, portanto, têm como funcionalidade prover uma maneira para que o desenvolvedor possa trabalhar com a memória RAM.

Ao criar uma variável no código, o desenvolvedor está **exigindo** um espaço de memória na RAM para poder armazenar algum dado em determinado instante do programa.



Veja como criar variáveis em PHP:

```php+HTML
<?php

$nomeDaVariavel = "Valor da Variável";
$numeroInteiro = 10;
$numeroReal = 99.99;
$texto = "Esse valor é do tipo string (texto, isto é, caracteres alfanuméricos)";
?>
```

No instante em que as variáveis são criadas -- e a elas são atribuídos valores --, a memória RAM as organiza em **compartimentos**, isto é, em espaços de memória reservados exclusivamente para cada variável.

Pode-se atribuir **um valor** para cada variável, que será o dado armazenado no espaço de memória de sua referência.

| Identificador do Espaço de memória | Valor armazenado no Espaço de memória                        |
| ---------------------------------- | ------------------------------------------------------------ |
| $nomeDaVariavel                    | "Valor da Variável"                                          |
| $numeroInteiro                     | 10                                                           |
| $numeroReal                        | 99.99                                                        |
| $texto                             | "Esse valor é do tipo *string* (texto, isto é, caracteres alfanuméricos)" |

Repare que para cada variável criada no código PHP foi reservado um **espaço de memória** exclusivo para ela, de tal forma que é possível **armazenar um valor dentro desse espaço de memória**.



Assim, na sequência do código, é possível **acessar o valor que foi armazenado previamente** em algum desses compartimentos.



Veja o exemplo a seguir:

```php+HTML
<?php
// Criar variáveis
$nome = "Linus Torvalds";
$idade = 49;
?>
<html>
    <head>
        <title>Acessando os valores das variáveis</title>
    </head>
    <body>
        <h3>
            Acessando os valores das variáveis
        </h3>
        <p>
            Nome: <?php echo $nome; ?>
        </p>
        <p>
            Idade: <?php echo $idade; ?>
        </p>
    </body>
</html>
```

O código acima gera a seguinte página:

<fieldset>

<h3>Acessando os valores das variáveis</h3>
<p>Nome: Linus Torvalds</p>
<p>Idade: 49</p>
</fieldset>



---



### Tipos de Variáveis



Nós, humanos, conseguimos identificar a **semântica dos valores** que utilizamos no cotidiano.

Por exemplo: 

- sabemos que o valor "R$ 99,99" refere-se a um tipo **numérico** que representa uma quantia em dinheiro;
- sabemos que o valor "RG: 1.123.456" refere-se a conjunto de algarismos que representa um tipo de identificação civil
- sabemos que o valor "Nome: Igor Santos" refere-se a um conjunto de caracteres que representa o nome de uma pessoa.



Porém, o computador é incapaz de **entender a semântica dos valores**. No computador, tudo é armazenado em ***bits*** (0 ou 1).

Portanto, é função do desenvolvedor prover **semântica aos valores** de um sistema.



Para facilitar tal trabalho, o PHP oferece **tipos de valores** capazes de criar uma semântica básica para os dados do sistema.

Veja abaixo alguns tipos de valores no PHP:

| Tipo     | Semântica                                                    |
| -------- | ------------------------------------------------------------ |
| *string* | Representa um valor composto por um conjunto de caracteres alfanuméricos (algarismos, letras, símbolos) |
| *int*    | Representa um valor numérico e inteiro                       |
| *float*  | Representa um valor numérico real (números inteiros e números fracionários) |

Vamos rever novamente como criar variáveis e dar valores a elas, agora observando os **tipos dos valores** que estamos atribuindo:

```php+HTML
<?php 
$numeroInteiro = 10; // basta colocar um número inteiro diretamente que o PHP já identifica como um tipo 'int'

$numeroReal = 10.9999; // basta colocar um número fracionário diretamente que o PHP já identifica como um tipo 'float'

$email = "php@php.com" // para strings, é preciso colocar o conjunto de caracteres ENTRE ASPAS!!
?>
```



---

:fire: **Importante**:

Os valores de tipo *string* precisam **obrigatoriamente** estar envoltos a aspas.

Já os valores numéricos **não podem, obrigatoriamente,** estar envolto a aspas.

Isto é, **todo valor que está entre aspas** é considerado do tipo *string*.

---



Para contextualizar o assunto, vale ressaltar que as variáveis são as estruturas que têm a funcionalidade de **reservar um espaço na memória RAM** para que o desenvolvedor possa armazenar os dados do sistema.

Fazendo uso de variáveis, os desenvolvedores são capazes de **armazenar, manipular, calcular, computar e transferir** dados no sistema, de tal forma a oferecer uma aplicação relevante e útil aos usuários.