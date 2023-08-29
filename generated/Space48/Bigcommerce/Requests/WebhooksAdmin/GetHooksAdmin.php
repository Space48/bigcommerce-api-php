<?php

namespace Space48\Bigcommerce\Requests\WebhooksAdmin;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getHooksAdmin
 *
 * List all notification emails, webhooks, and denylisted domains associated with the API account.
 */
class GetHooksAdmin extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/hooks/admin";
	}


	/**
	 * @param bool $isActive Enables user to filter for webhooks that are active or not.
	 */
	public function __construct(
		protected bool $isActive,
	) {
	}


	public function defaultQuery(): array
	{
		return ['is_active' => $this->isActive];
	}
}
