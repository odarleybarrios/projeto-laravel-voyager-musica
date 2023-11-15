# Instruções
Laravel ele utiliza a arquitetura MVC os principais arquivos que você deve saber são: 
- Models => ficam na pasta app\Models (São as classes de dominio da sua aplicação, de forma simples são associadas a tabelas no banco).

- Controllers => ficam na pasta app\Http\Controllers (Servem como gerenciadores das requisições, de forma simples eles recebem a requisição usam os models para trabalhar com o banco e direcionam para a tela ser desenhada)

- Views => ficam na pasta resources\views (São as telas da aplicação)

- Routes (Rotas) => ficam na pasta routes\wep.php (Gerenciam as rotas digitadas na barra de endereços do navegador, para cada endereço digitado direcionam para qual será o Controller q será executado)

Caso seu projeto não tenha a pasta vendor baixe as dependencias do projeto.

## Para baixar as dependencias
composer install

## Para rodar o servidor
php artisan serve

Se você instalou com os dados dummy, um usuário Administrador foi criado para você com as seguintes credenciais:
login/email: admin@admin.com
senha: password

## Limpar cache
php artisan config:clear
php artisan cache:clear

## Criar migrations
no terminal de comandos (bash, cmd, powershell) gere os arquivos de migração da tabela criada:
```bash
php artisan migrate:generate nome_tabela
```

# Views em Laravel
@extends
@section  @endsection
@include 
@if @endif
{{ env('variavel_ambiente') }}
{{ route('nome-rota') }}
{{ $variavel }}}
