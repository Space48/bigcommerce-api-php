<?php

namespace Space48\Bigcommerce\Requests\Cart;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getACart
 *
 * Returns a *Cart*.
 *
 * > #### Note
 * > * Substitute your storefront domain for `yourstore.example.com`.
 * >
 * * The Send a Test Request feature is not currently supported for this endpoint.
 */
class GetAcart extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/carts";
	}


	/**
	 * @param string $include Include product options in specified line item types.
	 */
	public function __construct(
		protected string $include,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include' => $this->include];
	}
}
