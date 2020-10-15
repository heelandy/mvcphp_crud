<?php
	
	class Paginas extends Controlador{

		public function __construct(){			
         $this->usuarioModelo = $this->modelo('Usuario');
		}

		public function index(){			
         $usuario =$this->usuarioModelo->obtener();

			$datos = [
				'usuario' => $usuario				
			];

			$this->vista('paginas/inicio', $datos);
		}
		


		public function agregar(){
			if ($_SERVER['REQUEST_METHOD'] =='POST') {
				$datos = [
					'nome' => trim($_POST['nome']),
					'email' => trim($_POST['email']),
					'numero' => trim($_POST['numero'])
					];
					if ($this->usuarioModelo->agregarUsuario($datos)) {
						redireccionar('paginas');
					} else {
						die('....');
					}
	
			} else {
				$datos = [
				   'nome' => '',
				   'email' => '',
				   'numero' => ''
				];
				$this->vista('paginas/agregar', $datos);
			}
			
			
			
			
		}
		 
		public function editar($id){

			if ($_SERVER['REQUEST_METHOD'] =='POST') {
				$datos = [
					'id_usuario'=> $id ,
					'nome' => trim($_POST['nome']),
					'email' => trim($_POST['email']),
					'numero' => trim($_POST['numero'])
					];
					if ($this->usuarioModelo->actualizarUsuario($datos)) {
						redireccionar('paginas');
					} else {
						die('....');
					}
	
			} else {
				$usuario = $this->usuarioModelo->obtenerId($id);
				$datos = [
					'id_usuario'=> $usuario->id_usuario,
				   'nome' => $usuario->nome,
				   'email' => $usuario->email,
				   'numero' => $usuario->numero
				];
				$this->vista('paginas/editar', $datos);
			}
			
			
			
			
		}
		


		public function borrar($id){		 
		$usuario = $this->usuarioModelo->obtenerId($id);

				$datos = [
					'id_usuario'=> $usuario->id_usuario,'nome' => $usuario->nome,
					'email' => $usuario->email,
					'numero' => $usuario->numero
				];
				
				if ($_SERVER['REQUEST_METHOD'] =='POST') {
					$datos = [
						'id_usuario'=> $id
						];

				   if ($this->usuarioModelo->borrarUsuario($datos)) {
							redireccionar('paginas');
				   } else {
					die('....');
					}
			 }
                 $this->vista('paginas/borrar', $datos);
			
			}

	}