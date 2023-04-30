<?php

namespace App\DTO\Supports;

use App\Http\Requests\StoreUpdateSupportRequest;

class CreateSupportDTO
{
    public function __construct(
        public string $subject,
        public string $status,
        public string $body,
    )
    {
    }

    public static function makeFromRequest(StoreUpdateSupportRequest $storeUpdateSupportRequest)
    {
        return new self(
            $storeUpdateSupportRequest->subject,
            'a',
            $storeUpdateSupportRequest->body,

        );
    }

}
