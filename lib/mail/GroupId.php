<?php
/**
 * This helper builds the GroupId object for a /mail/send API call
 */

namespace SendGrid7\Mail;

/**
 * This class is used to construct a GroupId object for the /mail/send API call
 *
 * @package SendGrid\Mail
 */
class GroupId implements \JsonSerializable
{
    /** @var $group_id int The unsubscribe group to associate with this email */
    private $group_id;

	/**
	 * Optional constructor
	 *
	 * @param int|null $group_id The unsubscribe group to associate with this email
	 * @throws \SendGrid\Mail\TypeException
	 */
    public function __construct($group_id = null)
    {
        if (isset($group_id)) {
            $this->setGroupId($group_id);
        }
    }

    /**
     * Add the group id to a GroupId object
     *
     * @param int $group_id The unsubscribe group to associate with this email
     *
     * @throws \SendGrid\Mail\TypeException
     */
    public function setGroupId($group_id)
    {
        if (!is_int($group_id)) {
            throw new TypeException('$group_id must be of type int.');
        }
        $this->group_id = $group_id;
    }

    /**
     * Retrieve the group id from a GroupId object
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Return an array representing a GroupId object for the Twilio SendGrid API
     *
     * @return int
     */
    public function jsonSerialize()
    {
        return $this->getGroupId();
    }
}
