<?php
	namespace Forum;

	use Inkwell\Controller;
	use Inkwell\View;
	use Dotink\Flourish\Text;

	class HomeController extends Controller\BaseController {

		public function __construct(View $view, Text $context, \ForumCategories $categories, \ForumTopics $topics, \ForumThreads $threads, \ForumPosts $posts) {
			$this->view       = $view;
			$this->context    = $context;
			$this->categories = $categories;
			$this->topics     = $topics;
			$this->threads    = $threads;
			$this->posts      = $posts;
		}

		public function main() {

			$records = array();

			foreach ($this->categories->buildAll() as $category) {
				$records[$category->encodeName()] = $category->buildForumTopics();
			}

			$this->view->set([
				'records' => $records
			]);
			return $this->view->load('forum/list.html');
		}

		public function viewTopic() {

			$topic   = $this->request->params->get('topic');
			$topic   = $this->context->create($topic)->humanize()->compose();
			$topic   = new \ForumTopic($topic);
			$threads = $topic->buildForumThreads();

			$this->view->set([
				'category' => $topic,
				'records'  => $threads
			]);

			return $this->view->load('forum/sub_list.html');
		}

	}