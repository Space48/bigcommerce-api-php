<?php

namespace Space48\BigcommerceApi\Requests\Subscribers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSubscriberById
 *
 * Deletes a *Subscriber*.
 */
class DeleteSubscriberById extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customers/subscribers/{$this->subscriberId}";
	}


	/**
	 * @param int $subscriberId The ID of the `Subscriber` requested.
	 */
	public function __construct(
		protected int $subscriberId,
	) {
	}
}
