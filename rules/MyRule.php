<?php

namespace ZachCO\TemplatePlugin\Rules;

use Illuminate\Contracts\Validation\Rule;

class MyRule extends Rule {
	// Rule name
	const NAME = 'uppercase';

	/**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) {
        return strtoupper($value) === $value;
    }

    /**
     * Validation callback method.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  array  $params
     * @return bool
     */
    public function validate($attribute, $value, $params) {
        return $this->passes($attribute, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'The :attribute must be uppercase.';
    }
}