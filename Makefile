c:
	php artisan optimize && php artisan cache:clear && php artisan config:clear
M:
	php artisan migrate:fresh --seed
