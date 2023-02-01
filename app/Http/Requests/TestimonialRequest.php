<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class TestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if( Auth::check() ) {
            return true;
        }
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'thumbnail' => 'image|mimes:png,jpg,jpeg|max:2048',
            'name' => 'required',
            'content' => 'required',
            'slug' => 'required'
        ];
    }
}
