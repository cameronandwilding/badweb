<?php
/**
 * @file
 */

$list = glob(__DIR__ . '/examples/*.html');
$links = '<ul><li>' . implode('</li><li>', array_map(function ($path) {
  $fileName = basename($path, '.html');

  return '<a href="?page=' . $fileName . '">' . ucfirst($fileName) . '</a>';
}, $list)) . '</li></ul>';

$page = @$_GET['page'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Bad web</title>

  <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <style>
    body {
      background-color: #333;
    }

    #header {
      color: white;
    }

    #header a {
      color: white;
    }

    #header li {
      list-style: square;
    }

    #page {
      background-color: white;
      padding-top: 128px;
      padding-bottom: 128px;
    }
  </style>
</head>
<body>

<div id="header">
  <div class="container">
    <h1>What not <img src="examples/assets/X.png" style="width:30px;"> to do on the web</h1>
    <hr/>
    <?php echo $links; ?>
  </div>
</div>

<div id="page">
  <div class="container">
    <?php if ($page): ?>
      <?php include __DIR__ . '/examples/' . $page . '.html'; ?>
    <?php else: ?>
      <p>Select a sample.</p>
    <?php endif; ?>
  </div>
</div>

</body>
</html>
