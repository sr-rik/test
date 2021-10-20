<?php
require_once('data.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TEST</title>
  </head>
  <body>

    <div class="top">
      <div class="center">
        <h1 class="title">なぞなぞの穴場
        <br>〜あなたの頭も柔らかくなる〜</h1>
        <p class="subheading">ここでは様々ななぞなぞを取り扱ったいきます。</p>
        <p class="subheading">時々、たま〜に、更新していくのでゆったり挑戦してみてください。</p>
        <p class="subheading">凝り固まった頭を柔らかくしていきましょう！</p>
      </div>
    </div>

    <div class="borderline"></div>

    <div class="mainback">
      <div class="toi-center">
        <div class="q">
          <h2>第<?php echo $question1->getId() ?>問</h2>
            <?php echo $question1->getBody() ?>
          </div>
      </div>
    </div>
  </body>
</html>
