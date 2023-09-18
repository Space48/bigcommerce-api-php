<?php

namespace Space48\Bigcommerce\Requests\CustomerAttributeValues;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delteCustomersAttributeValues
 *
 * Deletes Customer Attribute Values. Deletes the attribute value from the customer.
 *
 * **Required
 * Query**
 * * id:in - ID of the *Customer Attribute Value*
 */
class DelteCustomersAttributeValues extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customers/attribute-values";
	}


	/**
	 * @param array $idIn Filter items by ID.
	 * `id:in=4,5,6`
	 */
	public function __construct(
		protected array $idIn,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id:in' => $this->idIn]);
	}
}
