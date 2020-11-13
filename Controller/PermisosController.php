<?php

class PermisosController {
    private $permisosModel;
    private $render;

    public function __construct($permisosModel, $render){
        $this->permisosModel = $permisosModel;
        $this->render = $render;
    }

    public function execute(){
        $data["Usuarios"] = $this->permisosModel->getUsuarios();
        echo $this->render->render("view/songView.php", $data);
    }

    public function description(){
        $id = $_GET["idUsuario"];
        $data["Usuario"] = $this->permisosModel->getUsuario($id);
        echo $this->render->render("view/songDescriptionView.php", $data);
    }
}