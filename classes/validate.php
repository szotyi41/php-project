<?php
/**
 * Created by PhpStorm.
 * User: Szotyi Lehet
 * Date: 2018. 03. 30.
 * Time: 2:51
 */

namespace classes;

class validate {

    private $_passed = false;
    private $_errors = array();

    public function check($source, $items = array()) {
        foreach($items as $item => $rules) {
            foreach($rules as $rule => $rule_value) {
                $value = $source[$item];
                $item = escape($item);
                if($rule === 'required' && empty($value)) {
                    $this->addError("{$item} is required");
                } else if (!empty($value)) {
                    switch($rule) {
                        case 'min':
                            if(strlen($value) < $rule_value) {
                                $this->addError("{$item} must be a minimum of {$rule_value} characters.");
                            }
                            break;
                        case 'max':
                            if(strlen($value) > $rule_value) {
                                $this->addError("{$item} must be a maximum of {$rule_value} characters.");
                            }
                            break;
                        case 'matches':
                            if($value != $source[$rule_value]) {
                                $this->addError("{$rule_value} must match {$item}.");
                            }
                            break;
                    }
                }
            }
        }
        if(empty($this->_errors)) {
            $this->_passed = true;
        }
    }
    private function addError($error) {
        $this->_errors[] = $error;
    }
    public function errors() {
        return $this->_errors;
    }
    public function passed() {
        return $this->_passed;
    }
}