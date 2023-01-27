<?php 

class Movie {
    public $title;
    public $genres;
    public $date;
    public $length;

    public function __construct(string $_title, array $_genres, int $_date, string $_length)
    {
        $this -> title = $_title;
        $this -> genres = $_genres;
        $this -> date = $_date;
        $this -> length = $_length;
    }
}
$movies = [
    new Movie ('Sherlock Holmes - Gioco di ombre', ['Mystery', 'Avventura'], 2011, '129 min'),
    new Movie ('Il cavaliere oscuro', ['Azione', 'Avventura'], 2008, '152 min'),
    new Movie ('Shutter Island', ['Thriller', 'Mystery'], 2010, '138 min'),
    new Movie ('The Chronicles of Riddick', ['Azione', 'Fantascienza'], 2004, '119 min'),
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies</h1>
    <ul>
        <?php foreach( $movies as $movie ) { ?>
            <li>
                <h2><?php echo $movie->title; ?></h2>
                <ul>
                    <?php foreach( $movie->genres as $genre ) { ?>
                        <li><?php echo $genre; ?></li>
                    <?php } ?>     
                </ul>
                <h3><?php echo $movie->date; ?></h3>
                <h4><?php echo $movie->length; ?></h4>
            </li>
        <?php } ?>    
    </ul>
</body>
</html>