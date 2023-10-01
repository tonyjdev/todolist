## TODO List

Tiny Todo-List made with:
- [Laravel 10](https://laravel.com/docs/10.x)
- [Livewire 3](https://livewire.laravel.com/)
- [Bootstrap 5](https://getbootstrap.com/)

## Screenshots

![App Screenshot](https://via.placeholder.com/468x300?text=App+Screenshot+Here)

## Requirements
- Composer
- Node
- NPM

## Installation
1 - Clone the project
```
git clone git@github.com:tonyjdev/todolist.git
cd todolist
```
2 - Install the dependencies
```
composer install
npm install
```
3 - Generate the application Key
```
cp .env.example .env
php artisan key:generate
```
4 - Database configuration
```
# .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=root
DB_PASSWORD=password
```
5 - Run migrations
```
php artisan migrate
```
6 - Start the server
```
php artisan serve
```
## License

[MIT](https://choosealicense.com/licenses/mit/)

