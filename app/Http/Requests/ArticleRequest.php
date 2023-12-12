<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'field1' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
