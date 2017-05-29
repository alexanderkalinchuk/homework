<?php


function get_menu() {
	if(htmlentities($_SERVER['REMOTE_ADDR']=='127.0.0.1')){
	
    $menu = array(
        "/blog/"=>MAIN,
        "/blog/aboutme"=>ABOUTME,
        "/blog/intplaces"=>INTPLACES,
        "/blog/contacts"=>CONTACTS,
		"/blog/adminpanel"=>ADMINPANEL
        );
	}
else{
    $menu = array(
        "/blog/"=>MAIN,
        "/blog/aboutme"=>ABOUTME,
        "/blog/intplaces"=>INTPLACES,
        "/blog/contacts"=>CONTACTS,
        );
	}
	return $menu;
}

function start_init($uri){


    $url = explode("/",$uri);
/* 	if (file_exists("pages/admin/".$url[2].".php")){
		include "pages/admin/".$url[2].".php";
	} */
    if( (sizeof($url)<4 && file_exists("pages/".$url[2].".php")) OR (file_exists("pages/".$url[2].".php") && $url[2]=="dell") OR (file_exists("pages/".$url[2].".php") && $url[2]=="edit") OR (file_exists("pages/".$url[2].".php") && $url[2]=="save")){
		
        include "pages/".$url[2].".php";



}
}






?>