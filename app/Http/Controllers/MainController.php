<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class MainController extends Controller
{
    public function genero($genero)
    {
        //GÉNEROS VÁLIDOS
        $generos = [
            ['id' => 18, 'label' => 'drama'],
            ['id' => 28, 'label' => 'accion'],
            ['id' => 35, 'label' => 'comedia'],
            ['id' => 27, 'label' => 'terror'],
        ];

        //PARAMETRO
        $search = strtolower($genero);

        //VERIFICA SE ES VÁLIDO
        $results = array_keys(
            array_filter(
                $generos,
                function ($value) use ($search) {
                    return (strpos($value['label'], $search) !== false);
                }
            )
        );

        if (count($results)) {

            //API KEY
            $apikey = '&api_key=4ee0f4aa1ea01171c1b80b345f972a67';

            //URI Base
            $uri = 'http://api.themoviedb.org/3/discover/movie';

            //PARAMETROS API
            $parametros = "?year=2019&with_genres=" . $generos[$results[0]]['id'];

            //URL FINAL
            $url = $uri . $parametros . $apikey;

            return view('pages.genero.index', compact('url', 'genero'));


        } else {

            return view('errors.404');

        }
    }
}
