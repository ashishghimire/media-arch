<?php

namespace App\Http\Requests\Backend\CMS;

use Illuminate\Foundation\Http\FormRequest;

class CreateTestimonialRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [

			  return [
        'name' => 'required',
        'description' => 'required',
        	'position'=>'required',
			'image' => 'required|mimes:jpeg,jpg,png,bmp',
        	

    ];
			
		];
	}
}
