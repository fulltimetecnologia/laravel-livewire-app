## Sobre

Implementação de mecanismo de busca com filtros combinados utilizando LARAVEL LIVEWIRE.

## Requisitos do ambiente de desenvolvimento

-   PHP 8.3
-   Docker
-   Docker compose
-   Composer para instalar as dependências:

    - https://getcomposer.org/download/

## Configurando seu ambiente

- Este projeto faz uso da ferramenta Laravel Sail.

- Após clonar o projeto, execute os seguintes comandos:

    - Instalando dependências:

    ```
    composer install
    ```

    - Criando containers com sail:

    ```
    ./vendor/bin/sail up -d
    ```

    - Criando e populando tabelas do banco de dados:

    ```
    ./vendor/bin/sail php artisan migrate:fresh --seed
    ```

    Obs: Somente se tiver problemas em criar as tabelas, mude o .env.exemple para .env (O mesmo já está com as configurações padrão do sail)

## Iniciando a aplicação

```
./vendor/bin/sail up
```

Isso deverá iniciar o projeto usando Docker (http://localhost).