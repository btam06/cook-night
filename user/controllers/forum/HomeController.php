<?php
	namespace Forum;

	use Inkwell\Controller;
	use Inkwell\View;

	class HomeController extends Controller\BaseController {

		public function __construct(View $view) {
			$this->view = $view;
		}

		public function main() {

			return $this->view->load('forum/list.html');
		}

	}