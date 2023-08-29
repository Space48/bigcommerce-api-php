<?php

namespace Space48\Bigcommerce\Requests\GiftCertificates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAGiftCertificate
 *
 * Returns a single *Gift Certificate*.
 */
class GetAgiftCertificate extends Request
{
	protected Method $method = Method::GET;


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
