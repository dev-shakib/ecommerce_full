<?php

namespace Modules\Contact\Http\Requests;

use Modules\Core\Http\Requests\Request;

class ContactApiRequest extends Request
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
        ];


    }

     /**
     * @return array|string[]
     */
    public function messages(): array
    {
        return [
            'f_name.required' => 'First Name is required',
            'l_name.required' => 'Last Name is required',
            'phone.required' => 'Phone is required',
            'attachment.max' => 'Attachment size should be less than 1MB',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'subject.required' => 'Subject is required',
            'message.required' => 'Message is required',
        ];
    }
}
