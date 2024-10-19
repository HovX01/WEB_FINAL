<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

abstract class Form
{
    protected $errors = [];

    public function __construct(public array $attributes)
    {
//        $rules = $this->rules();
//        foreach ($rules as $field => $rule) {
//            $rule = is_array($rule) ? $rule : explode('|', $rule);
//            foreach ($rule as $validator) {
//                if (!method_exists(Validator::class, $validator)) {
//                    throw new \Exception("Validator {$validator} does not exist.");
//                }
//                if (!Validator::$validator($this->attributes[$field], ...$rule)) {
//                    $this->errors[$field] = $validator;
//                }
//            }
//        }
        $this->handle($attributes);
    }


    public static function validate($attributes)
    {
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw()
    {
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed()
    {
        return count($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;

        return $this;
    }

    protected abstract function handle(array $attributes): void;
}