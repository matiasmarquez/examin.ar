<?php

namespace App\Controllers;
defined("RUTA_APP") OR die("Acceso denegado");
 
use \Core\View;
use \Core\Controller;
use \App\Services\UsuarioService;
use \App\Models\Abm\Formulario;
use \App\Models\Abm\Campo;
use \App\Models\Usuarios\Usuario;

/**
 * @author Matías Márquez 
 */
class UsuariosController extends Controller{
    
    public function index() {
        
    }
    
    public function login() {
        $submit = filter_input(INPUT_POST, 'submit');
        if (!isset($submit)) {
            View::render("usuarios/login");
            return;
        }
        
        $usuario = filter_input(INPUT_POST, 'usuario');
        $password = filter_input(INPUT_POST, 'password');
        $campos = [
            "*"
        ];
        $condiciones = '
            usuarios.usuario = "' . $usuario . '"
            AND usuarios.password = "' . $password . '"
        ';
        
        $service = new UsuarioService();
        $usuarioLogeado = $service->getUsuario($campos, $condiciones);
        
        if ($usuario === "" || $password === "") {
            View::set('error', "Todos los datos deben completarse");
            View::render("usuarios/login");
            return;
        } elseif ($usuarioLogeado == "") {
            View::set('error', "Los datos ingresados son invalidos");
            View::render("usuarios/login");
            return;
        }
        
        // Se hace el logeo correctamente
        if ($usuario !== null) {
            $_SESSION['id']         = $usuarioLogeado->getId();
            $_SESSION['usuario']    = $usuarioLogeado->getUsuario();
            $_SESSION['permiso']    = $usuarioLogeado->getPermiso();
            $_SESSION['imagen']     = "/archivos/usuarios/" . $usuarioLogeado->getImagen();
            header("location: /index");
        }
    }
    
    public function logout() {
        unset($_SESSION['id'], $_SESSION['usuario'], $_SESSION['permiso'], $_SESSION['imagen']);
        header("location: /index");
    }
    
    public function perfil() {
        if (!isset($_SESSION['id'])) {
            header("location: /index");
        }
        
        $submit = filter_input(INPUT_POST, 'submit');
        if (isset($submit)) {
            $edicion = $this->editar();
            if ($edicion) {
                View::set('satisfactorio', "Sus datos se han editado satisfactoriamente");
            }
        }
        
        $campos = [
            "*"
        ];
        $condiciones = '
            usuarios.id = "' . $_SESSION['id'] . '"
            LIMIT 1
        ';
        
        $service = new UsuarioService();
        $datosUsuario = $service->getUsuario($campos, $condiciones);
        
        if ($datosUsuario !== null and $datosUsuario !== "") {
            View::set('nombre', $datosUsuario->getNombre());
            View::set('apellido', $datosUsuario->getApellido());
        }
        
        $formulario = $this->getFormularioEditar($datosUsuario);
        $formularioHTML = $formulario->getHTMLFormulario();
        
        View::set('formulario', $formularioHTML);
        View::render("usuarios/perfil");
    }
    
    /**
     * Actualiza la información de un usuario
     * 
     * @return boolean
     */
    private function editar() {
        $cambios = $this->recuperarCambios();
        $validacion = $this->validarCambios($cambios);
        if ($validacion !== "") {
            View::set('error', $validacion);
            return false;
        }
        $carpetaArchivos = RUTA_PUBLICA . "/archivos/usuarios/";
        $archivo = $this->getArchivo();
        if ($archivo !== null) {
            $this->guardarArchivo($carpetaArchivos, $archivo);
            $cambios["imagen"] = $archivo;
            $_SESSION['imagen'] = "/archivos/usuarios/" . $archivo;
        }
        $service = new UsuarioService();
        $condiciones = '
            usuarios.id = "' . $_SESSION['id'] . '"
        ';
        unset($cambios['submit']);
        $service->updateUsuario($cambios, $condiciones);
        return true;
    }
    
    /**
     * Devuelve los cambios del formulario para
     * editar información del usuario
     * 
     * @return array
     */
    private function recuperarCambios() {
        return filter_input_array(INPUT_POST);
    }
    
    private function validarCambios($cambios) {
        $error = "";
        foreach ($cambios as $clave => $valor) {
            if ($valor !== "") {
                continue;
            }
            switch ($clave) {
                case 'nombre':
                    $error .= "- El nombre es obligatorio <br/>";
                    break;
                case 'apellido':
                    $error .= "- El apellido es obligatorio <br/>";
                    break;
                case 'dni':
                    $error .= "- El DNI es obligatorio <br/>";
                    break;
                case 'usuario':
                    $error .= "- El usuario es obligatorio <br/>";
                    break;
            }
        }
        return $error;
    }
    
    /**
     * Crea y devuelve el form para la edición de usuarios
     * 
     * @param array $datos
     * @return string
     */
    private function getFormularioEditar($datosUsuario = "") {
        /* @var $datosUsuario Usuario */
        if ($datosUsuario !== null and $datosUsuario !== "") {
            $nombre   = $datosUsuario->getNombre();
            $apellido = $datosUsuario->getApellido();
            $dni      = $datosUsuario->getDni();
            $usuario  = $datosUsuario->getUsuario();
        }
        
        $formulario    = new Formulario("usuario-editar", FORMULARIO_METODO_POST, "formulario", "/usuarios/perfil");
        
        $campoNombre   = new Campo("nombre", CAMPO_TIPO_TEXTO, "Nombre", $nombre, true, "");
        $formulario->agregarCampo($campoNombre);
        
        $campoApellido = new Campo("apellido", CAMPO_TIPO_TEXTO, "Apellido", $apellido, true, "");
        $formulario->agregarCampo($campoApellido);
        
        $campoDni      = new Campo("dni", CAMPO_TIPO_NUMERO, "DNI", $dni, true, "");
        $formulario->agregarCampo($campoDni);
        
        $campoImagen   = new Campo("imagen", CAMPO_TIPO_ARCHIVO, "Imagen de perfil", "", false, "inputfile");
        $formulario->agregarCampo($campoImagen);
        
        $campoUsuario  = new Campo("usuario", CAMPO_TIPO_TEXTO, "Usuario", $usuario, true, "");
        $formulario->agregarCampo($campoUsuario);
        
        $campoContraseña  = new Campo("password", CAMPO_TIPO_PASSWORD, "Contraseña", "", false, "");
        $formulario->agregarCampo($campoContraseña);
        
        $campoSubmit   = new Campo("submit", CAMPO_TIPO_SUBMIT, "", "Cambiar datos", false, "boton boton-3d-redondeado");
        $formulario->agregarCampo($campoSubmit);
        
        return $formulario;
    }
    
}
