Steps to set up repo locally:

git clone https://github.com/MattYeend/laravel-hr-system.git
Navigate to new folder
Run composer install
Copy .env.example file and name it .env
Run php artisan key:generate and fill out correct database details
Run npm run dev && npm run dev
Run php artisan migrate and php artisan db:seed
Run php artisan serve
To remove cached files, run: php artisan cache:clear && php artisan config:clear && php artisan view:clear && php artisan route:clear && php artisan event:clear or you can run php artisan optimize:clear to run all caches in one go

To setup a link for image storage, run php artisan storage:link

To create a model, resource controller, and migration in one command line: `php artisan make:model Todo -mcr`
- `-m` is the migration
- `-c` is the controller
- `-r` makes the controller a resource controller