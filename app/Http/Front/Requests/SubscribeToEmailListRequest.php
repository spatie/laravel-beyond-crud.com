<?php

namespace App\Http\Front\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Spatie\Mailcoach\Models\EmailList;
use Spatie\Mailcoach\Rules\EmailListSubscriptionRule;

class SubscribeToEmailListRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['required', 'email', new EmailListSubscriptionRule($this->emailList())]
        ];
    }

    public function emailList(): EmailList
    {
        return EmailList::find(1);
    }
}
