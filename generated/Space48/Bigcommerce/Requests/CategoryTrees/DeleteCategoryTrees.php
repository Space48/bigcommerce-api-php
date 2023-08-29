<?php

namespace Space48\Bigcommerce\Requests\CategoryTrees;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteCategoryTrees
 *
 * Deletes *Category Trees*. A filter must be supplied with the endpoint.
 */
class DeleteCategoryTrees extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/trees";
	}


	/**
	 * @param string $idIn
	 */
	public function __construct(
		protected string $idIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['id:in' => $this->idIn];
	}
}
