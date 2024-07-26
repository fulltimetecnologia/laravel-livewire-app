## Sobre

Implementação de mecanismo de busca com filtros combinados utilizando LARAVEL LIVEWIRE.

## Requisitos do ambiente de desenvolvimento

-   PHP 8.3
-   Docker
-   Docker compose

## Configurando seu ambiente

- Este projeto faz uso da ferramenta Laravel Sail.

- Ao baixar o projeto basta rodar o comandos:

    - Instalar dependencias:

    ```
    composer install
    ```

    - Rodar o comando para criar os containers:

    ```
    ./vendor/bin/sail up -d
    ```

    - Criar e popular tabelas do banco de dados
    ```
    ./vendor/bin/sail php artisan migrate:fresh --seed
    ```

## Iniciando a aplicação

```
./vendor/bin/sail up
```

Isso deverá iniciar o projeto usando Docker e você deverá ser capaz de navegar para a página inicial (http://localhost) usando um navegador qualquer.