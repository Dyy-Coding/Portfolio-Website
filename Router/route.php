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

// ✅ Home Route
$route->get('/', [HomeController::class, 'home']);

// ✅ Skills
$route->get('/Skill', [SkillController::class, 'skills']);

// ✅ Projects
$route->get('/Project', [ProjectController::class, 'project']);
$route->get('/bruchure', [ProjectController::class, 'bruchure']);
$route->get('/faceReconition', [ProjectController::class, 'faceReconition']);
$route->get('/webDesign', [ProjectController::class, 'webDesign']);
$route->get('/Scanning', [ProjectController::class, 'scanning']);
$route->get('/wetherApp', [ProjectController::class, 'wetherApp']);
$route->get('/VirtualCompany1', [ProjectController::class, 'vc1']);
$route->get('/Deployment', [ProjectController::class, 'deployment']);

// ✅ Education
$route->get('/Education', [EducationController::class, 'education']);

// ✅ Contact + Form Submissions
$route->get('/Contact', [ContactController::class, 'contact']);
$route->post('/insertSubmission', [ContactController::class, 'addSubmission']);
$route->delete('/deleteSubmission/{id}', [ContactController::class, 'deleteSubmission']);

// ✅ Authentication
$route->get('/LoginForm', [LoginController::class, 'login']);   // Show form (GET)
$route->post('/Login', [LoginController::class, 'login']);      // Handle login (POST)
$route->get('/Logout', [LoginController::class, 'logout']);     // Handle logout

// ✅ Protected Dashboard
$route->get('/DataSubmission', [DataController::class, 'message']);
$route->printRoutes();

// ✅ Route everything
$route->route();
