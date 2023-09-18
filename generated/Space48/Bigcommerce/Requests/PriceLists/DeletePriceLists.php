<?php

namespace Space48\Bigcommerce\Requests\PriceLists;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deletePriceLists
 *
 * Deletes a *Price List*. All associated price records are also removed. Optional parameters can be
 * passed in.
 */
class DeletePriceLists extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/pricelists";
	}


	/**
	 * @param null|int $id Filter items by ID.
	 * @param null|string $name Filter items by name.
	 */
	public function __construct(
		protected ?int $id = null,
		protected ?string $name = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id' => $this->id, 'name' => $this->name]);
	}
}
