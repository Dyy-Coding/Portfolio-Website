<?php 

class SkillController extends BaseController {

    public function skills () {
        $viewData = [];
        $this->renderView('Skills/skills', $viewData);
    }
}
