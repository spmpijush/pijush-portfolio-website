<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class portfolio extends Controller
{

	public function __construct()
	{
		parent::__construct();
		Auth::checkLogin();
	}

	public function index()
	{
		$this->view->css = array('views/portfolio/index.css');
		$this->view->js = array('views/portfolio/index.js');
		$this->view->pageTitle = "portfolio";
		$this->view->render('portfolio', 'index');
	}

	public function getPortfolioData()
	{
		echo json_encode($this->model->getPortfolioData());
	}

	public function update()
	{
		$data = json_decode(file_get_contents('php://input'), true);
		echo json_encode($this->model->update($data));
	}
	public function productSave()
	{
		echo json_encode($this->model->productSave());
	}
}
