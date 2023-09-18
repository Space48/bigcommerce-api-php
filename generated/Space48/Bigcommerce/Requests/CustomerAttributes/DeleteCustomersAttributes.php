<?php

namespace Space48\Bigcommerce\Requests\CustomerAttributes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomersAttributes
 *
 * Deletes Customer Attributes from the store.
 *
 * **Required Query**
 * * id:in -- ID of the *Customer
 * Attribute*
 */
class DeleteCustomersAttributes extends Request
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
		return array_filter(['id:in' => $this->idIn]);
	}
}
