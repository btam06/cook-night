<?php
	
	use Dotink\Flourish\Text;

	class ForumTopic extends fActiveRecord {

		public function __toString() {
			return $this->encodeName();
		}

		public function makeUrl() {

			$context = new Text($this->encodeName());

			return '/forum/' . $context->underscorize()->compose(); 
		}

	}