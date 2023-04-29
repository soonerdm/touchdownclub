# Running the Touchdown Club Development Environment

To run the project in the development environment, you need to have `Make` and `Docker` installed on your machine. Follow the steps below to run your development server:

1. Build the image from the `dev.Dockerfile`:

Change your working directory to the project directory, then run the command `make` or `make build` on your terminal. If you prefer not to use `make`, you can always use regular Docker commands:

```shell
docker build \
	--build-arg user=$(whoami) --build-arg uid=$(id -u) --tag touchdownclub:dev --file dev.Dockerfile .
```

2. Run project containers:

The project has the following architecture:

![architecture](./architecture.png)

You can use one of the commands below to run the project containers:

```shell
docker compose up     # Running in the foreground
docker compose up -d  # Running in the background (daemon mode)
```

3. Connect to the `app` container and install the required dependencies:

NOTE: Make sure that you are at the same level as the `docker-compose.yml` file.

```shell
docker compose exec app php # This will bind your shell to the application container shell

# On the application container shell, run:
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
```

4. Turn on `Laravel Mix` server for compiling and hot-reloading assets files (the command bellow have to be executed inside the `app` container):

```shell
npm run dev
```

Keep this command running while working on the project. Your application should be accessible at `http://localhost:8000/`.

Happy Coding!
