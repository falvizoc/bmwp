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
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias'));
    }
    public function video(){
        $subcategorias = $this->syscom->subcategorias('22'); //Video Vigilancia
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias'));
    }
    public function redes(){
        $subcategorias = $this->syscom->subcategorias('26'); //Redes
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias'));
    }
    public function cableado(){
        $subcategorias = $this->syscom->subcategorias('65811'); //Cableado
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias'));
    }
    public function energia(){
        $subcategorias = $this->syscom->subcategorias('30'); //energia
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias'));
    }
    public function fuego(){
        $subcategorias = $this->syscom->subcategorias('38'); //fuego
        //return dd($subcategorias);
        return view('categorias',compact('subcategorias'));
    }








}
