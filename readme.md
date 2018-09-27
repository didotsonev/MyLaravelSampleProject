# My Sample Project

## About the project

This project was made to show my developer skills with Laravel, JQuery and my practical knowledge of them. 

####Business rules
Basically, this is a project to manage companies and their employees. Mini-CRM.

- The company name is required, email is required and must be unique
- The employee first name is required, email must be unique
- One company can have many employees
- One employee belongs to one company
- Only registered users can view, create, edit and delete the companies and their employees

With this simple project you can check the using of the following things:

- MVC
- Auth
- CRUD and Resource Controllers
- Eloquent and Relationships
- Database migrations and seeds
- Form Validation and Requests
- File management (with public folder)
- Email notification
- Multi-language
- Use of additional packages
- Use of middlewares
- Basic Bootstrap front-end
- JQuery and AJAX requests
- Bootbox
- Datatables

## How to run the project locally

####Requirements 

- Everything to run laravel 5.7 (apache + php + mysql)
- Composer

####Steps

- Download/clone the project
- Create a database locally with utf8_general_ci collation
- Rename ```.env.example file``` to ```.env``` inside your project root and fill the database information and ```mailtrap``` credentials if you want to check the email functionality. (windows wont let you do it, so you have to open your console cd your project root directory and run mv ```.env.example``` ```.env``` )
- Open the console and cd your project root directory
- Run ```composer install```
- Run ```php artisan migrate:fresh --seed```
- Run ```php artisan serve```
- Login with email ```admin@admin.com``` and password ```password```