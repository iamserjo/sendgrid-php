<?php
/**
 * This helper builds theContent object for a /mail/send API call
 */

namespace SendGrid7\Mail;

/**
 * This class is used to construct a Content object for the /mail/send API call
 *
 * @package SendGrid\Mail
 */
class PlainTextContent extends Content
{
    /**
     * Create a Content object with a plain text mime type
     *
     * @param string $value plain text formatted content
     */
    public function __construct($value)
    {
        parent::__construct(MimeType::TEXT, $value);
    }
}
