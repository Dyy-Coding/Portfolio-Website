<?php 

class EducationController extends BaseController {

    public function education () {
        $viewData = [];
        $this->renderView('education/education', $viewData);
    }
}
