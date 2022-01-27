<?php 
class Movie {
    public $title;
    public $rating;

    function __construct($_title, $_rating) {
        $this->title = $_title;
        $this->rating = $_rating;
    }

    public function getRating() {
        return $this->rating;
    }

    public function generateRndRating() {
        $randomRating = rand(0, 5);
        $this->rating = $randomRating;
    }
}

$Spider_Man_NWH = new Movie('Spider-Man No Way Home', 5);
$Avengers_Endgame = new Movie('Avengers Endgame', 5);

// $Avengers_Endgame->generateRndRating();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        Titolo: <?php echo $Spider_Man_NWH->title ?> - Rating: <?php echo $Spider_Man_NWH->rating ?>
    </div>

    <div>
        Titolo: <?php echo $Avengers_Endgame->title ?> - Rating: <?php echo $Avengers_Endgame->rating ?>
    </div>
</body>
</html>