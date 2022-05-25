<?php
class Movie{
    public $title;
    public $genre;
    public $img;
    public $language = 'en-US';
    public $release_date;

    public function set_release_date($release_date){
        if ($release_date == 'today') {
            $this->release_date = date("d/m/Y");
        } else {
            $this->release_date = $release_date;
        }
    }

    function __construct($_title, $_genre, $_img)
    {

        $this->title = $_title;
        $this->genre = $_genre;
        $this->img = $_img;
    }
};


$film_1 = new Movie('Deadpool 2 ', 'Azione, Commedia, Avventura', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ltoieqmMIb1v90HWkXZguAYnkbR.jpg',);
$film_2 = new Movie('Matrix Resurrections ', 'Fantascienza, Azione, Avventura', 'https://www.themoviedb.org/t/p/w300_and_h450_bestv2/tiXqnZSlLpgsY38N3k4eaHiPbWu.jpg',);



$film_1->set_release_date('today');
$film_2->set_release_date('01/01/2022');


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header class="bg-black text-white text-center p-4">
        <h1>Suggested movies</h1>
    </header>

    <main class="bg-secondary text-white p-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">

                <div class="col">
                    <div class="card my-4 p-4">
                        <img src=" <?php echo ($film_1->img) ?>" alt="">
                        <div class="card-body text-dark">
                            <ul>
                                <h4> <?php echo ($film_1->title)  ?></h4>
                                <p> Genere: <?php echo ($film_1->genre)  ?></p>
                                <p> Data di rilascio: <?php echo ($film_1->release_date)  ?></p>
                                <p> Lingua: <?php echo ($film_1->language)  ?></p>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card my-4 p-4">
                        <img src=" <?php echo ($film_2->img) ?>" alt="">
                        <div class="card-body text-dark">
                            <ul>
                                <h4> <?php echo ($film_2->title)  ?></h4>
                                <p> Genere: <?php echo ($film_2->genre)  ?></p>
                                <p> Data di rilascio: <?php echo ($film_2->release_date)  ?></p>
                                <p> Lingua: <?php echo ($film_2->language)  ?></p>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>




    </main>

    <footer class="bg-black text-white  text-center">
     <span >&copy; Gabriele Pini</span>
    </footer>
</body>

</html>