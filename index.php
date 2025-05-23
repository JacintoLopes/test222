<?php
require __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Lazarus Group - IMMOSION SA</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <div class="text-center mb-4 w-100">
    <h2 class="orbitron">
      Копирование файлов <span id="loadValue">0</span>%
    </h2>
    <div class="progress">
      <div
        id="loadBar"
        class="progress-bar progress-bar-striped progress-bar-animated"
        role="progressbar"
        style="width: 0%;"
        aria-valuenow="0"
        aria-valuemin="0"
        aria-valuemax="100">
      </div>
    </div>
  </div>

  <div class="card shadow">
    <h1>IMMOSION SA</h1>
    <p><strong>Имя машины :</strong> <?= htmlspecialchars($hostname) ?></p>
    <p><strong>Имя пользователя :</strong> <?= htmlspecialchars($system_user) ?></p>
    <p><strong>Ваш IP-адрес :</strong> <?= htmlspecialchars($client_ip) ?></p>
    <p><strong>Адрес :</strong> <?= htmlspecialchars($user_address) ?></p>
  </div>
<p></p><
  <p class="contact-message">
    Привет, <?= htmlspecialchars($system_user) ?>,
    Я хакер. Как видите, я скопировал все данные с этого компьютера. Это позор ! Вероятно, есть некоторые важные вещи, которыми не стоит делиться со всеми.

    Но я думаю, мы можем прийти к соглашению: позвоните мне по телефону +79161434297, прежде чем я продам по самой высокой цене.
  </p>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.4.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>
