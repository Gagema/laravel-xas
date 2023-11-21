<h1>PROJETO DE DESENVOLVIMENTO WEB- BUFFET DE FESTAS INFANTIL</h1>


![OIP](https://github.com/Gagema/dockerproject/assets/115170179/0ee2cb7e-e1e7-442d-85e0-737934269899)



## Passo a passo para rodar o projeto
Clone o projeto
```sh
git clone https://github.com/Gagema/laravel-xas
```
```sh
cd laravel-xas
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize essas variáveis de ambiente no arquivo .env
```dosini
APP_NAME="Especializa Ti"
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```
Faça as migrações para o Banco de Dados
```sh
php artisan migrate
```
Coloque as informações dos usuários com permissões especiais em Database>seeders>DatabaseSeeders (a=aniversariante,d=admnistrativo,c=cormecial,o=operacional), e insira eles na DB com o seguinte comando:
```sh
php artisan db:seed
```
Torne a storage pública para o upload de imagens
```sh
php artisan storage:link
```


Acesse o projeto
[http://localhost:8989](http://localhost:8989)

Link para o figma
```sh
https://www.figma.com/file/5Tt4yjaeSHMv8iVAHGtPLa/Untitled?type=design&node-id=0%3A1&mode=design&t=FLz06wbwi6tZyFBi-1
```
Link para o Notion
```sh
https://www.notion.so/82da9a555b394746a6b1111b8944de60?v=d6f587d3ac784be29a25e4a8d0e06281
```
