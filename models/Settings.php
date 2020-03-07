<?php

namespace ZachCO\TemplatePlugin\Models;

use Model;

class Settings extends Model {
	public $implement = [
		'System.Behaviors.SettingsModel'
	];

	// Unique code
	public $settingsCode = 'ZachCO_TemplatePlugin_Settings';

	// Fields definition
	public $settingsFields = 'fields.yaml';

	public function initSettingsData() {
        $this->someProperty = 'some value';
    }
}