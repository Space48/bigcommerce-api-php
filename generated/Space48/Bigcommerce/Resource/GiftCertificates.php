<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\GiftCertificates\CreateAgiftCertificate;
use Space48\Bigcommerce\Requests\GiftCertificates\DeleteAgiftCertificate;
use Space48\Bigcommerce\Requests\GiftCertificates\DeleteAllGiftCertificates;
use Space48\Bigcommerce\Requests\GiftCertificates\GetAgiftCertificate;
use Space48\Bigcommerce\Requests\GiftCertificates\GetAllGiftCertificates;
use Space48\Bigcommerce\Requests\GiftCertificates\UpdateAgiftCertificate;
use Space48\Bigcommerce\Resource;

class GiftCertificates extends Resource
{
	/**
	 * @param int $id ID of the gift certificate.
	 */
	public function getAgiftCertificate(int $id): Response
	{
		return $this->connector->send(new GetAgiftCertificate($id));
	}


	/**
	 * @param int $id ID of the gift certificate.
	 */
	public function updateAgiftCertificate(int $id): Response
	{
		return $this->connector->send(new UpdateAgiftCertificate($id));
	}


	/**
	 * @param int $id ID of the gift certificate.
	 */
	public function deleteAgiftCertificate(int $id): Response
	{
		return $this->connector->send(new DeleteAgiftCertificate($id));
	}


	/**
	 * @param int $minId
	 * @param int $maxId
	 * @param string $code
	 * @param int $orderId
	 * @param string $toName
	 * @param string $toEmail
	 * @param string $fromName
	 * @param string $fromEmail
	 */
	public function getAllGiftCertificates(
		int $minId,
		int $maxId,
		string $code,
		int $orderId,
		string $toName,
		string $toEmail,
		string $fromName,
		string $fromEmail,
	): Response
	{
		return $this->connector->send(new GetAllGiftCertificates($minId, $maxId, $code, $orderId, $toName, $toEmail, $fromName, $fromEmail));
	}


	public function createAgiftCertificate(): Response
	{
		return $this->connector->send(new CreateAgiftCertificate());
	}


	public function deleteAllGiftCertificates(): Response
	{
		return $this->connector->send(new DeleteAllGiftCertificates());
	}
}
