<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'title' => 'required|min:5',
             'category_id' => 'required',
             'description' => 'required|min:50',
            //  'thumbnail_img' => 'nullable',
            //  'user_id' => 'required',
            //  'status' =>  'required'
        ];
    }

/**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'title.required' => 'Title is required.',
        'title.min' => 'The title must be at least 5 characters and maximum 100 characters.',
        'category_id' => 'Category is required',
        'description' => 'Description is required',
    ];
}
}
