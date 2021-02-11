#prototype for smart home device controller

- git clone
- composer install
- cp .env.example .env
- .env fail? savienot izvēlēto db programmu
- php artisan key:generate
- php artisan migrate --seed - Migrēt, seedot (būs tabulas ar random datiem)
- palaist sql un apache serveri
- localhost:8000 - piereģistrējoties, var aplūkot visu.