<?php

namespace Space48\BigcommerceApi\Requests\GiftCertificates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAGiftCertificate
 *
 * Deletes a *Gift Certificate*.
 */
class DeleteAgiftCertificate extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/gift_certificates/{$this->id}";
	}


	/**
	 * @param int $id ID of the gift certificate.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
