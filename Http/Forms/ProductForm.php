<?php

namespace Http\Forms;

use Core\Database;
use Core\Validator;

class ProductForm extends Form
{
    public function handle(array $attributes): void
    {
        if (!Validator::required($attributes['title'])) {
            $this->errors['title'] = 'A title is required.';
        } elseif (!Validator::string($attributes['title'], 1, 100)) {
            $this->errors['title'] = 'A title of no more than 100 characters is required.';
        }

        if (!Validator::required($attributes['slug'])) {
            $this->errors['slug'] = 'A slug is required.';
        } elseif (preg_match('/[^a-z0-9\-]/i', $attributes['slug'])) {
            $this->errors['slug'] = 'A slug can only contain lowercase letters, numbers and dashes.';
        } elseif (!Validator::string($attributes['slug'], 1, 100)) {
            $this->errors['slug'] = 'A slug of no more than 100 characters is required.';
        } elseif (app(Database::class)->query("SELECT * FROM products WHERE slug = :slug AND id != :id", [
            'slug' => $attributes['slug'],
            'id' => $attributes['id'] ?? null
        ])->get()) {
            $this->errors['slug'] = 'A slug must be unique.';
        }

        if (Validator::required($attributes['available'])) {
            $this->attributes['available'] = false;
        }

        $this->attributes['available'] = (bool) $this->attributes['available'];

        if ($attributes['category_id'] === '') {
            $this->attributes['category_id'] = null;
        }

    }
}