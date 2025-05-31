<?php 

class HomeController extends BaseController {

    public function home () {
        $viewData = [];
        $this->renderView('Home/home', $viewData);
    }
}
