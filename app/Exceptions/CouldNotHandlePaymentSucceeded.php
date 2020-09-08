<?php

namespace App\Exceptions;

use Exception;
use Spatie\WebhookClient\Models\WebhookCall;

class CouldNotHandlePaymentSucceeded extends Exception
{
    public static function userNotFound(WebhookCall $webhookCall): self
    {
        $email = $webhookCall->payload['email'] ?? '';

        return new static("Could not process webhookCall `{$webhookCall->id}` because no user exists with email `{$email}`");
    }

    public static function productNotFound(WebhookCall $webhookCall): self
    {
        $productId = $webhookCall->payload['product_id'] ?? '';

        return new static("Could not process webhookCall `{$webhookCall->id}` because no product exists with paddle_product_id `{$productId}`");
    }

    public static function renewalWithoutLicense(WebhookCall $webhookCall): self
    {
        $passthrough = $webhookCall->payload['passthrough'] ?? '';

        return new static("Could not process webhookCall `{$webhookCall->id}` because license was not defined in passthrough `{$passthrough}`");
    }
}
