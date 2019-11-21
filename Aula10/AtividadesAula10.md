# Atividades Aula 10



1. Criar uma pasta Aula10
2. Criar uma `index.html` para a Aula10



### Atividade: Lançador de Dados Versão 2

1. Criar um arquivo `lancador_de_dados_v2.php`
2. Criar um *link* no arquivo `index.html` da aula para acessar a página `lancador_de_dados_v2.php`
3. Na página `lancador_de_dados_v2.php` escreva um programa para seguir a seguinte lógica: 
   1. Se a página for acessada com `GET`: devolver uma página de resposta com um `<form>` e dois `<input>`. Um `<input>` vai receber o valor mínimo e o outro `<input>` vai receber o valor máximo. O `<form>`vai enviar os dados usando o método `POST` para a própria página `lancador_de_dados_v2.php`
   2. Se a página for acessada com `POST`: sortear um valor **entre os valores mínimo e máximo** informados pelo usuários e **enviar uma página de resposta** com o valor sorteado **E** com o mesmo formulário do `GET` para que o usuário seja capaz de fazer um novo lançamento.



---



### Atividade: Lançador de Dados Versão 3

1. Criar um arquivo `lancador_de_dados_v3.php`
2. Criar um *link* na `index.html` da aula para acessar a página `lancador_de_dados_v3.php`
3. Na página `lancador_de_dados_v3.php` escreva um programa para seguir a seguinte lógica:
   1. Se for acessada com `GET`: devolver uma página de resposta com um `<form>` e **três `<input>` **. Um `<input>` vai receber o valor mínimo, outro vai receber o valor máximo e o último vai receber **a quantidade de dados** que serão lançados simultaneamente
   2. Se for acessada com `POST`: sortear a quantidade de dados que o usuário informou entre os valores mínimo e máximo. Devolver uma página de resposta com os valores sorteados **E** com o mesmo formulário do `GET` (para que o usuário seja capaz de fazer um novo lançamento).