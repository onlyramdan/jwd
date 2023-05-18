# Rute Pernerbagan
Aplikasi web ini merupakan aplikasi pendaftaran rute penerbangan yang memungkinkan pengguna untuk memasukkan data tentang maskapai, bandara asal, bandara tujuan, harga tiket, dan menghitung total pajak dan biaya penerbangan.

## Features
* Formulir Pendaftaran: Pengguna dapat mengisi formulir dengan memasukkan nama maskapai, bandara asal, bandara tujuan, dan harga tiket. Semua inputan ini dibutuhkan untuk proses pendaftaran.

* Menghitung Total Pajak dan Biaya Penerbangan: Setelah pengguna mengisi formulir dan menekan tombol Submit, aplikasi akan menghitung total pajak berdasarkan bandara asal dan bandara tujuan yang dipilih. Selanjutnya, total biaya penerbangan dihitung dengan menambahkan total pajak dengan harga tiket yang diinputkan pengguna.

* Menampilkan Daftar Rute Penerbangan: Aplikasi ini juga menampilkan daftar rute penerbangan yang telah didaftarkan sebelumnya. Daftar ini mencakup informasi seperti maskapai, bandara asal, bandara tujuan, harga tiket, total pajak, dan total biaya penerbangan.

* Menghindari Duplikasi Data: Aplikasi ini telah dimodifikasi agar menghindari penginputan data yang duplikat. Sebelum menyimpan data baru, aplikasi akan memeriksa apakah data yang sama sudah ada dalam daftar. Jika ada, data baru tidak akan ditambahkan.

* Penyimpanan Data: Data rute penerbangan disimpan dalam file JSON untuk mempertahankan persistensi. Setiap kali ada penambahan data baru, file JSON akan diperbarui dengan data terbaru.

##  Tech
Kalkulator Sederhana dibangun dengan berikut : 
* [Pencil Porject](https://pencil.evolus.vn/) - Open-Source GUI protoyping tool that's available for All platform.
* [HTML](https://www.w3schools.com/html/) - Standart Markup langguage 
* [CSS](https://www.w3schools.com/css/) - style sheet language
* [PHP](https://www.php.net/)- popular general-purpose scripting language that is especially suited to web development.

## Requirement
* XAMPP 7.4.9 or Later
* PHP 7.2 or Later

## Structure
```
Aplikasi
│   index.php
│
├───css
│       style.css
│
├───data
│       data.json
│
└───img
        1469192493.jpg
        2044493-garuda-indonesia-780x390.jpg
        4d54a1d6-d3fd-4055-8dd0-eede68436068_169.png
        lion_air.jpg
        pesawat.jpg

```
## Instalation
Pindahkan Semua File ke dalam folder
    
    C:\xampp\htdocs\[your folder]

Start Apache pada XAMPP Control Panel

Akses pada browser

    localhost/[your folder]
    
## Credits
*[Ramdan](https://www.linkedin.com/in/onlyramdan/)

