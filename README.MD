# __Paul Standley__

![profile](profile.png)

## CLONE

**Lesson**

💻Code: https://github.com/coderstape/freecod...

⭐️Course Contents ⭐️

⌨️ (0:00) Introduction

⌨️ (1:14) What is Laravel?

⌨️ (2:07) Installing Laravel

⌨️ (5:30) First look at the project

⌨️ (7:15) Intro to php artisan

⌨️ (11:42) Generating login flow with make:auth

⌨️ (12:04) Setting Up the Front End with Node and NPM

⌨️ (20:00) Migrations and Setting Up SQLite

⌨️ (26:00) Designing the UI from Instagram

⌨️ (42:12) Adding Username to the Registration Flow

⌨️ (58:35) Creating the Profiles Controller

⌨️ (1:04:00) RESTful Resource Controller

⌨️ (1:09:10) Passing Data to the View

⌨️ (1:10:20) Adding the Profiles Mode, Migration and Table

⌨️ (1:17:30) Adding Eloquent Relationships

⌨️ (1:28:10) Fetching the Record From The Database

⌨️ (1:30:00) Adding Posts to the Database & Many To Many Relationship

⌨️ (2:04:24) Creating Through a Relationship

⌨️ (2:08:12) Uploading/Saving the Image to the Project

⌨️ (2:19:19) Resizing Images with Intervention Image PHP Library

⌨️ (2:27:42) Route Model Binding

⌨️ (2:31:48) Editing the Profile

⌨️ (2:46:46) Restricting/Authorizing Actions with a Model Policy

⌨️ (2:54:50) Editing the Profile Image

⌨️ (3:00:00) Automatically Creating A Profile Using Model Events

⌨️ (3:12:56) Default Profile Image

⌨️ (3:19:48) Follow/Unfollow Profiles Using a Vue.js Component

⌨️ (3:31:28) Many To Many Relationship

⌨️ (3:46:33) Calculating Followers Count and Following Count

⌨️ (3:48:55) Laravel Telescope

⌨️ (3:51:44) Showing Posts from Profiles The User Is Following

⌨️ (4:01:03) Pagination with Eloquent

⌨️ (4:03:25) N + 1 Problem & Solution

⌨️ (4:05:21) Make Use of Cache for Expensive Query

⌨️ (4:11:44) Sending Emails to New Registered Users

⌨️ (4:21:51) Wrapping Up

⌨️ (4:22:37) Closing Remarks & What's Next In your Learning

🎥Course from Coder's Tape. Check out their YouTube channel for more great Laravel tutorials: https://www.youtube.com/coderstape


---

### Bash :-)

```BASH

laravel new clone

php artisan serve

composer require laravel/ui --dev

php artisan ui vue --auth

npm install && npm run dev

```

migration problem fix app/Providers/AppServiceProvider.php

### php

```PHP

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;// ADD

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);// ADD
    }
}

```

---

## **Actions Handled By Resource Controller**

### __Verb__ | __URI__ | __Action__	| __Route Name__

#### GET | /photos | index | photos.index

#### GET | /photos/create | create  |  photos.create

#### POST | /photos | store | photos.store

#### GET | /photos/{photo} | show | photos.show

#### GET | /photos/{photo}/edit | edit | photos.edit

#### PUT/PATCH | /photos/{photo} | update | photos.update

#### DELETE | /photos/{photo} | destroy | photos.destroy

---

### Bash ¬

```BASH

php artisan migrate

php artisa make:controller ProfilesController

php artisan make:model Profile -m

php artisan tinker
>>> $user->profile->url = 'paulstandley.com';
=> "paulstandley.com"
>>> $user->save();
=> true
>>> $user->push();
=> true

php artisan make:model Post -m

php artisan make:conrtoller PostsController -r

php artisan storage:link

composer require intervention/image

```

---

## Credits

svg by Symbolicons on [iconfinder](https://www.iconfinder.com/icons/216965/clone_storm_trooper_icon).

https://laravel.com/docs/6.x/controllers

https://www.youtube.com/watch?v=ImtZ5yENzgE&t=7754s 2:40:00 add profile to database
