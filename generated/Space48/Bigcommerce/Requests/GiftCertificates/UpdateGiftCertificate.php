<?php

namespace Space48\Bigcommerce\Requests\GiftCertificates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateGiftCertificate
 *
 * Updates a *Gift Certificate*.
 *
 * **Read Only Fields**
 * * id
 * * order_id
 */
class UpdateGiftCertificate extends Request
{
	protected Method $method = Method::PUT;


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
