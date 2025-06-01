<?php 

class ProjectController extends BaseController {

    public function project () {
        $viewData = [];
        $this->renderView('Project/project', $viewData);
    }

    public function brochure () {
        $viewData = [];
        $this->renderView("DataProject/bruchiure/Bruchure",$viewData);
    }
    public function faceRecognition () {
        $viewData = [];
        $this->renderView("DataProject/faceRoconition/faceRoconition",$viewData);
    }
    public function webDesign () {
        $viewData = [];
        $this->renderView("DataProject/webDesign/webDesign",$viewData);
    }
    public function scanning () {
        $viewData = [];
        $this->renderView("DataProject/ScanningObject/scanning",$viewData);
    }
    public function weatherApp () {
        $viewData = [];
        $this->renderView("DataProject/wetherApp/wehterApp",$viewData);
    }
    public function vc1 () {
        $viewData = [];
        $this->renderView("DataProject/VirtualCompany/vc1",$viewData);
    }
    public function deployment () {
        $viewData = [];
        $this->renderView("DataProject/softwareDeployment/deployment",$viewData);
    }

}
