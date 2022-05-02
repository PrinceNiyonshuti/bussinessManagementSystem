<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## About - - Business Management System

The system that will administer or manage companies and their employees and clients. 


## 1. Problems and findings

### Problems

- working with Queue workers

### Findings

- Use of Notifications
- Use of Custom email
- Use of Queues
- Use of queue jobs
- use of queue workers

## 2. Time Taken to Complete

- The project took 5 hours

## 3. Coding style and standards

- the coding style is used was line coding and error control , and the standard of using safe ,secure and portable codes

## 4. Source code files

[Link To Repository](https://github.com/PrinceNiyonshuti/bussinessManagementSystem.git)

[Link To Deployed App](https://bms-laravel.herokuapp.com/)

## 5. Documentation

before starting to run the project , make sure you have mailtrap account in order to check the verification link

### Requiments
- Mailtrap [https://mailtrap.io/]
- create your .env file 
- create your database
### .env Mailtrap corresponding data

    MAIL_MAILER=
    MAIL_HOST=
    MAIL_PORT=
    MAIL_USERNAME=
    MAIL_PASSWORD=
    MAIL_ENCRYPTION=
    MAIL_FROM_ADDRESS=

### after run these script 
    Run composer install
    Run cp .env.example .env or copy .env.example .env
    Run php artisan key:generate
    Run php artisan migrate
    Run php artisan db:seed
    Run php artisan storage:link
    Run php artisan queue:work
    Run php artisan serve


## Feedback and issues

Any issue and feedback from the app don't hesitate to make an issue
