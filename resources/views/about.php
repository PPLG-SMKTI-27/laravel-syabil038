<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Kontak</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
/* === CSS DESAIN KONTAK === */

* {
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    margin: 0;
    background: #f9fbff;
    color: #111;
}

header {
    padding: 20px 50px;
}

header a {
    text-decoration: none;
    font-weight: bold;
    color: #2563eb;
}

.contact-section {
    max-width: 1200px;
    margin: auto;
    padding: 50px 20px;
}

.contact-title {
    text-align: center;
    margin-bottom: 50px;
}

.contact-title h1 {
    font-size: 36px;
}

.contact-title span {
    display: block;
    width: 60px;
    height: 4px;
    background: #2563eb;
    margin: 10px auto;
    border-radius: 2px;
}

.contact-title p {
    color: #555;
}

.contact-box {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
}

/* kiri */
.contact-info div {
    display: flex;
    align-items: center;
    gap: 18px;
    margin-bottom: 28px;
}

.contact-info h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.contact-info p {
    margin: 3px 0 0;
    color: #555;
    font-size: 14px;
}


.contact-info i {
    font-size: 20px;
    color: #2563eb;
    min-width: 28px;
    text-align: center;
}


.contact-info h4 {
    margin: 0;
}

.contact-info div:hover {
    transform: translateX(5px);
    transition: 0.3s;
}


/* kanan */
.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 14px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #ddd;
    font-size: 15px;
}

.contact-form textarea {
    height: 120px;
    resize: none;
}

.contact-form button {
    padding: 12px 30px;
    background: #2563eb;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    cursor: pointer;
    box-shadow: 0 5px 15px rgba(37,99,235,0.3);
}

/* responsive */
@media(max-width: 800px){
    .contact-box{
        grid-template-columns: 1fr;
    }
}
</style>
</head>

<body>

<header>
<a href="index.html">Portofolio.</a>
</header>

<section class="contact-section">

<div class="contact-title">
<h1>Kontak</h1>
<span></span>
<p>Hubungi saya untuk mendiskusikan proyek Anda atau sekadar berkenalan.</p>
</div>

<div class="contact-box">

<!-- kiri -->
<div class="contact-info">

<div>
<i class="fas fa-location-dot"></i>
<div>
<h4>Lokasi</h4>
<p>Samarinda, Indonesia</p>
</div>
</div>

<div>
<i class="fas fa-envelope"></i>
<div>
<h4>Email</h4>
<p>sabillataawan123@gmail.com</p>
</div>
</div>

<div>
<i class="fas fa-phone"></i>
<div>
<h4>Telepon</h4>
<p>+62 812 3456 7890</p>
</div>
</div>



</div>

<!-- kanan -->
<div class="contact-form">
<input type="text" placeholder="Nama Lengkap">
<input type="email" placeholder="Email">
<input type="text" placeholder="Subjek">
<textarea placeholder="Pesan Anda"></textarea>
<button>Kirim Pesan</button>
</div>

</div>

</section>

</body>
</html>
