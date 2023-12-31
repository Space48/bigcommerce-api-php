<?php

namespace Space48\Bigcommerce\Requests\AbandonedCartEmails;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAbandonedCartEmailTemplate
 *
 * Get a single Abandoned Cart Email template.
 */
class GetAbandonedCartEmailTemplate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/marketing/abandoned-cart-emails/{$this->id}";
	}


	/**
	 * @param int $id ID of the Abandoned Cart Email template.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
