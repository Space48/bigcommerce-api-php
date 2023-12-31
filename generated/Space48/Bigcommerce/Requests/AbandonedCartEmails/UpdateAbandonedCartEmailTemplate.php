<?php

namespace Space48\Bigcommerce\Requests\AbandonedCartEmails;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateAbandonedCartEmailTemplate
 *
 * Update an email template.
 */
class UpdateAbandonedCartEmailTemplate extends Request
{
	protected Method $method = Method::PUT;


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
