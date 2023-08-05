<?php

namespace App\Http\Requests;

use App\Models\AboutUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAboutUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_us_create');
    }

    public function rules()
    {
        return [
            'site_name' => [
                'string',
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
            'president_description' => [
                'string',
                'nullable',
            ],
            'link' => [
                'string',
                'nullable',
            ],
            'description' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'phone_number' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'author_seo' => [
                'string',
                'nullable',
            ],
            'sitemap_link_seo' => [
                'string',
                'nullable',
            ],
            'gallery' => [
                'array',
            ],
            'location' => [
                'string',
                'nullable',
            ],
        ];
    }
}
