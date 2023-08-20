<?php

namespace Space48\BigcommerceApi\Requests\CustomerAttributeValues;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomersAttributeValuesDelete
 *
 * Deletes Customer Attribute Values. Deletes the attribute value from the customer.
 *
 * **Required
 * Query**
 * * id:in - ID of the *Customer Attribute Value*
 */
class CustomersAttributeValuesDelete extends Request
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
		return ['id:in' => $this->idIn];
	}
}
