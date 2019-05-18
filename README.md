To run the Laravel web app, we need to generate an `.env` file, use docker to run `composer install` (if you don't have it installed already), then run `docker-compose` on the compose file.

```bash
cd laravel-app
cp -a .env.example .env
sudo docker-compose exec app php artisan key:generate
sudo docker run --rm -v $(pwd):/app composer install
sudo docker-compose up -d
```

Now you can open the Laravel web app on port 8080 in the web browser