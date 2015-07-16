<?php
namespace Zero1\ContactFormPlus\Model;

/**
 * Class Contact
 * @package Zero1\ContactFormPlus\Model
 * @method int getContactId()
 * @method ContactInterface setContactId($contactId)
 * @method int getStoreId()
 * @method ContactInterface setStoreId($storeId)
 * @method string getName()
 * @method ContactInterface setName($name)
 * @method string getEmail()
 * @method ContactInterface setEmail($email)
 * @method string getTelephone()
 * @method ContactInterface setTelephone($telephone)
 * @method string getComment()
 * @method ContactInterface setComment($comment)
 * @method int getCreatedAt()
 * @method ContactInterface setCreatedAt($createdAt)
 * @method int getUpdatedAt()
 * @method ContactInterface setUpdatedAt($updatedAt)
 * @method int getStatus()
 * @method ContactInterface setStatus($status)
 * @method string getResolutionComment()
 * @method ContactInterface setResolutionComment($resolutionComment)
 */
class Contact implements ContactInterface
{
	const STATUS_PENDING = 0;
	const STATUS_IN_PROGRESS = 1;
	const STATUS_CLOSED = 2;

	/**
	 * @return bool
	 */
	public function isPending()
	{
		return ($this->getStatus() == self::STATUS_PENDING);
	}

	/**
	 * @return bool
	 */
	public function isInProgress()
	{
		return ($this->getStatus() == self::STATUS_IN_PROGRESS);
	}

	/**
	 * @return bool
	 */
	public function isClosed()
	{
		return ($this->getStatus() == self::STATUS_CLOSED);
	}
}