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

	/* This method allows setting properties when the component is rendered.
	 * E.g.: {% component 'componentTemplate' string='foo' %}
	 * The `string` property would be overridden with 'foo',
	 * and could be accessed with $this->property('string');
	 */
	//public function onRender() {}

	public function prepareVars() {
		$this->string = $this->page['string'] = $this->property('string');
	}
}
