## Quick Start

After clone this project in your local storage, you need to do the following steps:

- This application works with a schedule, that execute some methods every 10 minutes. To put these schedules work, you can run in your workspace the command "php artisan schedule:work". This schedule will keep the auth token always fresh and working and update the GM list. More information about schedulers you can access [Laravel Docs](https://laravel.com/docs/10.x/scheduling).