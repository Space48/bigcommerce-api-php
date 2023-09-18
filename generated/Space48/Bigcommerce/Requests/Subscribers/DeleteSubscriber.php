<?php

namespace Space48\Bigcommerce\Requests\Subscribers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteSubscriber
 *
 * Deletes a *Subscriber*.
 */
class DeleteSubscriber extends Request
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
