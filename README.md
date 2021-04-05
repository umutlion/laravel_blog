# Laravel Blog!

Hi! A user registration system that manages two types of users:  Admin  and Normal Users. 

You can add category, posts. Then you can update, publish/unpublish actions. Normal users can **comment** on the posts they want. 

## Installation

```
$ git clone https://github.com/umutlion/laravel_blog.git
$ cd laravel_blog
$ cp .env.example .env
$ composer install
$ php artisan serve
```

## How to settings
If you want rebuild to database, run this command.
```
$ php artisan migrate:fresh --seed
```
And then,

```
email: laraveltest@testmail.com
password: 123456789
```
You can login.
