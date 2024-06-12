-   Install laravel
-   Masuk ke fil `.env`, ubah data berikut [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=9m33s):
    -   APP_NAME ganti dengan nama aplikasi kita
    -   APP_TIMEZONE ganti sesuai dengan lokasi kita, berikut timezone yang menjadi acuan untuk beberapa lokasi di indonesia [->](https://www.rumahweb.com/journal/cara-setting-timezone-dengan-script-php/)
    -   APP_URL ganti dengan url api yang kita gunakan
    -   APP_LOCALE dan APP_FALLBACK_LOCALE jadi `id`
    -   APP_FAKER_LOCALE jadi `id_ID`
-   Ubah DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME dan DB_PASSWORD
-   Ubah FILESYSTEM_DISK jadi `public`
-   Install livewire, [blade tabler icon](https://github.com/ryangjchandler/blade-tabler-icons), tailwindcss, postcss, tailwind-scrollbar-hide dan daisyui [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=10m45s)
-   Lakukan migrasi untuk membuat database dan table dengan command `php artisan migrate` [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=14m48s)
-   Saat melakukan migrasi database, kita mengalami error ini:
    ```
    SQLSTATE[HY000] [2002] No such file or directory (Connection: mysql, SQL: select table_name as `name`, (data_length + index_length) as `size`, table_comment as `comment`, engine as `engine`, table_collation as `collation` from information_schema.tables where table_schema = 'larapost' and table_type in ('BASE TABLE', 'SYSTEM VERSIONED') order by table_name)
    ```
    Itu terjadi karena DB_USERNAME dan DB_PASSWORD yang kita daftarkan di file `.env` belum kita daftarkan di mysql server kita, Solusinya kita harus [mendaftarkan user tersebut ke mysql server](https://github.com/argianardi/laratranspay/blob/main/guide/project_guide.md#mendaftarkan-user-baru-di-mysql-server-ref)
-   Atur route di file `routes/web.php` untuk user yang sudah login, user yang belum login dan juga return halaman untuk route dengan path `/` [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=15m13s)
-   Import font dari google font [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=20m12s)
-   Buat UI untuk halaman guest user [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=21m53s)
-   Buat action login [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=28m45s)
-   Masukkan data user (yang nantinya dijadikan admin yang bisa login ke aplikasi kita) secara manual lewat command `seed`. Yang diawali dengan setup column dan table user di directori `database/seeders/DatabaseSeeder.php`. [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=33m15s)
-   Buat Ui untuk halaman auth user [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=34m23s)
-   Buat Ui untuk halaman Profile [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=45m28s)
-   Buat method login [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=52m27s)
-   Buat method Logout [ref](https://www.youtube.com/watch?v=7jMsjF10xXE&list=PLf0cDJn8QXpN_yWwzr2am_75eQU-GS8eW&index=2&t=59m30s)
