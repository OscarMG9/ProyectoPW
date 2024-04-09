<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
   
   private $view = 'dashboard';
   
   private function cargar_datos(){
        $datos = array();

        // Información general
        $datos['nombre_pagina'] = 'Equipo_OO';
        
        // Breadcrumb
        
        // queries

        return $datos;
   }

   private function crear_vista($nombre_vista = '', $contenido = array()){
        return view($nombre_vista, $contenido);
   }
   
    public function index()
    {
        return $this->crear_vista($this->view, $this->cargar_datos());
    }

}