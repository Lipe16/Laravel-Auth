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

![Aplicatico de Auth com laravel](https://lh3.googleusercontent.com/xMzlKwij7hiW3-BL7gMW09a0Em-u87aINAMgsMl9EFpncFzVL2p0Kl6tJRgvCSRpMsiglAJjJoDFWG-_FMQpQBrp60K9MzI6f2HwvmzdSUwnwJ2QlPnO_6s_Qujmnc4NLTD_LkHQNp4yOAsZeSN0jp6XpPia1s4YA442ge3zYnfamep-FPRy4r7Vz67BOt68h_zaGJBO6903pwv2C9UyeoH8QbGEM_ImOBrT8ulOCwuD5pZdZOEZByWbjpUkw-i1iBZSJ42ouA48wcJIogg7dJCY1hNL_DdsLPOS3QyP0pjRHCTXPafSNa_OeSNaXxJo16jesC2FouExLDK9jjCNZsF_ZUd0t40ZReK_nWbYsp7Dym_FRE3PlhedHOQB23IXxGHdFEWKAasYZVc6KXdvtLtsc2XQ174ABGijCKqVLT8l4Lx3WUln3K-yIgu5SpaiQS1ATOGLeiBSwoq_wMTAC3qLA7Zx1FKA1Pkfac5rJl-c8ITJRtYPI-T_N9OhkySU7_T9a7iADF5fiQhcsVSzzLHWLg5YSnQ2BNocry-wgnqqQ9TP0MVHkWXvdc0ORPzlALSPYHp48TJONMwmwgtS11skOa5qeM1KJQVxMBQ=w1178-h662-no)

![Aplicatico de Auth com laravel](https://lh3.googleusercontent.com/ewukUurU5gpMQb4C5ZlDtJJ9NVkquXIrJXBHMFmA3Hzm7Uj_A-u-ShG-2M0m7iHkimbKqpk79Xh-g3CN6LCOyEYSrNge6jNFNXJikxTvK7H6ZiH0mseqIy5MJKMAWWirHm8-w95QNkR6ylTf0YQfIdF9V-vVwuj9VgXuYo0VB6oPpwCzk-AeieHm_sUfg_5IB0ffwqhCtLBsRPSe_MInQ0-OxnY_FFOqK46_O_8cVC6pHpEHbPtiMIUG2ASt53Zhtg2dgUA1y07z9BOSMhqy6C4A2hWLWaxoM34FXndm05VmurJlfnUyEoagnoOqGQTzSbW205FFJDUjf0yHNdMP_iR1Sf02g501FSfOQfWcAusIfu_9x4kLnjPWeJhNb6tmj1gH4u8eIpto37mZYuueUNemNzz-j29f4i7aona1zyL6zMMPyngkIiqYcEQfEuvoyObM-1zQPgeC8ezfbQvjOGPxJi5A2DiMGOzXAAE2agIXfJnvRL9q9y7_sgFeaHlLrXaGAeDh5GFcU1fUBI8ZfX3ZDxBNEQKJpflFr3zoVPU_UrcFNBieAvqeFWfh44vHO3dOXqPmttqt4HVgvtmC89Z0AnM7zWRt-c5K18s=w1178-h662-no)


