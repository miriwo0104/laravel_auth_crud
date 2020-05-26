<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreContentPost extends FormRequest
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
            //バリデーションルールを記載する
            //'チェックするデータ名' => 'ルール1|ルール2'の様にルールを定義する
            'title' => 'required',
            'detail' => 'required',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $response['summary'] = 'バリデーションによりこのリクエストは拒否されました';
        $response['errors']  = $validator->errors()->toArray();
    
        throw new HttpResponseException(
            response()->json($response)
        );
    }
}
