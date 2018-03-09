**PROJETO PHP USANDO LARAVEL AUTH**

Esse projeto tem como objetivo proteger algumas páginas com uso da estrutura de AUTH do Laravel, com laravel é muito simples criar um controle de usuários com uma grande variedade de opções desde a criação do usuário a e-mails de token.

para iniciar a estrutura basta estar com banco de dados configurado no laravel e rodar o comando 'php artisan make:auth', feito isso ele cria views, configurações e um Controller (a camada model normalmente já vem pronta ao instalar o laravel).

Criei um alias no meu servidor apache(uso o xampp):

    Alias /laravelAuth "C:/xampp/htdocs/laravelAuth/AUTH/public/"
    <Directory "C:/xampp/htdocs/laravelAuth/CRUD/public/">
	    Options Indexes FollowSymLinks Includes ExecCGI
	    AllowOverride All
	    Require all granted
    </Directory>

 
Coloquei a linha RewriteBase no .htacces do laravel (localizado na pasta public):

	RewriteBase /laravelAuth

Rota de inicio do projeto no meu computador ficou assim:

	'http://localhost/laravelAuth/contas' vai para o app
	e 'http://localhost/laravelAuth/' vai para welcome do laravel
	


![Aplicatico de Auth com laravel](https://image.ibb.co/nk7PTS/laravel_01.png)

![Aplicatico de Auth com laravel](https://image.ibb.co/eBetNn/laravel_02.png)


