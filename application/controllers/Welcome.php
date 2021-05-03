<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$next_button = $this->input->post("next_button");
		$previous_button = $this->input->post("previous_button");

		$next_button_style = "display: block;";

		if ($next_button=="" && $previous_button!="") {
			$next_button = $previous_button;
			$previous_button = $previous_button;
			$previous_button_style = "display: block;";
		} 
		else if($next_button!="" && $previous_button==""){
			$next_button = $next_button;
			$previous_button = $previous_button;
			$previous_button_style = "display: block;";
		}
		else if($next_button=="" && $previous_button==""){
			$next_button = 'https://swapi.dev/api/people/';
			$previous_button = '';
			$previous_button_style = "display: none";
		}
	
		$lista = json_decode(file_get_contents($next_button), true);


		$characters = $lista["results"];
		$next_button = $lista["next"];
		$previous_button = $lista["previous"];

		if ($next_button=="") {
			$next_button_style = "display: none;";
		} 

		$TITLE = "Personaje Star War";
		$CONTENT=$this->parser->parse("personaje/lista", array("LISTA"=>$characters, "next_button"=>$next_button, "previous_button"=>$previous_button, "previous_button_style"=>$previous_button_style, "next_button_style"=>$next_button_style), true);

		$data = array(
			"TITLE"=>$TITLE,
			"CONTENT"=>$CONTENT				
		);

        $this->parser->parse("template",$data);
	}
}
