## Konsuli-Quiz


1. Pengaturan Proyek
   - Membuat repository baru di GitHub untuk proyek
   - Menginstal Laravel menggunakan Composer
   - Mengonfigurasi koneksi database di file `.env`
   - Menjalankan migrasi database untuk membuat tabel-tabel yang diperlukan

2. Manajemen Pengguna
   - Membuat model `User` dengan atribut yang sesuai
   - Mengimplementasikan fitur registrasi pengguna
   - Mengimplementasikan fitur login dan logout pengguna
   - Menambahkan fitur edit profil pengguna
   - Mengintegrasikan autentikasi menggunakan Laravel's built-in authentication system

3. Manajemen Kuis
   - Membuat model `Quiz` dengan atribut yang sesuai
   - Mengimplementasikan fitur CRUD (Create, Read, Update, Delete) untuk kuis
   - Menambahkan fitur visibilitas kuis (publik/pribadi)
   - Mengimplementasikan fitur berbagi kuis dengan pengguna lain
   - Menambahkan fitur pencarian kuis

4. Manajemen Pertanyaan
   - Membuat model `Question` dengan atribut yang sesuai
   - Mengimplementasikan fitur CRUD untuk pertanyaan
   - Menambahkan dukungan untuk berbagai jenis pertanyaan (pilihan ganda, isian singkat, dll.)
   - Mengimplementasikan fitur pengacakan urutan pertanyaan dalam kuis

5. Manajemen Jawaban
   - Membuat model `Answer` dengan atribut yang sesuai
   - Mengimplementasikan fitur CRUD untuk jawaban
   - Menambahkan fitur penanda jawaban yang benar

6. Fitur Pengerjaan Kuis
   - Mengimplementasikan fitur mengerjakan kuis bagi pengguna
   - Menampilkan pertanyaan satu per satu dengan navigasi antar pertanyaan
   - Menyimpan jawaban pengguna untuk setiap pertanyaan
   - Menghitung skor kuis berdasarkan jawaban yang benar
   - Menampilkan hasil kuis setelah selesai mengerjakan

7. Manajemen Tag
   - Membuat model `Tag` dengan atribut yang sesuai
   - Mengimplementasikan fitur CRUD untuk tag
   - Menambahkan fitur pencarian tag
   - Mengimplementasikan fitur penggunaan tag pada kuis

8. Fitur Pencarian
   - Mengimplementasikan pencarian kuis berdasarkan judul, deskripsi, atau tag
   - Menambahkan fitur filter pencarian berdasarkan kategori atau tingkat kesulitan
   - Mengoptimalkan performa pencarian menggunakan teknik indexing atau caching

9. Notifikasi
   - Membuat model `Notification` dengan atribut yang sesuai
   - Mengimplementasikan fitur notifikasi untuk aktivitas penting (berbagi kuis, kuis baru, dll.)
   - Menampilkan notifikasi kepada pengguna melalui antarmuka aplikasi

10. Langganan dan Pembayaran
    - Membuat model `Subscription` dengan atribut yang sesuai
    - Membuat model `Payment` dengan atribut yang sesuai
    - Mengimplementasikan fitur langganan berbayar dengan pilihan paket yang berbeda
    - Mengintegrasikan gateway pembayaran untuk memproses transaksi
    - Mengelola status langganan pengguna dan akses ke fitur berbayar

11. Antarmuka Pengguna
    - Merancang dan mengimplementasikan antarmuka pengguna yang intuitif dan responsif
    - Menggunakan HTML, CSS, dan JavaScript untuk membangun tampilan yang menarik
    - Mengintegrasikan framework front-end seperti Bootstrap atau Vue.js jika diperlukan
    - Memastikan kompatibilitas lintas peramban dan perangkat

12. Pengujian
    - Menulis pengujian unit untuk setiap komponen aplikasi menggunakan PHPUnit
    - Melakukan pengujian integrasi untuk memastikan interaksi antar komponen berjalan dengan baik
    - Melakukan pengujian fungsional untuk memverifikasi alur kerja utama aplikasi
    - Menjalankan pengujian secara otomatis menggunakan continuous integration (CI)

13. Deployment
    - Menyiapkan server produksi dengan konfigurasi yang sesuai
    - Mengonfigurasi web server (Apache/Nginx) dan PHP
    - Mengunggah kode aplikasi ke server produksi
    - Mengonfigurasi database di server produksi
    - Melakukan migrasi database di server produksi
    - Mengonfigurasi penjadwalan tugas (cron jobs) jika diperlukan
    - Memastikan aplikasi berjalan dengan baik di lingkungan produksi

14. Pemeliharaan dan Peningkatan
    - Memantau performa aplikasi secara berkala
    - Mengatasi masalah atau bug yang dilaporkan oleh pengguna
    - Melakukan pembaruan keamanan dan perbaikan bug
    - Menambahkan fitur baru berdasarkan umpan balik pengguna
    - Mengoptimalkan performa aplikasi sesuai kebutuhan
   

## Diagram Kelas (Class Diagram)

```
+------------------------+         +------------------------+
|         User           |         |         Folder         |
+------------------------+         +------------------------+
| -id: int               |         | -id: int               |
| -name: string          |         | -user_id: int          |
| -email: string         |         | -name: string          |
| -password: string      |         | -description: string   |
| -avatar: string        |         | -visibility: string    |
| -bio: string           |         | -created_at: timestamp |
| -website: string       |         | -updated_at: timestamp |
| -google_id: string     |         +------------------------+
| -facebook_id: string   |                     |
| -twitter_id: string    |                     |
| -email_verified_at: timestamp |              |
| -created_at: timestamp |                     |
| -updated_at: timestamp |                     |
+------------------------+                     |
            |                                  |
            |                         +------------------------+
            |                         |       Flashcard        |
            |                         +------------------------+
            |                         | -id: int               |
            |                         | -folder_id: int        |
            |                         | -front: string         |
            |                         | -back: string          |
            |                         | -image: string         |
            |                         | -audio: string         |
            |                         | -created_at: timestamp |
            |                         | -updated_at: timestamp |
            |                         +------------------------+
            |
+------------------------+         +------------------------+
|          Quiz          |         |        Question        |
+------------------------+         +------------------------+
| -id: int               |         | -id: int               |
| -user_id: int          |         | -quiz_id: int          |
| -title: string         |         | -question: string      |
| -description: string   |         | -question_type: string |
| -difficulty: string    |         | -image: string         |
| -time_limit: int       |         | -created_at: timestamp |
| -visibility: string    |         | -updated_at: timestamp |
| -created_at: timestamp |         +------------------------+
| -updated_at: timestamp |                     |
+------------------------+                     |
                                     +------------------------+
                                     |         Answer         |
                                     +------------------------+
                                     | -id: int               |
                                     | -question_id: int      |
                                     | -answer: string        |
                                     | -is_correct: boolean   |
                                     | -created_at: timestamp |
                                     | -updated_at: timestamp |
                                     +------------------------+
```
## Diagram Use Case (Use Case Diagram)

```
+------------------+
|      User        |
+------------------+
| -Register        |
| -Login           |
| -Logout          |
| -Edit Profile    |
| -Create Folder   |
| -Edit Folder     |
| -Delete Folder   |
| -Create Flashcard|
| -Edit Flashcard  |
| -Delete Flashcard|
| -Create Quiz     |
| -Edit Quiz       |
| -Delete Quiz     |
| -Attempt Quiz    |
| -View Results    |
| -Subscribe       |
| -Make Payment    |
+------------------+
         |
         |
         |
         |
+------------------+
|      System      |
+------------------+
| -Authenticate User |
| -Manage Folders    |
| -Manage Flashcards |
| -Manage Quizzes    |
| -Manage Questions  |
| -Manage Answers    |
| -Manage Tags       |
| -Manage Collaborations |
| -Manage Quiz Attempts |
| -Manage Notifications |
| -Manage Subscriptions |
| -Process Payments    |
+------------------+
```

## Entity Relationship

```
[User]
*id {PK, AI}
name
email
password
avatar
bio
website
google_id
facebook_id
twitter_id
email_verified_at
created_at
updated_at

[Folder]
*id {PK, AI}
*user_id {FK, AI}
name
description
visibility
created_at
updated_at

[Flashcard]
*id {PK, AI}
*folder_id {FK, AI}
front
back
image
audio
created_at
updated_at

[Quiz]
*id {PK, AI}
*user_id {FK, AI}
title
description
difficulty
time_limit
visibility
created_at
updated_at

[Question]
*id {PK, AI}
*quiz_id {FK, AI}
question
question_type
image
created_at
updated_at

[Answer]
*id {PK, AI}
*question_id {FK, AI}
answer
is_correct
created_at
updated_at

[Tag]
*id {PK, AI}
name
created_at
updated_at

[FlashcardTag]
*flashcard_id {FK, AI}
*tag_id {FK, AI}

[UserFolder]
*user_id {FK, AI}
*folder_id {FK, AI}
permission

[FolderCollaboration]
*folder_id {FK, AI}
*user_id {FK, AI}
role

[QuizAttempt]
*id {PK, AI}
*user_id {FK, AI}
*quiz_id {FK, AI}
score
started_at
finished_at

[QuizResult]
*id {PK, AI}
*quiz_attempt_id {FK, AI}
*question_id {FK, AI}
*answer_id {FK, AI}
is_correct

[Notification]
*id {PK, AI}
*user_id {FK, AI}
message
read_at
created_at
updated_at

[Subscription]
*id {PK, AI}
*user_id {FK, AI}
plan
start_date
end_date
created_at
updated_at

[Payment]
*id {PK, AI}
*user_id {FK, AI}
*subscription_id {FK, AI}
amount
payment_method
transaction_id
status
created_at
updated_at

User *--1 Folder
User *--1 Quiz
Folder *--1 Flashcard
Quiz *--1 Question
Question *--1 Answer
Flashcard *--* Tag {via FlashcardTag}
User *--* Folder {via UserFolder}
Folder *--* User {via FolderCollaboration}
User *--* Quiz {via QuizAttempt}
QuizAttempt *--1 QuizResult
QuizResult *--1 Question
QuizResult *--1 Answer
User *--1 Notification
User *--1 Subscription
User *--1 Payment
Subscription *--1 Payment
