<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Kalkulator</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">3D Kalkulator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
      </nav>

      <br>
      <br>
      <br>

      <div class="container">
          <div class="row-text-center">
              <div class="col">
                  <script src="kalkulator.js"></script>
                  <h4></h4>
                  <p>Menghitung volume dan luas permukaan dari silinder, kerucut dan bola.</p>
              </div>
          </div>
        </div>

        <br>
        <br>
        <div class="container">
            <div class="row-text-center">
                <div class="col">
                    <h1>Silinder</h1>
                    <label for="">Masukkan jari-jari silinder (dalam meter)</label>
                    <input type="text" id="jariSilinder">
                    <br>
                    <label for="">Masukkan tinggi silinder (dalam meter)</label>
                    <input type="text" id="tinggiSilinder">
                    <br>
                    <button type="button" class="btn btn-primary" onclick="luasSilinder(), volumeSilinder()">Hitung!</button>
                    <br>
                    <h1>Hasil perhitungan</h1>
                    <p>Luas permukaan: <span id="hasil_luas"></span> <sup>2</sup></p>
                    <p>Volume: <span id="hasil_volume"></span> m<sup>3</sup></p>
                </div>
            </div>
        </div>

        <br>
        <br>
        <div class="container">
            <div class="row-text-center">
                <div class="col">
                    <h1>Kerucut</h1>
                    <label for="">Masukkan jari-jari silinder (dalam meter)</label>
                    <input type="text" id="jariKerucut">
                    <br>
                    <label for="">Masukkan tinggi silinder (dalam meter)</label>
                    <input type="text" id="pelukisKerucut">
                    <br>
                    <label for="">Masukkan tinggi silinder (dalam meter)</label>
                    <input type="text" id="tinggiKerucut">
                    <br>
                    <button type="button" class="btn btn-primary" onclick="luasKerucut(), volumeKerucut()">Hitung!</button>
                    <br>
                    <h1>Hasil perhitungan</h1>
                    <p>Luas permukaan: <span id="hasil_luas_kerucut"></span> <sup>2</sup></p>
                    <p>Volume: <span id="hasil_volume_kerucut"></span> m<sup>3</sup></p>
                </div>
            </div>
        </div>


        <br>
        <br>
        <div class="container">
            <div class="row-text-center">
                <div class="col">
                    <h1>Bola</h1>
                    <label for="">Masukkan jari-jari bola (dalam meter)</label>
                    <input type="text" id="jariBola">
                    <br>
                    <button type="button" class="btn btn-primary" onclick="luasBola(), volumeBola()">Hitung!</button>
                    <br>
                    <h1>Hasil perhitungan</h1>
                    <p>Luas permukaan: <span id="hasil_luas_bola"></span> <sup>2</sup></p>
                    <p>Volume: <span id="hasil_volume_bola"></span> m<sup>3</sup></p>
                </div>
            </div>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
