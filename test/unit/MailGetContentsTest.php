<?php

namespace SendGrid7\Tests\Unit;

use PHPUnit\Framework\TestCase;
use SendGrid7\Mail\Mail;
use SendGrid7\Mail\Content;
use SendGrid7\Mail\EmailAddress;
use SendGrid7\Mail\From;

/**
 * This class tests the getContents() function in SendGrid\Mail\Mail
 *
 * @package SendGrid\Tests\Unit
 */
class MailGetContentsTest extends TestCase
{
	/**
	 * This method tests that array from Mail getContents() returns with
	 * text/plain Content object first when Mail instantiated with text/html
	 * content before text/plain
	 *
	 * @return null
	 * @throws \SendGrid\Mail\TypeException
	 */
    public function testWillReturnPlainContentFirst()
    {
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("test@example.com", null);
        $email->setSubject("Hello World from the Twilio SendGrid PHP Library");
        $email->addTo("test@example.com", "Test Person");

        $email->addContent("text/html", "<p>some text here</p>");
        $email->addContent("text/plain", "some text here");

        $this->assertEquals('text/plain', $email->getContents()[0]->getType());
    }
}
