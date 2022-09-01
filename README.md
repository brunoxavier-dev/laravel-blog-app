
# Laravel Blog Teste - Creators LLC

O projeto consiste em uma aplicação web com sistema de login e cadastro para acesso e um sitema de 'blog' para envios de postagens de texto.

### 📋 Pré-requisitos

``` DOCKER ```

### 🔧 Instalação

Crie um diretório onde você quer usar este Projeto e abra o terminal dentro dele.

* Clone este repositório: ```git clone https://github.com/brunoxavier-dev/laravel-blog-app.git .```
* Rode o builder do Docker: ```docker-compose up --build -d```
* Rode as aplicações de estilo: ```docker-compose -f docker-compose.yml run --publish 5173:5173 npm run dev```

Após rodar todos os comando, abra a [url](http://localhost:8080) - LocalHost na porta ```8080```

## ⚙️ Utilizando o sistema

Faça postagens sem estar logado no sistema, ou faça um cadastro para ter acesso ao painel que controla as postagens com ```visualização```, ```edição``` e ```exclusão``` dos posts.
Em um sistema de utilização real, não se deve abrir edição total para este tipo de cadastro de usuário, no entanto por se tratar de um teste de aplicações simples, todos as funções foram liberadas desta forma.

## 🛠️ Construído com

* [Docker](https://www.docker.com/)
* [PHP](https://www.php.net/)
* [Laravel](https://laravel.com/)
* [MySql](https://www.mysql.com)
* [Nginx](https://www.nginx.com)
* [Composer](https://getcomposer.org)
* [Node](https://nodejs.org/en/)
* [Vite](https://vitejs.dev/)
