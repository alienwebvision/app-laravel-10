<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSupportRequest;

class UpdateSupportDTO
{
    public function __construct(
        public string $id,
        public string $subject,
        public string $status,
        public string $body,
    )
    {
    }

    public static function makeFromRequest(StoreUpdateSupportRequest $storeUpdateSupportRequest)
    {
        return new self(
            $storeUpdateSupportRequest->id,
            $storeUpdateSupportRequest->subject,
            'a',
            $storeUpdateSupportRequest->body,

        );
    }

}
