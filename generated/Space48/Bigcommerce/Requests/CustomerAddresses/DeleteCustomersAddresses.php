<?php

namespace Space48\Bigcommerce\Requests\CustomerAddresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteCustomersAddresses
 *
 * Deletes a Customer Address.
 *
 * **Required Query**
 * * id:in -- ID of the *Customer Address*
 */
class DeleteCustomersAddresses extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/customers/addresses";
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
