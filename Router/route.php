<?php

// ✅ Include Core
require_once "Router.php";
require_once "Database/Database.php";

// ✅ Include Models
require_once "Models/cantactSubmissionModel.php";
require_once "Models/usersModel.php";

// ✅ Include Base Controller
require_once "Controllers/BaseController.php";

// ✅ Include Controllers
require_once "Controllers/skillsController.php";
require_once "Controllers/projects/projectController.php";
require_once "Controllers/educationController.php";
require_once "Controllers/ContactController.php";
require_once "Controllers/loginController.php";
require_once "Controllers/dataController.php";
require_once "Controllers/homeController.php";

// ✅ Initialize Router
$route = new Router();

// -----------------
// ✅ Home
// -----------------
$route->get('/', [HomeController::class, 'home']);

// -----------------
// ✅ Skills
// -----------------
$route->group('Skill', function ($route) {
    $route->get('/Skill', [SkillController::class, 'skills']);
});

// -----------------
// ✅ Projects
// -----------------
$route->group('Project', function ($route) {
    $route->get('/Project', [ProjectController::class, 'project']);
    $route->get('/bruchure', [ProjectController::class, 'brochure']);
    $route->get('/faceRecognition', [ProjectController::class, 'faceRecognition']);
    $route->get('/webDesign', [ProjectController::class, 'webDesign']);
    $route->get('/Scanning', [ProjectController::class, 'scanning']);
    $route->get('/wetherApp', [ProjectController::class, 'weatherApp']);
    $route->get('/VirtualCompany1', [ProjectController::class, 'vc1']);
    $route->get('/Deployment', [ProjectController::class, 'deployment']);
});

// -----------------
// ✅ Education
// -----------------
$route->group('Education', function ($route) {
    $route->get('/Education', [EducationController::class, 'education']);
});

// -----------------
// ✅ Contact + Submissions
// -----------------
$route->group('Contact', function ($route) {
    $route->get('/Contact', [ContactController::class, 'contact']);
    $route->post('/insertSubmission', [ContactController::class, 'addSubmission']);
    $route->delete('/deleteSubmission/{id}', [ContactController::class, 'deleteSubmission']);
});

// -----------------
// ✅ Authentication
// -----------------
$route->group('Auth', function ($route) {
    $route->get('/LoginForm', [LoginController::class, 'login']);
    $route->post('/Login', [LoginController::class, 'login']);
    $route->get('/Logout', [LoginController::class, 'logout']);
});

// -----------------
// ✅ Dashboard / Admin
// -----------------
$route->group('Dashboard', function ($route) {
    $route->get('/DataSubmission', [DataController::class, 'message']);
});

// ✅ Print all routes (debugging)
// $route->printRoutes();

// ✅ Dispatch
$route->route();
