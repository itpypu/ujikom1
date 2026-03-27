# Laravel Debugging Test Project

Project ini adalah **mini project Laravel** untuk tes kandidat staf TIK.

## Tujuan
Kandidat diminta menjalankan project, menemukan bug, menjelaskan penyebab, lalu memperbaikinya.

## Bug yang sengaja ditanam
1. Validasi form tiket tidak bekerja karena nama field form tidak cocok dengan validasi backend.
2. User biasa bisa melihat semua tiket dan membuka tiket milik user lain.
3. Filter status dan search menghasilkan data yang salah karena `orWhere` tidak dikelompokkan.
4. Pagination tidak mempertahankan query string saat pindah halaman.
5. Upload file bermasalah karena penyimpanan tidak memakai disk `public`.

## Catatan
- Project ini disusun agar terlihat seperti project Laravel sederhana.
- Untuk benar-benar menjalankannya, letakkan file-file ini ke dalam fresh install Laravel 11.
- Jalankan migrasi dan seeding sesuai kebutuhan.

## Akun contoh (buat manual / via seeder)
- Staff: `staff@example.com` / `password`
- User: `user@example.com` / `password`

## Tugas kandidat
1. Jalankan project.
2. Temukan bug 1–5.
3. Perbaiki bug.
4. Buat file `DEBUG_REPORT.md`.
"# ujikom1" 
