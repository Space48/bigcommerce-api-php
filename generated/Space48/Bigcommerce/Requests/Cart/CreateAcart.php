<?php

namespace Space48\Bigcommerce\Requests\Cart;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createACart
 *
 * Creates a *Cart*.
 *
 * > #### Note
 * > * Substitute your storefront domain for `yourstore.example.com`.
 * >
 * * The Send a Test Request feature is not currently supported for this endpoint.
 */
class CreateAcart extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


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
