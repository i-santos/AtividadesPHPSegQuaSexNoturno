# Aula 09 - Atividades

- Criar uma pasta `Aula09` no projeto `AtividadesPHP`
- Criar `index.html` na pasta Aula09
- Fazer as atividades abaixo

### Atividade: Lançador de vários dados

1. Criar uma página `lancador_de_dados_v2.php`
2. Criar um *link* na página `index.html` da pasta da Aula para acessar a página `lancador_de_dados_v2.php`
3. A página `lancador_de_dados_v2.php` vai ter a seguinte lógica:
   1. Se a página for acessada com o método `GET`: devolver uma página de resposta com um `<form>` que terá 3 `<input>`. Um `<input>` para receber o valor mínimo, outro para receber o valor máximo e outro para receber **quantos dados serão lançados simultaneamente**. O `<form>` deve enviar os dados usando o método `POST` para a própria página `lancador_de_dados_v2.php`
   2. Se a página for acessada com o método `POST`: sortear **a quantidade de dados** informada pelo usuário e devolver uma página de resposta com os valores sorteados.

---



### Atividade: Calculadora de investimentos 

1. Criar uma página `investimentos.php`

2. Criar um *link* na página `index.html` da pasta da Aula para acessar a página `investimentos.php`

3. A página `investimentos.php` vai ter a seguinte lógica:

   1. Se a página for acessada com o método `GET`: devolver uma página de resposta com um `<form>` que terá 4 `<input>`. 

      - Um para receber o valor de Aporte Inicial
      - Outro para receber o valor de aporte mensal
      - Outro para receber a taxa de juros ao mês
      - E outro para receber a quantidade de meses do investimento

      O `<form>` deve enviar os dados usando o método `POST` para a própria página `investimentos.php`

   2. Se a página for acessada com o método `POST`: realizar os cálculos e devolver uma página de resposta informando o valor total ao final do tempo de investimento

   

---



### Atividade: Sorteador de loteria

1. Criar uma página `loteria.php`
2. Criar um *link* na página `index.html` da pasta da Aula para acessar a página `loteria.php`
3. A página `loteria.php` vai ter a seguinte lógica:
   1. Se a página for acessada com o método `GET`: devolver uma página de resposta com um `<form>` que terá 3 `<input>`. Um `<input>` para receber o número mínimo, outro para receber o número máximo e outro para receber **quantos números serão sorteados na loteria**. O `<form>` deve enviar os dados usando o método `POST` para a própria página `loteria.php`
   2. Se a página for acessada com o método `POST`: sortear todos os números da loteria e devolver uma página de resposta com os valores sorteados



---



### Estruturas para fazer os códigos acima

```php+HTML
is_numeric( $var ) // se o valor da variável $var for numérico, retorna true. Caso contrário, retorna false

rand( $minimo, $maximo ) // retorna um valor entre os valores das variáveis $minimo e $maximo

$_SERVER["REQUEST_METHOD"] // retorna o método do request ("GET" ou "POST")

$_GET["chave"] // retorna o valor que o usuário inseriu no input com name="chave"

$_POST["chave"] // retorna o valor que o usuário inseriu no input com name="chave" (quando o form é configurado para usar o método POST)
```

