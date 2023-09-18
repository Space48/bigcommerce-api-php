<?php

namespace Space48\Bigcommerce\Requests\GiftCertificates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getGiftCertificate
 *
 * Returns a single *Gift Certificate*.
 */
class GetGiftCertificate extends Request
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
