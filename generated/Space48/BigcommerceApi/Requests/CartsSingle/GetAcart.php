<?php

namespace Space48\BigcommerceApi\Requests\CartsSingle;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getACart
 *
 * Returns a storeʼs *Cart*.
 */
class GetAcart extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/carts/{$this->cartId}";
	}


	/**
	 * @param string $cartId The identifier of a specific cart.
	 * @param string $include * `redirect_urls`: Create a direct link to a cart. This can be used for the /POST request for carts.
	 * * `line_items.physical_items.options`: The cart returns an abbreviated result. Use this to return physical items product options. To return the extended cart object, use in a /POST request.
	 * * `line_items.digital_items.options`: The cart returns an abbreviated result. Use this to return digital items product options. To return the extended cart object, use in a /POST request.
	 * * `promotions.banners`: Returns a list of eligible banners.
	 */
	public function __construct(
		protected string $cartId,
		protected string $include,
	) {
	}


	public function defaultQuery(): array
	{
		return ['include' => $this->include];
	}
}
