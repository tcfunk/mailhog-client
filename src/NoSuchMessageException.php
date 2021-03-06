<?php
declare(strict_types=1);

namespace rpkamp\Mailhog;

use RuntimeException;

class NoSuchMessageException extends RuntimeException
{
    public static function forMessageId(string $messageId)
    {
        return new self(
            sprintf('No message found with messageId "%s"', $messageId)
        );
    }
}
