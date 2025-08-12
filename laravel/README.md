# Backend Dev Test - Diskominfo

Dalam rangka menyediakan akses informasi yang cepat, akurat, dan transparan kepada
Masyarakat, Dinas Kominfo Pringsewu memerlukan layanan backend API untuk mengelola
berita resmi dan pengumuman publik.
Anda diminta untuk membangun sebuah RESTful Web Service yang menyediakan fitur CRUD
untuk:

-   Berita (News)
-   Pengumuman (Announcements)

---

## 📌 Teknologi yang Digunakan

-   **PHP** (versi 8.x)
-   **Laravel** (versi 12.2.2)
-   **MySQL** (Database)
-   **Composer** (Dependency Manager)
-   **XAMPP** (Local Development)

---

## 📂 Struktur Proyek

Struktur utama dalam proyek ini:

```
Backend-Dev-Test-Diskominfo/
│
├── app/
│   ├── Http/
│   │   ├── Controllers/     # Controller untuk CRUD
│   │   └── Requests/        # Request validation
│   ├── Models/              # Model Eloquent
│
├── database/
│   ├── migrations/          # Migrasi database
│   └── seeders/             # Data awal (opsional)
│
├── routes/
│   └── api.php               # Route API
│
├── .env                      # Konfigurasi environment
└── README.md                 # Dokumentasi proyek
```

---

## ⚙️ Cara Instalasi

1. **Clone Repository**

    ```bash
    git clone https://github.com/username/Backend-Diskominfo-PSW.git
    cd Backend-Dev-Test-Diskominfo
    ```

2. **Install Dependency**

    ```bash
    composer install
    ```

3. **Konfigurasi Environment**
   Salin file `.env.example` menjadi `.env` dan sesuaikan pengaturan database:

    ```bash
    cp .env.example .env
    ```

4. **Migrasi Database**

    ```bash
    php artisan migrate
    ```

5. **Jalankan Server**
    ```bash
    php artisan serve
    ```

---

## 📌 Endpoint API

### 1. **GET** `/News`

### 1. **GET** `/Pengumuman`

Menampilkan semua data Berita.

**Contoh Response**

```json
[
    {
        "id": 1,
        "title": "Contoh Data",
        "content": "Contoh Data",
        "category": "Contoh Data",
        "created_at": "2025-08-11T10:00:00.000000Z",
        "updated_at": "2025-08-11T10:00:00.000000Z"
    }
]
```

---

### 2. **POST** `/News/Store`

### 2. **POST** `/Pengumuman/Store`

Menambahkan data baru.

**Body (JSON)**

```json
{
    "id": 1,
    "title": "Contoh Data",
    "content": "Contoh Data",
    "category": "Contoh Data",
    "created_at": "2025-08-11T10:00:00.000000Z",
    "updated_at": "2025-08-11T10:00:00.000000Z"
}
```

---

### 3. **GET** `/News/{id}`

### 3. **GET** `/Pengumuman/{id}`

Menampilkan detail data berdasarkan ID.

---

### 4. **PUT** `/News/{id}`

### 4. **PUT** `/Pengumuman/{id}`

Mengupdate data.

**Body (JSON)**

```json
{
    "title": "Contoh Data",
    "content": "Contoh Data",
    "category": "Contoh Data",
    "updated_at": "2025-08-11T10:00:00.000000Z"
}
```

---

### 5. **DELETE** `/News/{id}`

### 5. **DELETE** `/Pengumuman/{id}`

Menghapus data berdasarkan ID.

---

## 🚫 Catatan

-   **Tidak membuat frontend** → Semua interaksi dilakukan melalui API endpoint (contoh: Postman atau cURL).
-   **Tidak membuat testing otomatis** → Tidak menggunakan unit testing, feature testing, atau integration testing. Semua pengujian dilakukan secara manual menggunakan tool seperti Postman.

---

## 📜 Lisensi

Proyek ini dibuat untuk kebutuhan **Backend Developer Test - Diskominfo** dan tidak untuk penggunaan komersial.
