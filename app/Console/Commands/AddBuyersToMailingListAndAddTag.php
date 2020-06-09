<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Spatie\Mailcoach\Models\EmailList;
use Spatie\Mailcoach\Models\Subscriber;

class AddBuyersToMailingListAndAddTag extends Command
{
    protected $signature = 'mailcoach:add-and-tag-buyers';

    protected $description = 'Tag all subscriber that bought mailcoach';

    public function handle()
    {
        $this->info('Tagging subscribers...');

        Subscriber::cursor()
            ->each(function (Subscriber $subscriber) {
                $subscriber->removeTag('bought-mailcoach');
            });

        $emailList = EmailList::where('name', 'Laravel Package Training')->first();

        User::cursor()
            ->each(function (User $user) use ($emailList) {
                /** @var Subscriber $subscriber */
                if (!$subscriber = Subscriber::where('email', $user->email)->first()) {
                    $subscriber = Subscriber::createWithEmail($user->email)->skipConfirmation()->subscribeTo($emailList);
                }

                $this->addBoughMailCoachTag($user, $subscriber);
            });

        $this->info('All done!');
    }

    protected function addBoughMailCoachTag(User $user, Subscriber $subscriber): void
    {
        if ($user->purchases()->count() === 0) {
            return;
        }

        $subscriber->addTag('bought-course');

        $this->info('Add bought tag to ' . $user->email);
    }
}
