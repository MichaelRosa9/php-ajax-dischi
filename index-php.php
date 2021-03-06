<?php 
  include __DIR__ . '/data/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="styles/style.css">
  <title>Dischi</title>
</head>
<body>
  <header>
    <img class="logo" src="" alt="">

  </header>

  <main>
    <div class="container flex-center-between wrap">
      <?php foreach ($database as $record) { ?>
        <div class="padding-20 basis-5">
          <div class="card text-center padding-20">
            <img class="cover" src="<?php echo $record['poster'] ?>" alt="">
            <h3 class="title"> <?php echo $record['title'] ?> </h3>
            <h4 class="year"> <?php echo $record['year'] ?> </h4>
          </div>

        </div>
      <?php } ?>

    </div>
  </main>
</body>
</html>