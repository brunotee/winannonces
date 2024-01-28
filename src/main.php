<?php
namespace Ann;
use Ann\vue;
class Main {

    function  __construct()
    {
      //echo "Bienvenu sur les annonces du vin";
        require ("vue/headVue.php");
        require ("vue/header.php");
        require ("vue/connect_form_vue.php");
        echo headVue();
        echo headerVue();
        echo connect_form_vue();

    }
    function controller(){
        






    }

}
