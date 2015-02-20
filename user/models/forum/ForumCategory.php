<?php


	class ForumCategory extends fActiveRecord {
	
		public function __toString() {
			return $this->encodeName();
		}

	}