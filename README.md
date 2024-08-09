![Demo](docs/demo.gif)

## Sobre

Implementação de mecanismo de busca com filtros combinados utilizando LARAVEL LIVEWIRE.

Laravel 11.
Livewire 3.0.

## Requisitos do ambiente de desenvolvimento

-   Docker

## Configurando seu ambiente

- Este projeto faz uso da ferramenta Laravel Sail.

- Após clonar o projeto, execute os seguintes comandos:

    - Entre na pasta do projeto:

    ```
    cd laravel-livewire-app
    ```
    - Copiar o arquivo .env.exemple para .env

    ```
    cp .env.example .env
    ```

    - Rodar o comando:

    ```
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
    ```

    - Criar containers com sail:

    ```
    ./vendor/bin/sail up -d
    ```

    - Criar e popular tabelas do banco de dados:

    ```
    ./vendor/bin/sail artisan migrate:fresh --seed
    ```

    - Instalando dependências:
    ```
    ./vendor/bin/sail npm install
    ```

    - Buildando as dependências

    ```
    ./vendor/bin/sail npm run build
    ```

    - Isso deverá iniciar o projeto usando Docker (http://localhost).

    - PLUS

        - Testes unitários:

        ```
        ./vendor/bin/sail php artisan test 
        ```