<?php if ($_SERVER['REQUEST_URI'] == $_SERVER['PHP_SELF']) header("Location: noPage");

class about_us extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->view->pageTitle = "Resume";
		$this->view->css = array('views/about_us/index.css');
		$this->view->js = array('views/about_us/index.js');
		// $this->view->getabout_usPageDate = $this->model->getabout_usPageDate();
		$this->view->getPersonalInfoPageDate = $this->model->getPersonalInfoPageDate();
		$this->view->getSkilsDate = $this->model->getSkilsDate();
		$this->view->getGalleryDate = $this->model->getGalleryDate();
		$this->view->getEducationDate = $this->model->getEducationDate();
		$this->view->getWorkExperienceDate = $this->model->getWorkExperienceDate();
		$this->view->getAboutPageDate = $this->model->getAboutPageDate();
		$this->view->render('about_us', 'index');
	}
}
