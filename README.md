# Todolist App
This is a simple todolist application built with Laravel, Livewire, and TailwindCSS.

### Installation
1. Clone the repository:
```
git clone https://github.com/DocCreeps/Todolist.git
```
2. Install dependencies:
```
composer install
npm install && npm run dev
```
3. Copy .env.example file to .env:
```
cp .env.example .env
```
4. Generate application key:
```
php artisan key:genrate
``` 
5. Use the database information in your .env file to create a database for the application.
```
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
6. Migrate the database:
``` 
php artisan migrate
```

### Usage
1. Run the application:
``` 
php artisan serve
```
2. Navigate to http://localhost:8000 in your web browser.

### Features
- Create, edit, and delete tasks
- Mark tasks as complete
- view completed tasks
- view incomplete tasks
- view all tasks
- view tasks by date created
- view tasks by date updated
- view tasks by date completed

### Credits
- [Laravel](https://laravel.com/)
- [Livewire](https://laravel-livewire.com/)
- [TailwindCSS](https://tailwindcss.com/)
