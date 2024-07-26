## Sobre

Implementação de mecanismo de busca com filtros combinados utilizando LARAVEL LIVEWIRE.

## Requisitos do ambiente de desenvolvimento

-   Docker

## Configurando seu ambiente

- Este projeto faz uso da ferramenta Laravel Sail.

- Após clonar o projeto, execute os seguintes comandos:

    - Capiar o arquivo .env.exemple para .env

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

    - Isso deverá iniciar o projeto usando Docker (http://localhost).