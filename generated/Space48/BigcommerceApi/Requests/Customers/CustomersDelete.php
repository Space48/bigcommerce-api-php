<?php

namespace Space48\BigcommerceApi\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * CustomersDelete
 *
 * Deletes Customers.
 *
 * **Required Query**
 * * id:in -- ID of the customer
 *
 * **Notes**
 *
 * A query is required
 * to delete customers. If not provided, a 204 is returned, with no changes to the data.
 */
class CustomersDelete extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customers";
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
