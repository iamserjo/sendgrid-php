<?php
/**
 * This helper defines the content mime types for a /mail/send API call
 */

namespace SendGrid7\Mail;

/**
 * This class is used to define the content mime types for the /mail/send API call
 *
 * @package SendGrid\Mail
 */
abstract class MimeType
{
    const HTML = "text/html";
    const TEXT = "text/plain";
}
