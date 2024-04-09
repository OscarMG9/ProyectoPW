<?php

namespace App\Controllers;

class DashboardPanel extends BaseController
{
   
   private $view = 'dashboardPanel';
   
   private function cargar_datos(){
        $datos = array();

        // Información general
        $datos['nombre_pagina'] = 'DashboardPanel';
        
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