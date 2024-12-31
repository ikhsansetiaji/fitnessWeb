SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS fitness_db;
USE fitness_db;

-- -------------------------------------------------------
-- Tabel: login
CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    nama_pengguna VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data untuk tabel `login`
INSERT INTO login (username, password) VALUES
('admin', '$2y$10$U9D6Ki14C1SphDQD7G7M.ev.RZKaPF9v1PihgBbOc7.7f87t88qMK');

-- -------------------------------------------------------
-- Tabel: users
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) DEFAULT NULL,
    oauth_provider ENUM('google', 'facebook', 'apple', 'local') DEFAULT 'local',
    oauth_id VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -------------------------------------------------------
-- Tabel: menu_paket
CREATE TABLE menu_paket (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    harga DECIMAL(10,2) NOT NULL,
    durasi INT NOT NULL COMMENT 'Durasi dalam hari',
    dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data untuk tabel `menu_paket`
INSERT INTO menu_paket (nama, deskripsi, harga, durasi) VALUES
('Paket A', 'Paket fitness untuk pemula', 500000, 30),
('Paket B', 'Paket fitness lanjutan', 750000, 60);

-- -------------------------------------------------------
-- Tabel: staff
CREATE TABLE staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -------------------------------------------------------
-- Tabel: staff_attendance
CREATE TABLE staff_attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    staff_id INT NOT NULL,
    date DATE NOT NULL,
    status ENUM('Hadir', 'Tidak Hadir', 'Izin', 'Sakit') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (staff_id) REFERENCES staff(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -------------------------------------------------------
-- Tabel: member
CREATE TABLE member (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    nomor_telepon VARCHAR(20),
    menu_paket_id INT NOT NULL,
    tanggal_pendaftaran TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    tanggal_berakhir DATETIME NULL,
    status ENUM('Aktif', 'Nonaktif') DEFAULT 'Aktif',
    FOREIGN KEY (menu_paket_id) REFERENCES menu_paket(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -------------------------------------------------------
-- Tabel: contact_messages
CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
-- Alter Statements
ALTER TABLE users ADD CONSTRAINT unique_email UNIQUE (email);

ALTER TABLE login
  MODIFY id INT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE member
  MODIFY id INT NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

COMMIT;
