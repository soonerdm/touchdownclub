<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use MailerSend\Helpers\Builder\Variable;
use MailerSend\Helpers\Builder\Personalization;
use MailerSend\LaravelDriver\MailerSendTrait;

class FromWebSite extends Mailable
{
    use Queueable, SerializesModels, MailerSendTrait;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
     {
            // Recipient for use with variables and/or personalization
            $to = Arr::get($this->to, '0.address');

            return $this
                ->view('emails.test_html')
                ->text('emails.test_text')
                ->attachFromStorageDisk('public', 'example.png')
                // Additional options for MailerSend API features
                ->mailersend(
                    template_id: null,
                    variables: [
                        new Variable($to, ['name' => 'Your Name'])
                    ],
                    tags: ['tag'],
                    personalization: [
                        new Personalization($to, [
                            'var' => 'variable',
                            'number' => 123,
                            'object' => [
                                'key' => 'object-value'
                            ],
                            'objectCollection' => [
                                [
                                    'name' => 'John'
                                ],
                                [
                                    'name' => 'Patrick'
                                ]
                            ],
                        ])
                    ],
                   // precedenceBulkHeader: true,
                   // sendAt: new Carbon('2022-01-28 11:53:20'),
                );
        }
    }

}
