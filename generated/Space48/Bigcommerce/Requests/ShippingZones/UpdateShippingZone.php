<?php

namespace Space48\Bigcommerce\Requests\ShippingZones;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateShippingZone
 *
 * Updates a *Shipping Zone*.
 *
 * **Required Fields**
 * * name
 *
 * **Read Only Fields**
 * * id
 */
class UpdateShippingZone extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/shipping/zones/{$this->id}";
	}


	/**
	 * @param int $id ID of the shipping zone.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
