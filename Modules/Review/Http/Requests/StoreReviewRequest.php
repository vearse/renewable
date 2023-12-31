<?php

namespace Modules\Review\Http\Requests;

use Modules\Core\Http\Requests\Request;

class StoreReviewRequest extends Request
{
    /**
     * Available attributes.
     *
     * @var string
     */
    protected $availableAttributes = 'review::attributes';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rating' => 'required|numeric',
            'reviewer_name' => 'required',
            'comment' => 'required',
            'reviewer_attachment' => 'file|mimes:jpg,jpeg,png|max:2048',
            // 'captcha' => 'required|captcha',
        ];
    }
}
