<?php

	use Dotink\Flourish\Text;

	class RecordSet {

		public function __construct(Text $context) {

			$this->context = $context;

			if (__CLASS__ != get_called_class()) {
				$this->class = $context
					->create(get_called_class())
					->singularize()
					->compose();
			}
			
		}

		public function buildAll($sort_column = NULL, $sort_direction = NULL, $limit = NULL, $page = NULL) {
			
			$orderby = NULL;
			if (isset($sort_column)) {
				$orderby = [$sort_column = $sort_direction ?: 'asc'];
			}

			return fRecordSet::build(
				$this->class,
				NULL,
				$orderby,
				$limit,
				$page
			);
		}

	}