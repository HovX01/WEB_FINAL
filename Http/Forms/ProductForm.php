<?php

namespace Http\Forms;

use Core\Database;
use Core\Validator;

class ProductForm extends Form
{
    public function handle(array $attributes): void
    {
        if (Validator::required($attributes['name']) === false) {
            $this->errors['name'] = 'Name is required';
        }

        if (Validator::required($attributes['price']) === false) {
            $this->errors['price'] = 'Price is required';
        }
    }
}