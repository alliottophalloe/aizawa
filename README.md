# aizawa
Webshell ini memungkinkan Anda menjalankan perintah melalui permintaan HTTP dengan tujuan menghindari WAF atau IDS dan melewati `disable_function`.

## Fitur
- **Bypass `disable_function`**: Beberapa metode bypass disediakan untuk memastikan perintah tetap dijalankan meski ada pembatasan pada server.
- **Output Encoding**: Output perintah diencode dengan base64 untuk menghindari deteksi.
- **Logging**: Setiap akses dan perintah yang dijalankan akan dicatat dalam log.

## Instalasi
1. Salin seluruh isi folder `src` ke server Anda.
2. Edit file `config.php` dan atur kunci akses (`access_key`).
3. Pastikan file `access.log` dapat ditulis oleh server untuk mencatat log.

## Penggunaan
Kirim permintaan POST ke `webshell.php` dengan parameter:
- `key`: Kunci akses yang telah diatur.
- `cmd`: Perintah yang ingin dijalankan.

Output akan dikembalikan dalam format base64.

## Contoh
```bash
curl -X POST -d "key=kunci-rahasia-anda&cmd=whoami" http://server-anda/webshell.php
