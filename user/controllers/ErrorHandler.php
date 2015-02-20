<?php

	use Inkwell\Controller;

	class ErrorHandler extends Controller\BaseController {
		public function notFound() {
			return 'Nothing to see here folks.';
		}
	}