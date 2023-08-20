<?php

namespace Space48\BigcommerceApi\Requests\CustomerAttributes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomersAttributesDelete
 *
 * Deletes Customer Attributes from the store.
 *
 * **Required Query**
 * * id:in -- ID of the *Customer
 * Attribute*
 */
class CustomersAttributesDelete extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customers/attributes";
	}


	/**
	 * @param array $idIn Filter items by ID.
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
