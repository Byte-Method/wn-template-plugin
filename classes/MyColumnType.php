<?php

namespace ZachCO\TemplatePlugin\Classes;

use ZachCO\Classes\ColumnTypeBase;

class MyColumnType extends ColumnTypeBase {
	// Column type short name used in fields.yaml, etc
	const SHORT_NAME = 'uppercase';

	public function render($value, $column, $record) {
		return strtoupper($value);
	}
}