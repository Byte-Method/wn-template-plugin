<?php

namespace ZachCO\TemplatePlugin\Components;

use Cms\Classes\ComponentBase;

class ComponentTemplate extends ComponentBase {

	const SHORT_NAME = 'componentTemplate';

	// `string` property
	public $string;

	public function componentDetails() {
        return [
            'name'        => 'zachco.templateplugin::lang.component.componentTemplate.name',
            'description' => 'zachco.templateplugin::lang.component.componentTemplate.description'
        ];
	}
	
	public function defineProperties() {
		return [
			'string' => [
				'title'             => 'zachco.templateplugin::lang.property.string.title',
				'description'       => 'zachco.templateplugin::lang.property.string.description',
				'type'              => 'string',
				'default'           => '',
				'placeholder'       => '',
				'required'          => true,
				'depends'           => [],
				'group'             => 'zachco.templateplugin::lang.property_group.mygroup',
				//'showExternalParam' => true, // default is true
				//'validationPattern' => '', // Can only be used on 'string' properties
				//'validationMessage' => '', // Can only be used on 'string' properties
				//'options'           => [], // Can also use 'getPropertyOptions()'
			]
		];
	}

	public function init() {}

	public function onRun() {
		$this->prepareVars();
		//$this->addJs('');
		//$this->addCss('');
	}

	//public function onRender() {} // This method seems to be required when there is more than one component of the same type on a page, in order for the properties to reflect each component

	public function prepareVars() {
		$this->string = $this->page['string'] = $this->property('string');
	}
}