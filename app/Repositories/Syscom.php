<?php


namespace App\Repositories;


class Syscom extends GuzzleHttpRequest_Syscom
{
    /** Devuelve las lista de categorías de una categoría */
    public function categorias($id){
        return $this->get("categorias/$id");
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
