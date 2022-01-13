<?php

namespace App\Http\Requests;

use App\Helpers\Constant;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateTicketRequest extends FormRequest
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
            'title'       => ['required', 'string'],
            'description' => ['required', 'string'],
            'status'      => ['required', Rule::in(Constant::TICKET_STATUS)],
        ];
    }
}
