<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\GiftCertificates\CreateGiftCertificate;
use Space48\Bigcommerce\Requests\GiftCertificates\DeleteGiftCertificate;
use Space48\Bigcommerce\Requests\GiftCertificates\DeleteGiftCertificates;
use Space48\Bigcommerce\Requests\GiftCertificates\GetGiftCertificate;
use Space48\Bigcommerce\Requests\GiftCertificates\GetGiftCertificates;
use Space48\Bigcommerce\Requests\GiftCertificates\UpdateGiftCertificate;
use Space48\Bigcommerce\Resource;

class GiftCertificates extends Resource
{
	/**
	 * @param int $id ID of the gift certificate.
	 */
	public function getGiftCertificate(int $id): Response
	{
		return $this->connector->send(new GetGiftCertificate($id));
	}


	/**
	 * @param int $id ID of the gift certificate.
	 */
	public function updateGiftCertificate(int $id): Response
	{
		return $this->connector->send(new UpdateGiftCertificate($id));
	}


	/**
	 * @param int $id ID of the gift certificate.
	 */
	public function deleteGiftCertificate(int $id): Response
	{
		return $this->connector->send(new DeleteGiftCertificate($id));
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
	public function getGiftCertificates(
		?int $minId,
		?int $maxId,
		?string $code,
		?int $orderId,
		?string $toName,
		?string $toEmail,
		?string $fromName,
		?string $fromEmail,
	): Response
	{
		return $this->connector->send(new GetGiftCertificates($minId, $maxId, $code, $orderId, $toName, $toEmail, $fromName, $fromEmail));
	}


	public function createGiftCertificate(): Response
	{
		return $this->connector->send(new CreateGiftCertificate());
	}


	public function deleteGiftCertificates(): Response
	{
		return $this->connector->send(new DeleteGiftCertificates());
	}
}
