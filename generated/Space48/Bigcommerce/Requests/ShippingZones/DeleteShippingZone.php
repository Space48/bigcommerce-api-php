<?php

namespace Space48\Bigcommerce\Requests\ShippingZones;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteShippingZone
 *
 * Deletes a *Shipping Zone*.
 */
class DeleteShippingZone extends Request
{
	protected Method $method = Method::DELETE;


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
