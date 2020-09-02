<?php

namespace App\Http\Controllers;

use App\Repositories\Syscom;
use GuzzleHttp\Client;
use function GuzzleHttp\headers_from_lines;
use Illuminate\Http\Request;


class SyscomController extends Controller
{
    protected $syscom;

    public function __construct(Syscom $syscom)
    {
        $this->syscom = $syscom;
    }

    public function acceso(){
        $subcategorias = $this->syscom->subcategorias('37'); //Control de acceso
        $productos = $this->syscom->productos('37'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }
    public function video(){
        $subcategorias = $this->syscom->subcategorias('22'); //video vigilancia
        $productos = $this->syscom->productos('22'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }
    public function redes(){
        $subcategorias = $this->syscom->subcategorias('26'); //Redes
        $productos = $this->syscom->productos('26'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }
    public function cableado(){
        $subcategorias = $this->syscom->subcategorias('65811'); //Cableado
        $productos = $this->syscom->productos('65811'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }
    public function energia(){
        $subcategorias = $this->syscom->subcategorias('30'); //energia
        $productos = $this->syscom->productos('30'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }
    public function fuego(){
        $subcategorias = $this->syscom->subcategorias('38'); //fuego
        $productos = $this->syscom->productos('38'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }









}
