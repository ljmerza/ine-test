To run the Laravel web app, we need to generate an `.env` file, use docker to run `composer install` (if you don't have it installed already).

```bash
cd laravel-app
cp -a .env.example .env
sudo docker-compose exec app php artisan key:generate
sudo docker run --rm -v $(pwd):/app composer install
```bash

We need to make sure te file permissions are correct so go back to the root dir of this repo and run

```bash
sudo chown -R $USER:$USER ~/laravel-app
```

Then run `docker-compose` to start the Laravel web app.

```bash
sudo docker-compose up -d
```

Now you can open the Laravel web app on port 8080 in the web browser