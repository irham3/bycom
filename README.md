## Configuration

1. Download DB dan images di https://drive.google.com/drive/folders/1g9mBwOCpYAMAktfRwyUrNpzfQvuyGZfX?usp=share_link
2. Masukkan folder images ke `public\storage` atau `storage\app\public`
3. Jalanin di terminal atau CMD
```sh
docker-compose up -d --build
```
4. Import file `bycom.sql` ke phpmyadmin/dbms
5. `php artisan migrate`

## Admin Account
Buka link url `/admin/login` </br> </br>
__Email:__  admin@bycom.com </br>
__Password:__  12345678

