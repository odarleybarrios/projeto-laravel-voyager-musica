# Projeto Base
###  Projeto criado na aula de introdução ao Framework Laravel

<p align="center">
 <a href="#-sobre-o-projeto">Sobre</a> •
 <a href="#-funcionalidades">Funcionalidades</a> •
 <a href="#-como-executar-o-projeto">Como executar</a> • 
 <a href="#-tecnologias">Tecnologias</a> •  
 <a href="#user-content--licença">Licença</a>
</p>

## 💻 Sobre o projeto

Este é um projeto base feito em Laravel com o Voyager para painel administrativo.
### Laravel ele utiliza a arquitetura MVC
- Model => [app\Models](./app/Models) (Tabelas banco)
- Controllers => [app\Http\Controllers](./app/Http/Controllers) (Gerenciar Models e Views)
- Views => [resources\views](./resources/views/) (Telas do app)
- Routes (Rotas) => [routes\wep.php](./routes/web.php)

---

## ⚙️ Funcionalidades

- Os usuários do tipo Administrador logados tem acesso ao menu administrativo, onde podem:
  - [X] Gerenciar Roles (Tipos de usuários)
  - [X] Gerenciar Usuários

- Os usuários tem acesso a parte pública da aplicação web, onde podem:
  - [X] Registrar-se como usuário comum
  - [X] Logar-se para ter acesso ao menu administrativo

---
## 🚀 Como executar o projeto

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas: [Git](https://git-scm.com), [Laravel](https://laravel.com/docs/8.x/installation) e [Node.js](https://nodejs.org/en/).

Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### Comandos uteis

#### Gerar migrations
```
php artisan migrate:generate --tables=nome_da_tabela
```
#### Gerar Seeds
```
php artisan vdo:generate data_rows,data_types,menus,menu_items,permissions,permission_role,roles,settings,translations
```


### 🎲 Rodando o Projeto 

#### Instalando as dependências
```bash
# Clone este repositório
$ git clone <https://github.com/USUARIO/REPOSITORIO.git>

# Acesse a pasta do projeto no terminal/cmd
$ cd projeto-base-laravel-voyager

# Instale as dependências composer
$ composer install

# Instale as dependências npm (frontend)
$ npm install && npm run dev
```
#### Configurando o projeto
1. Faça uma cópia do arquivo `.env.example` e renomeie para `.env`:
2. Crie um banco de dados
> Sugestão MariaDB ou MySQL: definição de collation: **utf8mb4_general_ci**

3. Configure a conexão com os dados do banco de dados no arquivo `.env`:
```php  
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=NOMEDOBANCO
    DB_USERNAME=USUARIO
    DB_PASSWORD=SENHA
```

### Limpar cache
```bash    
# Limpar cache de configurações da aplicação:
php artisan config:clear
# Limpar cache da aplicação:
php artisan cache:clear
```

#### Rodando o servidor
```bash    
# Criação de nova chave de criptografia da aplicação:
php artisan key:generate
    
# Criação das tabelas e inserção dos dados no banco de dados:
php artisan migrate:fresh --force --seed

# Execute a aplicação em modo de desenvolvimento
php artisan serve

# O servidor iniciará na porta:8000 - acesse <[http://localhost:8000/](http://localhost:8000/)>
```

### 🎲 Acesso ao Projeto (servidor)
Acesso à área pública da aplicação:
> **URL:** [http://localhost:8000/](http://localhost:8000/)

Acesso à área privada da aplicação:
> **URL:** [http://localhost:8000/admin](http://localhost:8000/admin) 
<br/>

O sistema é criado com um usuário Administrativo com as seguintes credenciais de login:
login: admin@admin.com
senha: password

**Você pode criar usuários pelo terminal usando tinker:**
```bash
# Executar o tinker
php artisan tinker

# No tinker: 
>>> $user = new \App\Models\User;
>>> $user->email = 'email.do.usuario@email.com';
>>> $user->password = Hash::make('senha'); # altere 'senha' para uma senha forte
>>> $user->name = 'Nome do Usuário';
>>> $user->save();
>>> exit() # sair do tinker
```
---

## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Laravel](https://laravel.com/docs)
- [Node.js](https://nodejs.org/en/)
- [Bootstrap](https://getbootstrap.com/)
- [JQuery](https://jquery.com/)
- [Font Awesome](https://fontawesome.com/search?o=r&m=free)

As seguintes dependências foram incluidas no projeto:
- [Voyager](https://voyager-docs.devdojo.com/bread/introduction)
- [Laravel Fortify](https://github.com/laravel/fortify)
- [Laravel migration generator](https://github.com/kitloong/laravel-migrations-generator)
- [Laravel UI](https://github.com/laravel/ui)
- [Módulo de linguagem Português do Brasil (pt_BR) para Laravel](https://github.com/lucascudo/laravel-pt-BR-localization)
- [laravelLegends/pt-br-validator](https://github.com/LaravelLegends/pt-br-validator)
---
## 💪 Como contribuir para o projeto

1. Faça um **fork** do projeto.
2. Crie uma nova branch com as suas alterações: `git checkout -b my-feature`
3. Salve as alterações e crie uma mensagem de commit contando o que você fez: `git commit -m "feature: My new feature"`
4. Envie as suas alterações: `git push origin my-feature`

## 📝 Licença

Este projeto é um software de código aberto licenciado sob a licença [gnu general public license version 3.0 (gplv3)](./LICENSE).
