<?php
	namespace Forum;

	use Inkwell\Controller;
	use Inkwell\View;

	class HomeController extends Controller\BaseController {

		public function __construct(View $view, \ForumCategories $categories) {
			$this->view       = $view;
			$this->categories = $categories->buildAll();
		}

		public function main() {

			$this->view->set([
				'categories' => $this->categories
			]);
			return $this->view->load('forum/list.html');
		}

	}