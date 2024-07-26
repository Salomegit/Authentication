## Notes App

This is a full-stack notes app built with Laravel, utilizing MySQL, phpMyAdmin, and Mailpit server. The project is run locally using Docker. Below are the steps to set up and run the project.

## Why Docker?

Docker is used in this Laravel project to provide a consistent and reproducible development environment. By containerizing the application and its dependencies, Docker ensures that all developers and environments run the application in the same way, eliminating issues caused by differences in local setups. Docker simplifies dependency management and makes it easy to scale and deploy the application in different environments.

## Prerequisites
- Ensure you have the following installed on your system:

- Docker: [Install Docker](https://docs.docker.com/engine/install/)

- Docker Compose: [Install Docker Compose](https://docs.docker.com/compose/install/)

## Getting Started
1. Clone the Repository

```sh
git clone "repository-url"

cd "repository-directory"

```
2. Install Laravel Sail

- Laravel Sail is a lightweight command-line interface for interacting with Laravel's default Docker configuration.

3. Configure Environment Variables

- Copy the .env.example file to .env and update the environment variables as needed:
``` sh
cp .env.example .env
```
4. Build and Start the Docker Containers

- Run the following command to build and start the Docker containers:
 ```sh
  ./vendor/bin/sail up -d
```
- This will build and start the Docker containers defined in your docker-compose.yml file.

5. Access the Application

- Laravel Application: http://localhost:8081

- phpMyAdmin: http://localhost:8082

- Mailpit: http://localhost:8025

6. Running Sail Commands

- You can run various Sail commands using the following syntax:"./vendor/bin/sail <command>"

- For example, to run migrations:
```sh
  ./vendor/bin/sail artisan migrate
```

7. Stopping the Containers

- To stop the Docker containers, run:
```sh
./vendor/bin/sail down"
```
8. Additional Notes

- Ensure your Docker is running before executing the Sail commands.

- You might need to adjust the .env file settings to match your local environment configurations
