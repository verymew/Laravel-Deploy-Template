## Sobre o Template
O projeto contém tudo o que um blog precisa, incluindo painel de administração e autenticação.

## Instalação
Gerar o arquivo de configuração do banco de dados:
```bash
cp .env.example .env
```

Instalar dependências, migrações, chaves e iniciar o vite:
```bash
npm install
composer install
php artisan key:generate
php artisan migrate
npm run dev
```
Abrir o Laravel:
```bash
php artisan serve
```


