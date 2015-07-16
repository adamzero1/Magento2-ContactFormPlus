<?php
namespace Zero1\ContactFormPlus\Model;

interface ContactInterface
{
	/**
	 * @return int|null
	 */
	public function getContactId();

	/**
	 * @param int $contactId
	 * @return ContactInterface
	 */
	public function setContactId($contactId);

	/**
	 * @return int
	 */
	public function getStoreId();

	/**
	 * @param int $storeId
	 * @return ContactInterface
	 */
	public function setStoreId($storeId);

	/**
	 * @return string
	 */
	public function getName();

	/**
	 * @param string $name
	 * @return ContactInterface
	 */
	public function setName($name);

	/**
	 * @return string
	 */
	public function getEmail();

	/**
	 * @param string $email
	 * @return ContactInterface
	 */
	public function setEmail($email);

	/**
	 * @param string $telephone
	 * @return ContactInterface
	 */
	public function setTelephone($telephone);

	/**
	 * @return string
	 */
	public function getTelephone();

	/**
	 * @return string
	 */
	public function getComment();

	/**
	 * @param string $comment
	 * @return ContactInterface
	 */
	public function setComment($comment);

	/**
	 * @return int
	 */
	public function getCreatedAt();

	/**
	 * @param int $createdAt
	 * @return ContactInterface
	 */
	public function setCreatedAt($createdAt);

	/**
	 * @return int
	 */
	public function getUpdatedAt();

	/**
	 * @param int $updatedAt
	 * @return ContactInterface
	 */
	public function setUpdatedAt($updatedAt);

	/**
	 * @return int
	 */
	public function getStatus();

	/**
	 * @param int $status
	 * @return ContactInterface
	 */
	public function setStatus($status);

	/**
	 * @return bool
	 */
	public function isPending();

	/**
	 * @return bool
	 */
	public function isInProgress();

	/**
	 * @return bool
	 */
	public function isClosed();

	/**
	 * @return string
	 */
	public function getResolutionComment();

	/**
	 * @param string $resolutionComment
	 * @return ContactInterface
	 */
	public function setResolutionComment($resolutionComment);
}