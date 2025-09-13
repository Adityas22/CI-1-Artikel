<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .about-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        max-width: 600px;
        padding: 30px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .about-card img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 20px;
        border: 4px solid #74ebd5;
    }

    .about-card h1 {
        margin: 10px 0;
        color: #2c3e50;
    }

    .about-card p {
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .btn {
        background: #74ebd5;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 25px;
        cursor: pointer;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background: #4cb6ac;
        transform: scale(1.05);
    }

    /* animasi teks */
    .hidden {
        display: none;
        margin-top: 15px;
        font-style: italic;
        color: #555;
    }
    </style>
</head>

<body>

    <div class="about-card">
        <!-- <img src="https://via.placeholder.com/120" alt="Foto Profil"> -->
        <h1>Aditya Septiawan</h1>
        <p>Halo! Saya seorang mahasiswa informatika yang memiliki minat di bidang <b>web development</b> dan <b>machine
                learning</b>.
            Saya suka belajar hal baru dan mengimplementasikannya ke dalam proyek nyata.</p>

        <button class="btn" onclick="toggleMore()">Baca Selengkapnya</button>

        <p id="more" class="hidden">
            Saya selalu belajar bahasa pemrograman seperti HTML, CSS, JavaScript, PHP (CodeIgniter, Laravel), serta
            Python untuk
            machine
            learning.
            Ke depan, saya ingin terus berkembang sebagai developer maupun data scientist.
        </p>

        <a href="<?php echo site_url('blog/');?>" class="btn px-4">Kembali ke Home</a> <!-- Kuning -->
    </div>

    <script>
    function toggleMore() {
        const moreText = document.getElementById("more");
        if (moreText.classList.contains("hidden")) {
            moreText.classList.remove("hidden");
        } else {
            moreText.classList.add("hidden");
        }
    }
    </script>

</body>

</html>