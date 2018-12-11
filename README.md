# Laravel and VueJs Todo App

The Todo application can execute the following tasks : 

1. Create a new todo.
2. Update a todo in the list.
3. Remove a todo form the list.
4. check a todo

The data are persisted to the database, and the following is a screenshot of the application : 

![image](https://files.fm/thumb_show.php?i=jw9gefhe)

## Installation Instructions
### Laravel

- Run `composer install` to install all the dependencies in the `composer.json` file .
- Make sure to add the `.env` file  with the appropriate infromation to connect to the database. 
- Run `php artisan migrate` to migrate the table todos to the database.

### VueJs

- Run `npm install` to install all the dependencies in the `package.json` file.

## Serve The Application

- Run `php artisan serve` for a dev server. Navigate to `http://localhost:8000/`. 
- Make sure to run `npm run prod` to build the project.

## Running tests

### Laravel

- Run `phpunit` to run all the tests, or `phpunit --filter name-method` to run a test for a specific method.

### VueJs

- Run `npm run test` to run all the VueJs tests.

