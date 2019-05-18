## Installation for Laravel App

Clone the repo:


```bash
cd ~
git clone git@github.com:ljmerza/ine-test.git
cd ~/ine-test/laravel-app/
```

Use docker to run `composer install` (if you don't have it installed already) and mak sure the file permissions are correct before moving to docker.

```bash
sudo docker run --rm -v $(pwd):/app composer install
sudo chown -R $USER:$USER ~/ine-test
```

Copy the `.env` file then start docker

```bash
cp .env.example .env
sudo docker-compose up -d
```

We'll need to generate a key for Laravel

```bash
sudo docker-compose exec app php artisan key:generate
```

Open the Laravel web app on port 8080 in the web browser
