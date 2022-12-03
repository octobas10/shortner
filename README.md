# urlshortener
Laravel URL Shortener

Steps to follow:
1) Open the command Prompt
2) run command : git clone https://github.com/vipul-cliqbux/urlshortener
3) Change directory to urlshortener [cd urlshortener]
3) composer update
4) rename .env.example to .env file as per you choice for database name (urlshortener)
5) php artisan migrate
6) php artisan key:generate
7) php artisan route:clear && php artisan config:cache && php artisan config:clear && php artisan view:clear
8) php artisan serve
9) run this url in your browser http://localhost:8000/generate-shorten-link
