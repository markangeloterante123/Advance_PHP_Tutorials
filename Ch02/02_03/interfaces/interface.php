<?php
interface TableInterface {
	public function save(array $data);
}

class Table implements TableInterface {
	public function save(array $data) {
		return 'foo foo ni mark';
	}
}
echo (new Table())->save([]);