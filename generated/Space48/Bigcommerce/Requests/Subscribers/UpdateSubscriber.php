<?php

namespace Space48\Bigcommerce\Requests\Subscribers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateSubscriber
 *
 * Updates a *Subscriber*.
 *
 * **Read Only Fields**
 * * id
 */
class UpdateSubscriber extends Request
{
	protected Method $method = Method::PUT;


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
