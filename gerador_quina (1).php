<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de Números da Quina</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 20px;
      background: transparent;
    }
    .container {
      padding: 20px;
      display: inline-block;
    }
    .numeros {
      display: flex;
      justify-content: center;
      gap: 10px;
      margin-top: 20px;
    }
    .numero {
      width: 50px;
      height: 50px;
      line-height: 50px;
      font-size: 24px;
      font-weight: bold;
      color: white;
      background: #6a0dad;
      border-radius: 50%;
      display: inline-block;
      text-align: center;
    }
    button {
      margin-top: 20px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
      border: none;
      background: #6a0dad;
      color: white;
      border-radius: 5px;
    }
    button:hover {
      background: #5a0cae;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 style="font-weight: bold;">Gerador de Números da Quina</h1>
    <div class="numeros">
      <?php
        function gerarNumeros() {
          $numeros = range(1, 80);
          shuffle($numeros);
          return array_slice($numeros, 0, 5);
        }

        $gerar = isset($_GET['gerar']) ? $_GET['gerar'] : false;

        if ($gerar) {
          $numerosSorteados = gerarNumeros();
        }

        for ($i = 0; $i < 5; $i++) {
          echo "<span class='numero'>" . ($gerar ? $numerosSorteados[$i] : '--') . "</span>";
        }
      ?>
    </div>
    <br>
    <button onclick="location.href='?gerar=1'">Gerar Números</button>
  </div>
</body>
</html>
