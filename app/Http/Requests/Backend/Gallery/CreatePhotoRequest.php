<?php

    namespace App\Http\Requests\Backend\Gallery;

    use Illuminate\Foundation\Http\FormRequest;

    class CreatePhotoRequest extends FormRequest
    {

        /**
         * Determine if the user is authorized to make this request.
         *
         * @return bool
         */
        public function authorize()
        {

            return TRUE;
        }


        /**
         * Get the validation rules that apply to the request.
         *
         * @return array
         */
        public function rules()
        {

            return [
//                'image'=>'image|mimes:jpeg,png,jpg,gif,svg',
            ];
        }
    }
