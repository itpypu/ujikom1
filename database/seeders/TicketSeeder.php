<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        $tickets = [
            ['ticket_number' => 'TIK-2026-0001', 'email' => 'budi@example.com', 'unit' => 'TU', 'category' => 'internet', 'title' => 'Internet ruang TU sering putus', 'description' => 'Koneksi internet di ruang TU sering terputus sejak pagi dan mengganggu input data.', 'priority' => 'high', 'status' => 'open', 'reported_at' => '2026-03-21 08:10:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0002', 'email' => 'siti@example.com', 'unit' => 'Perpustakaan', 'category' => 'printer', 'title' => 'Printer perpustakaan tidak merespons', 'description' => 'Printer menyala tetapi tidak menerima perintah cetak dari komputer petugas.', 'priority' => 'medium', 'status' => 'in_progress', 'reported_at' => '2026-03-21 09:15:00', 'attachment' => 'tickets/sample-printer-error.jpg'],
            ['ticket_number' => 'TIK-2026-0003', 'email' => 'andre@example.com', 'unit' => 'Lab Komputer', 'category' => 'akun', 'title' => 'Tidak bisa login ke LMS', 'description' => 'Beberapa siswa melaporkan gagal login ke LMS meskipun password sudah benar.', 'priority' => 'high', 'status' => 'solved', 'reported_at' => '2026-03-21 10:40:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0004', 'email' => 'budi@example.com', 'unit' => 'Keuangan', 'category' => 'komputer', 'title' => 'Komputer kasir terasa sangat lambat', 'description' => 'Komputer kasir butuh waktu lama untuk membuka aplikasi pembayaran dan browser.', 'priority' => 'high', 'status' => 'open', 'reported_at' => '2026-03-22 07:55:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0005', 'email' => 'siti@example.com', 'unit' => 'SMP', 'category' => 'proyektor', 'title' => 'Proyektor kelas 8A berkedip', 'description' => 'Tampilan proyektor berkedip saat kabel HDMI digerakkan sedikit.', 'priority' => 'medium', 'status' => 'open', 'reported_at' => '2026-03-22 11:05:00', 'attachment' => 'tickets/sample-projector.png'],
            ['ticket_number' => 'TIK-2026-0006', 'email' => 'andre@example.com', 'unit' => 'SMA', 'category' => 'internet', 'title' => 'WiFi guru lantai 3 lambat', 'description' => 'Akses WiFi guru di lantai 3 sangat lambat terutama sekitar pukul 10 sampai 12 siang.', 'priority' => 'medium', 'status' => 'in_progress', 'reported_at' => '2026-03-22 12:20:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0007', 'email' => 'budi@example.com', 'unit' => 'SD', 'category' => 'akun', 'title' => 'Akun email sekolah terkunci', 'description' => 'Akun email sekolah terkunci setelah terlalu banyak percobaan login gagal.', 'priority' => 'low', 'status' => 'solved', 'reported_at' => '2026-03-23 08:45:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0008', 'email' => 'siti@example.com', 'unit' => 'Yayasan', 'category' => 'printer', 'title' => 'Hasil cetak bergaris', 'description' => 'Printer warna menghasilkan garis horizontal pada setiap halaman dokumen.', 'priority' => 'medium', 'status' => 'open', 'reported_at' => '2026-03-23 09:30:00', 'attachment' => 'tickets/sample-print-lines.jpg'],
            ['ticket_number' => 'TIK-2026-0009', 'email' => 'andre@example.com', 'unit' => 'Lab IPA', 'category' => 'komputer', 'title' => 'Monitor tidak menampilkan gambar', 'description' => 'CPU menyala tetapi monitor tetap hitam meskipun kabel daya sudah terpasang.', 'priority' => 'high', 'status' => 'open', 'reported_at' => '2026-03-23 13:05:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0010', 'email' => 'budi@example.com', 'unit' => 'TU', 'category' => 'jaringan', 'title' => 'Folder sharing tidak bisa diakses', 'description' => 'Folder sharing untuk dokumen bersama tidak bisa dibuka dari beberapa komputer TU.', 'priority' => 'high', 'status' => 'in_progress', 'reported_at' => '2026-03-24 07:20:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0011', 'email' => 'siti@example.com', 'unit' => 'SMP', 'category' => 'internet', 'title' => 'Website pembelajaran tidak bisa dibuka', 'description' => 'Beberapa website pembelajaran tidak dapat dibuka meskipun koneksi umum terlihat normal.', 'priority' => 'medium', 'status' => 'solved', 'reported_at' => '2026-03-24 10:10:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0012', 'email' => 'andre@example.com', 'unit' => 'SMA', 'category' => 'printer', 'title' => 'Printer ujian macet kertas', 'description' => 'Printer yang dipakai untuk ujian sering paper jam ketika mencetak dokumen banyak halaman.', 'priority' => 'high', 'status' => 'open', 'reported_at' => '2026-03-24 14:40:00', 'attachment' => 'tickets/sample-paperjam.jpg'],
            ['ticket_number' => 'TIK-2026-0013', 'email' => 'budi@example.com', 'unit' => 'Keuangan', 'category' => 'akun', 'title' => 'Lupa password aplikasi keuangan', 'description' => 'Staf baru belum bisa masuk ke aplikasi keuangan karena lupa password awal.', 'priority' => 'low', 'status' => 'solved', 'reported_at' => '2026-03-25 08:00:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0014', 'email' => 'siti@example.com', 'unit' => 'Perpustakaan', 'category' => 'komputer', 'title' => 'Scanner tidak terdeteksi', 'description' => 'Scanner perpustakaan tidak muncul di daftar perangkat meski kabel USB sudah dipasang.', 'priority' => 'medium', 'status' => 'in_progress', 'reported_at' => '2026-03-25 11:25:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0015', 'email' => 'andre@example.com', 'unit' => 'Lab Komputer', 'category' => 'jaringan', 'title' => 'Switch ruang lab panas berlebih', 'description' => 'Switch jaringan di ruang laboratorium terasa panas dan beberapa port tidak stabil.', 'priority' => 'high', 'status' => 'open', 'reported_at' => '2026-03-25 15:10:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0016', 'email' => 'budi@example.com', 'unit' => 'SMA', 'category' => 'proyektor', 'title' => 'Remote proyektor tidak berfungsi', 'description' => 'Remote proyektor tidak bisa mengubah slide dan tombol daya juga tidak merespons.', 'priority' => 'low', 'status' => 'open', 'reported_at' => '2026-03-26 08:35:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0017', 'email' => 'siti@example.com', 'unit' => 'SD', 'category' => 'akun', 'title' => 'Akun guru baru belum aktif', 'description' => 'Guru baru belum bisa memakai akun resmi sekolah karena status akun belum aktif.', 'priority' => 'medium', 'status' => 'open', 'reported_at' => '2026-03-26 09:50:00', 'attachment' => null],
            ['ticket_number' => 'TIK-2026-0018', 'email' => 'andre@example.com', 'unit' => 'Yayasan', 'category' => 'internet', 'title' => 'Zoom meeting putus-putus', 'description' => 'Rapat daring sering putus-putus dan suara patah-patah saat memakai jaringan kantor pusat.', 'priority' => 'high', 'status' => 'in_progress', 'reported_at' => '2026-03-26 13:15:00', 'attachment' => null],
        ];

        foreach ($tickets as $item) {
            $user = User::where('email', $item['email'])->first();

            if (! $user) {
                continue;
            }

            Ticket::updateOrCreate(
                ['ticket_number' => $item['ticket_number']],
                [
                    'user_id' => $user->id,
                    'unit' => $item['unit'],
                    'category' => $item['category'],
                    'title' => $item['title'],
                    'description' => $item['description'],
                    'priority' => $item['priority'],
                    'status' => $item['status'],
                    'reported_at' => Carbon::parse($item['reported_at']),
                    'attachment' => $item['attachment'],
                ]
            );
        }
    }
}
