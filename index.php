<?php
include_once __DIR__.'/Classes/Movie.php';
$movie = [
    [
        'title' => 'Il grande Gatsby',
        'genre' =>'drammatico, sentimentale', 
        'lenght' =>'142 min',
        'protagonists' =>'Leonardo di Caprio, Tobey Maguire, Carey Mulligan',
    ],
    [
        'title' =>'Pulp Fiction',
        'genre' =>'giallo, drammatico',
        'lenght' =>'154 min',
        'protagonists' =>'Samuel L. Jackson, Quentin Tarantino, John Travolta',
    ],
    [
        'title' =>'Red Notice',
        'genre' =>'azione, commedia',
        'lenght' =>'118 min',
        'protagonists' =>'Dwayne Johnson, Gal Gadot, Rayan Reynolds'
    ],
    [
        'title' =>'Signori si nasce',
        'genre' =>'commedia',
        'lenght' =>'95 min',
        'protagonists' =>'Totò, Peppino de Filippo, Delia Scala',
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Movie</title>
</head>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

h3 {
  padding-top: 30px;
  text-transform: uppercase;
  padding-top:15px;
}
</style>
<body>
    <h1>Film list</h1>
    <?php
    foreach($movie as $key => $value){
        $movie = new Movie($value['title'],$value['genre'],$value['lenght']);
        $movie -> setProtagonists($value['protagonists']);
    ?>
    <p><?php echo $movie->getMovie(); ?></p>
    <?php 
    }
    ?>
</body>
</html>