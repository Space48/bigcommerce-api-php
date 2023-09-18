<?php

namespace Space48\Bigcommerce\Requests\AbandonedCartEmails;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAbandonedCartEmailTemplate
 *
 * Delete Abandoned Cart Email template.
 */
class DeleteAbandonedCartEmailTemplate extends Request
{
	protected Method $method = Method::DELETE;


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
