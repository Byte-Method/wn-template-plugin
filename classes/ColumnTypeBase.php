<?php

namespace ZachCO\TemplatePlugin\Classes;

class ColumnTypeBase {
	public function __invoke($value, $column, $record) {
		$this->render($value, $column, $record);
	}

	/**
	 * Render the custom representation of a column value
	 * @param $value
	 * @param $column
	 * @param $record
	 * @return string
	 */
	public function render($value, $column, $record) {
		// ...
	}
}