

##Installation
----------------------------------------------

NB: Make sure you have composer installed or you may downlaod composer at => https://getcomposer.org/download/


git clone

Open the console and cd into your project root directory

Create your database

Rename .env.example file to .env inside your project root and update the database information. (windows wont let you do it, so you have to open your console cd your project root directory and Run mv .env.example .env )

Run composer install or php composer.phar install

Run php artisan key:generate

Run php artisan migrate

Run php artisan db:seed to run seeders - Optional (Incase of an error run => composer dump-autoload)

Run php artisan serve

###You can now access your project at localhost:8000 🙂

If for some reason your project stop working run :


composer install

php artisan migrate
