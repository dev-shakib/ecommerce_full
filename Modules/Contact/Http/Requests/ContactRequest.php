<?php

namespace Modules\Contact\Http\Requests;

use Modules\Core\Http\Requests\Request;

class ContactRequest extends Request
{
    protected $availableAttributes = 'contact::attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'f_name' => ['required'],
            'l_name' => ['required'],
            'phone' => ['required'],
            'attachment' => ['sometimes', 'max:1000'],
            'email' => ['required', 'email'],
            'subject' => ['required'],
            'message' => ['required'],
            'captcha' => ['required', 'captcha'],
        ];
    }
}
