<?php

namespace Space48\BigcommerceApi\Requests\ManageWebhooksBulk;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllWebhooks
 *
 * Returns a list of all webhooks on a store associated to the `client_id` used to authenticate the
 * request.
 *
 * *Note: BigCommerce determines the `client_id` from the `access_token`.*
 */
class GetAllWebhooks extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/hooks";
	}


	/**
	 * @param bool $isActive Enables user to filter for webhooks that are active or not.
	 * @param string $scope Enables user to filter for webhooks by scope.
	 * @param string $destination Enables user to filter for webhooks by destination.
	 */
	public function __construct(
		protected bool $isActive,
		protected string $scope,
		protected string $destination,
	) {
	}


	public function defaultQuery(): array
	{
		return ['is_active' => $this->isActive, 'scope' => $this->scope, 'destination' => $this->destination];
	}
}
