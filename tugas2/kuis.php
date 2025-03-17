<!-- kuis.php -->
<!DOCTYPE html>
    <html lang="id">
    <head>
    <meta charset="UTF-8">
        <title>Kuis</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    .nav-link {
        color: gray;
    }

    .nav-link:hover {
        color: gray;
    }

    .nav-link.active {
        color: black;
    }
    header {
            background-color: #3b3e3e;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    script {
            background-color: #3b3e3e;
            box-shadow: 0 7px 10px rgba(0, 0, 0, 1);
    }
    </style>
    </head>
    <body style="background-color: lightblue;">
    <header class="px-4 d-flex flex-wrap py-3 mb-4 border-bottom align-items-center"
        style="background-color: darkcyan;">
        <img src="logo.png" width="50" class="mx-2">
        <span class="fs-2 mx-1">Learnify: </span>
        <span class="fs-4 mx-2">Belajar Cerdas, Kuasai Dunia</span>
</header>
<main class="container rounded-4 mb-4" style="background-color:lightcyan; padding: 40px 50px;">
<?php session_start(); ?>
    <?php 
    $kuis = [
        "1. Apa kepanjangan dari HTML?" => ["Hyper Text Markup Language", "Hyperlinks and Text Markup Language", "Home Tool Markup Language", "Hyper Tool Multi Language<br>"],
        "2. Bagaimana cara mengatur latar belakang halaman menjadi warna merah dalam CSS?" => ["background: red;", "bgcolor: red;", "color-background: red;", "background-color: red;<br>"],
        "3. Tag HTML apa yang digunakan untuk membuat baris baru?" => ["newline", "hr", "line", "br<br>"],
        "4. Apa fungsi utama dari PHP?" => ["Mengatur tata letak halaman web", "Mengatur tampilan halaman web", "Memproses data di sisi server", "Menambahkan animasi ke halaman web<br>"],
        "5. Bagaimana cara menampilkan gambar di HTML?" => ["img src='gambar.jpg'", "image src='gambar.jpg'", "pic src='gambar.jpg'", "photo src='gambar.jpg'<br>"]
    ];
    ?>

        <form action="hasil.php" method="POST">
            <?php foreach ($kuis as $kuis => $options): ?>
                <p><?php echo $kuis; ?></p>
                <?php foreach ($options as $option): ?>
                    <input type="radio" name="jawaban[<?php echo $kuis; ?>]" value="<?php echo $option; ?>"> <?php echo $option; ?><br>
                <?php endforeach; ?>
            <?php endforeach; ?>
            <button type="submit" class="btn btn-primary mt-3">Kirim Jawaban</button>
        </form>
    </body>
    </html>