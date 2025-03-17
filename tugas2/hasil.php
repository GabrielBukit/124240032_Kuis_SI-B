<?php session_start(); ?>
<?php 
$answers = [
    "1. Apa kepanjangan dari HTML?" => "Hyper Text Markup Language",
    "2. Bagaimana cara mengatur latar belakang halaman menjadi warna merah dalam CSS?" => "background-color: red;<br>",
    "3. Tag HTML apa yang digunakan untuk membuat baris baru?" => "br<br>",
    "4. Apa fungsi utama dari PHP?" => "Memproses data di sisi server",
    "5. Bagaimana cara menampilkan gambar di HTML?" => "img src='gambar.jpg'"
];

$score = 0;
$total_questions = count($answers);
$question_number = 1;
?>
<!DOCTYPE html>
<html lang="id">
<head>
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
        <h2 class="text-center">Hasil Kuis</h2>
        <br>
        <?php 
        foreach ($_POST['jawaban'] as $question => $userAnswer) {
            if ($userAnswer == $answers[$question]) {
                echo "<p class='correct'>Pertanyaan $question_number: Jawaban Anda benar!</p>";
                $score += 1;
            } else {
                echo "<p class='incorrect'>Pertanyaan $question_number: Jawaban Anda salah.</p>";
            }
            $question_number++;
        }
        ?>
        <br>
        <h3>Skor Pengguna: <?= $score ?> / <?= $total_questions ?></h3>
        <h3>Presentase Nilai: <?= ($score / $total_questions) * 100 ?>%</h3>
        <div class="text-end">
            <a href="index.php" class="btn btn-info">Kembali ke Halaman Utama</a>
        </div>
    </main>
</body>
</html>
