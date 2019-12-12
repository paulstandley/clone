# __Paul Standley__

![profile](profile.png)

## CLONE

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

### Bash ¬

```BASH

php artisan migrate

php artisa make:controller ProfilesController

php artisan make:model Profile -m


```

---

## **Actions Handled By Resource Controller**

### __Verb__ | __URI__ | __Action__	| __Route Name__
#### GET | /photos | index | photos.index
#### GET | /photos/create | create  |  photos.create
#### POST | /photos	| store | photos.store
#### GET | /photos/{photo} | show | photos.show
#### GET | /photos/{photo}/edit | edit | photos.edit
#### PUT/PATCH | /photos/{photo} | update | photos.update
#### DELETE	| /photos/{photo}	| destroy | photos.destroy

---


## Creadit

svg by Symbolicons on [iconfinder](https://www.iconfinder.com/icons/216965/clone_storm_trooper_icon).