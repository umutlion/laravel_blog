# Laravel Blog!

Hi!  A user registration system that manages two types of users:  Admin  and Normal Users. 

You can add category, posts. Then you can update, publish/unpublish actions. Normal users can **comment** on the posts they want. 


If you don't have Composer on your computer, you can download it here.

[Download Composer](https://getcomposer.org/download/)




## Installation

```
$ git clone https://github.com/umutlion/laravel_blog.git
$ cd laravel_blog
$ cp .env.example .env
$ composer install
$ php artisan key:generate
$ php artisan serve
```

## How to settings
If you want rebuild to database, run this command.
```
$ php artisan migrate
$ php artisan db:seed
```
And then,

```
email: laraveltest@testmail.com
password: 123456789
```
You can Admin panel. ( localhost:8000/admin )

If you want to login with example user,

```
email: usertest@testmail.com
password: 123456789
```

