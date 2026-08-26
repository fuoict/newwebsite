<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $pageId = $this->route('page')?->id;

        return [
            'title' => ['required', 'string', 'max:191'],
            'hero_title' => ['nullable', 'string', 'max:191'],
            'hero_subtitle' => ['nullable', 'string', 'max:255'],
            'hero_image' => ['nullable', 'string', 'max:255'],
            'images' => ['nullable'],
            'slug' => ['required', 'string', 'max:191', 
                \Illuminate\Validation\Rule::unique('pages', 'slug')->ignore($pageId),
            ],
            'status' => ['required', 'in:draft,published'],
            'template' => ['nullable', 'string', 'max:100'],
            'meta_title' => ['nullable', 'string', 'max:191'],
            'meta_description' => ['nullable', 'string', 'max:255'],
            'content' => ['nullable', 'string'],
            'published_at' => ['nullable', 'date'],
        ];
    }
}
