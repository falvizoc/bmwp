<?php


namespace App\Repositories;


class Syscom extends GuzzleHttpRequest_Syscom
{
    /** Devuelve las lista de categorías de una categoría */
    public function categorias($id){
        return $this->get("categorias/$id");
    }

    public function todas_subcategorias($id){
        $a=[];
        $subcategorias=$this->get("categorias/$id");
        foreach ($subcategorias->subcategorias as $sc){
           array_push($a,get_object_vars($this->get("categorias/$sc->id")));
           usleep(8000000);
        }
        return $a;
    }

    /** Devuelve los productos de una categoría */
    public function productos($id_cat){
       return $this->get("productos","$id_cat");
    }

    /** Devuelve detalles de un producto */
    public function producto($id_product){
            return $this->get("productos/$id_product");
        }

    /** Devuelve tipo de cambio */
    public function tipocambio(){
        return $this->get("tipocambio");
    }
}
