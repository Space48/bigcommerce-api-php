<?php

namespace Space48\Bigcommerce\Requests\ManageWebhooksBulk;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getWebhooks
 *
 * Returns a list of all webhooks on a store associated to the `client_id` used to authenticate the
 * request.
 *
 * *Note: BigCommerce determines the `client_id` from the `access_token`.*
 */
class GetWebhooks extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/hooks";
	}


	/**
	 * @param null|bool $isActive Enables user to filter for webhooks that are active or not.
	 * @param null|string $scope Enables user to filter for webhooks by scope.
	 * @param null|string $destination Enables user to filter for webhooks by destination.
	 */
	public function __construct(
		protected ?bool $isActive = null,
		protected ?string $scope = null,
		protected ?string $destination = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['is_active' => $this->isActive, 'scope' => $this->scope, 'destination' => $this->destination]);
	}
}
