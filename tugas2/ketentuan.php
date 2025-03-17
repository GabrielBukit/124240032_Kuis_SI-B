<!-- ketentuan.php -->
<?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <title>Ketentuan Kuis</title>
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
    <main class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 500px;">
            <div class="card-header">
                Ketentuan Kuis
            </div>
            <div class="card-body">
          <h5 class="card-title">Ketentuan Untuk Mengerjakan Kuis:</h5>
          <ol>
            <li>Kuis terdiri dari 5 pertanyaan.</li>
            <li>Setiap pertanyaan memiliki 4 pilihan jawaban.</li>
            <li>Pilihlah satu jawaban yang menurut Pengguna benar.</li>
            <li>Setiap jawaban benar akan mendapatkan 20 poin.</li>
            <li>Jawaban yang salah tidak akan mendapatkan poin.</li>
            <li>
              Pengguna dapat melihat skor akhir setelah menyelesaikan kuis.
            </li>
          </ol>
                <a href="kuis.php" class="btn btn-primary">Mulai Mengerjakan Kuis</a>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>