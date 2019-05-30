<?php

namespace App\Http\Controllers\Util;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public static function inserePosfixoImagem($url, $posfixo)
    {
        $url = explode('.', $url);
        $posicao = count($url) - 2;
        $url[$posicao] = $url[$posicao].'-'.$posfixo;
        $url = implode('.', $url);

        return $url;
    }
}
