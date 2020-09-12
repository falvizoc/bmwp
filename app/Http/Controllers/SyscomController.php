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

    public function product($product_id){
        $product = $this->syscom->producto($product_id);
        return dd($product);
    }

    public function productbycat($cat_id){
        $subcategorias = $this->syscom->categorias($cat_id);
        $productos = $this->syscom->productos($cat_id); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }

    public function acceso(){
        $subcategorias = $this->syscom->categorias('37'); //Control de acceso
        $productos = $this->syscom->productos('37'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        $todasSubCategorias = $this->syscom->todas_subcategorias('37');
        return view('categorias',compact('subcategorias','productos', 'tipocambio', 'todasSubCategorias'));
    }
    public function video(){
        $subcategorias = $this->syscom->categorias('22'); //video vigilancia
        $productos = $this->syscom->productos('22'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }
    public function redes(){
        $subcategorias = $this->syscom->categorias('26'); //Redes
        $productos = $this->syscom->productos('26'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }
    public function cableado(){
        $subcategorias = $this->syscom->categorias('65811'); //Cableado
        $productos = $this->syscom->productos('65811'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }
    public function energia(){
        $subcategorias = $this->syscom->categorias('30'); //energia
        $productos = $this->syscom->productos('30'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }
    public function fuego(){
        $subcategorias = $this->syscom->categorias('38'); //fuego
        $productos = $this->syscom->productos('38'); //productos por subcategoría
        $tipocambio = $this->syscom->tipocambio();
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias','productos', 'tipocambio'));
    }

    public function pruebas($id){
        return dd($this->syscom->todas_subcategorias($id));
    }









}
