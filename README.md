Clone Project ini setelah selesai pada terminal masuk kedalam directory project
Ketikkan:

composer Install
cp .env.example .env
php artisan key:generate
php artisan migrate (Jangan lupa set up database)
php artisan db:seed
