<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ESI Demonstration</title>
  <!--esi
  <style>
  <esi:include src="bootstrap.min.css"></esi:include>
  </style>
  -->
  <esi:remove>
    <link rel="stylesheet" href="bootstrap.min.css">
  </esi:remove>
</head>
<body>

  <h1></h1>

  <div class="container theme-showcase" role="main">

      <div class="jumbotron">
        <h1>Edge Side Includes</h1>
        <p>Edge Side Includes or ESI is a small markup language for edge level dynamic web content assembly.</p>
        <a href="https://en.wikipedia.org/wiki/Edge_Side_Includes" class="btn btn-info">Learn More</a>
      </div>

      <div class="page-header">
        <h2>Cat fact:</h2>
      </div>
        <!--esi
          <p class="alert alert-success"><strong>Score!</strong> I'm behind an edge device that supports ESI.</p>
          <p class="alert alert-info">
            <strong>Did you know?</strong> <esi:include src="catfacts.php"></esi:include>
          </p>
        -->
        <esi:remove>
          <p class="alert alert-danger"><strong>Oops...</strong> I'm not behind an edge device that supports ESI.</p>
          <p class="alert alert-info">
            <strong>Did you know?</strong> <?php include "catfacts.php"; ?>
          </p>
        </esi:remove>
  </div>

  <a href="https://github.com/bighappyface/esi-demo"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/a6677b08c955af8400f44c6298f40e7d19cc5b2d/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png"></a>
</body>
</html>
