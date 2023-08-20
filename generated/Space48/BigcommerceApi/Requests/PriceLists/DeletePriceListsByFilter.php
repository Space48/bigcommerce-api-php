<?php

namespace Space48\BigcommerceApi\Requests\PriceLists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePriceListsByFilter
 *
 * Deletes a *Price List*. All associated price records are also removed. Optional parameters can be
 * passed in.
 */
class DeletePriceListsByFilter extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/pricelists";
	}


	/**
	 * @param int $id Filter items by ID.
	 * @param string $name Filter items by name.
	 */
	public function __construct(
		protected int $id,
		protected string $name,
	) {
	}


	public function defaultQuery(): array
	{
		return ['id' => $this->id, 'name' => $this->name];
	}
}
