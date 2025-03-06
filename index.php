<?php

// Para que haga el checkeo del tipo en lugar de convertir automaticamente si lo damos mal
declare (strict_types = 1);

// Traemos el contenido del fichero functions.php
require_once 'consts.php';
require_once 'functions.php';
require_once 'classes/NextMovie.php';


$next_movie = NextMovie::fetch_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();

// snake_case 🐍
// camelCase  🐫
// kebab-case 🌮
?>

<!doctype html>
<html lang="en">
<body class="bg-dark text-white">

<?php render_template('header', $next_movie_data); ?>
<?php render_template('head', ["title" => $next_movie_data["title"]]); ?>
<?php render_template('main', array_merge(
  $next_movie_data,
  ["until_message" => $next_movie->get_until_message()]
)); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
