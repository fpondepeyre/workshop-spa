## SYMFONY & SPA

### APP
```
git clone git@github.com:fpondepeyre/workshop-spa.git
composer install
cd workshop-spa
symfony server:start
https://127.0.0.1:8000/api/conferences
https://127.0.0.1:8002/api/comments
```

### SPA
```
cd spa
yarn install
yarn encore dev
cd spa/public
symfony server:start -d --passthru=index.html
https://127.0.0.1:8001
```