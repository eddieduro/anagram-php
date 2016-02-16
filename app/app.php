<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Anagram.Php';

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider, array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function () use ($app) {
        return $app['twig']->render('home.html.twig');
    });

    $app->get('/results', function () use ($app) {
        $new_anagram = new Anagram;
        $inputted_string = $_GET['user_input'];
        $results = $new_anagram->AnagramCheck($inputted_string);

        return $app['twig']->render('result.html.twig', array('anagrams' => $results));
    });
    return $app;
?>
