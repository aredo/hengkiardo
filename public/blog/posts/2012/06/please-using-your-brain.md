<!--
id: 25996203955
link: http://blog.hengkiardo.com/post/25996203955/please-using-your-brain
slug: please-using-your-brain
date: Wed Jun 27 2012 19:25:00 GMT+0700 (WIT)
publish: 2012-06-027
tags: 
title: Please using your brain..!!
-->


Dari judulnya mungkin sedikit terkesan kasar, atau mungkin lebih kasar
lagi kalau judul yang saya gunakan itu, “Please using your f\*cking
brain.”

Kalimat tesebut langsung terlintas di kepala saya, ketika saya harus
berkomunikasi dengan Teknikal Support (TS) salah satu hosting di
Indonesia, khususnya kota Jakarta. saya tidak akan menyebutkan nama
hosting tersebut, karena saya juga berusaha mengjaga nama baik dari
hosting tersebut.

Tapi kali ini saya benar-benar tidak sabar lagi menghadapi
jawaban-jawaban yg diberikan oleh TS dari hosting tersebut. Awalnya saya
hanya membuat tiket, untuk melaporkan bahwa salah satu website client
saya yang ada di hosting tersebut down dan tidak bisa di buka. Saya
sudah menebak, bahwa website down karena service database PostgreSQL
mati. Karena masalah sebelum-sebelumnya di sebabkan service database
yang mati. akhirnya saya mengirimkan tiket/email ke Supportd dari
hosting tersebut.

Saya menunggu beberapa jam, akhirnya saya dapat balasan email dari TS.
Mereka mengakui bahwa service database mati lagi. Dan saya harus
menunggu cukup lama untuk mereka melakukan *restart*service database
PostgreSQL.

Menunggu dan menunggu yg cukup lama, akhirnya saya dapat email menjelang
sore hari, bahwa service sudah di *restart. * Lalu saya coba buka
website tersebut, dan ya berhasil di buka tapi ada error coding. Saya
penasaran kenapa setelah service database, dan website bisa di buka tp
di home page ada error sintaks. Lalu saya masuk coba cek script tersebut
melalu FTP Client. setelah saya cek, ternyata error nya dikarenakan
*result query *pada sintaks tersebut adalah *null*. Lalu saya coba cek
ke database PostgreSQL melalui *CPanel* dan menggunakan *phpPgamdin*,
dan ternyata **semua table di database tidak ada, termasuk views,
sequence, functions, trigger** tidak ada.

Lalu saya kembali harus mengirim tiket/email ke TS dari Hosting
tersebut, dan lagi lagi saya harus menunggu cukup lama untuk mendapatkan
balasan email. akhirnya saya dapat email menjelang malam hari. 

> silahkan di coba kembali , sepertinya cpanel tidak dapat dump database
> secara otomatis , sehingga harus kami dump secara manual , silahkan di
> check kembali situs2 anda lalu informasikan kepada kami jika ada
> kekurangan

saya membaca isi dari email ini seperti terasa aneh, permasalahan hanya
service database mati, “*tapi kenapa semua table, views, functions,
trigger, sequence dll harus terhapus?*" lalu saya coba tanyakan ke
mereka tapi tidak ada balasan. Membuat saya tambah *jengkel* dan emosi.

Karena database sudah di restore saya coba buka website tersebut
kembali, dan untuk frontend berhasil dibuka dan tidak ada error lagi.
Lalu saya coba masuk ke CMS, sekalian melakukan update yg diminta
client, *semakin cepat selesai semakin cepat dapat uang dari client
:lol *

Saya coba masuk ke CMS sebagai admin, tapi kenapa selalu gagal dan error
password. Saat itu saya berfikir saya yg lupa password dan username.
Kemudian saya berfikir, saya bisa lihat ke database username dan
password agar saya bisa masuk ke CMS sebagai admin. Tapi yg terjadi,
saya tidak bisa login ke Cpanel menggunakan password yg sebelumnya saya
gunakan. Lalu saya mencoba akses melalui FTP Client, dan tidak berhasil
juga karena username dan password untuk akses FTP tidak *correct. *

Sekali lagi saya masih coba sabar dan mengirimkan email ke TS Hosting
tersebut. Menayakan kenapa saya tidak bisa login ke Cpanel menggunakan
username dan password yg sebelumnya. Lagi lagi saya harus menunggu lama
untuk mendapatkan balasan dari email saya. Dan malam hari tepatnya pukul
9 malam, setelah saya sampe dirumah, baru saya mendapatkan balasan email
dari TS tersebut dan benar password akses ke Cpanel berubah. Saya coba
menggunakan password tersebut, karena saya harus melakukan update yg
diminta clien, sembari saya berfikir “k*enapa hanya karena merestore
database password ke CPanel saya harus berubah??”*. 

Lalu saya masuk ke Cpanel dan masuk ke database untuk melihat username
dan password utk login ke CMS, dan kali ini saya tidak bisa lagi menahan
amarah saya karena *table user *di database tidak ada. kembali saya
harus email lagi TS dari Hosting tersebut. untuk memberitahukan
bahwa *table user *di database website tidak berhasil di restore. 

Saya harus menunggu sangat lama balasan email dari Hosting tersebut.
Akhirnya saya mendapat balasan email menjelang malam hari, dan isi
emailnya hanya menanya kan apakah saya sudah berhasil masuk ke Cpanel. 

Dan untuk yg ini saya tidak bisa menahan sabar saya lagi, dengan jelas
saya email ke mereka kenapa tabel user di database website tersebut
tidak. apakah dihapus, gagal di restore atau apa? tapi yg saya dapatkan
hanya pertanyaan apakah saya sudah login ke CPanel.

Dengan rasa emosi saya membalas email mereka,

> "Hi Mr Support, Please using your fucking brain..!! Saya tidak mungkin
> tahu tabel user di database terhapus kalau saya tidak masuk terlebih
> dahulu ke Cpanel dan akses melalu phppgAdmin yg ada di Cpanel. Tolong
> di gunakan logika anda, karena anda seorang teknikal support harusnya
> anda memiliki logika yang baik."

