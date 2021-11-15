<?php
    class MVC 
    {
        public function plantilla(){
            include "views/template.php";
        }

        public function enlaces(){
            if( isset($_GET['action']) ){
                $enlaces = $_GET['action'];
            }else{
                $enlaces ='inicio';
            }
            include 'views/modules/'.$enlaces.'.php';
        } 
    }
    
?>