<?php

namespace Space48\BigcommerceApi\Requests\MethodsDeprecated;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getAllPaymentMethods
 *
 * Gets the list of enabled payment methods. Default sorting is by payment method, alphabetically from
 * A to Z.
 *
 * > #### Note
 * > Avoid using this API operation if possible. It is not supported; therefore,
 * all enabled providers may not appear.
 */
class GetAllPaymentMethods extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/payments/methods";
	}


	public function __construct()
	{
	}


	public function defaultQuery(): array
	{
		return [];
	}
}
