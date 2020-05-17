<?php

 class Session 
 {
     static function star(){
         @session_start();
         //se usa para inicializar las variables de session y optanerla informacion que esta almacenada
     }
     static function getSession($name){
        return $_SESSION[$name]; 
         //recibira un parametro , esta variable con como tipo POST y GET , el dato recibira el parametro name 
         //el cual tendra una variable de sesion
       
     }
     static function setSession($name,$data){
         //metodo para crear nuestras variables se sesesion el name tendra la viariable de session y el data 
         //tendra el dato que vamos a tener en la session
         return $_SESSION[$name]=$data;
     }
     static function destroy(){
         //metodo para destruir nuestras variables de session o la informacion
         @session_destroy();
     }
 }
 
 

?>