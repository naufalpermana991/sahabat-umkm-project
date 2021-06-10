<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'title' => 'required|max:255',
            'status' => 'required|max:255',
            'status' => 'required|max:255',
            'about' => 'required',
            'time' => 'required|date',
            'venue' => 'required|max:255',
            'price' => 'required|integer'
        ];
    }
}
