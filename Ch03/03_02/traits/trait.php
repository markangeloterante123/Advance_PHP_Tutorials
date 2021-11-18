<?php
trait Log {
	protected function log($msg) {
		echo "{$msg}\n";
	}
}

trait Data {
	protected function data ($data) {
		echo "{$data}\n";
	}
}

class Table {
	use Log;
	use Data;

	public function save() {
		$this->log('save start');
	}

	public function dataRender() {
		$this->data('this is data sending in traits data arguments');
	}
}

(new Table())->dataRender();