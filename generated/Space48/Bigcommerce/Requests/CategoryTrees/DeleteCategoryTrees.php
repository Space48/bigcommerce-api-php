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
	 * @param null|string $idIn
	 */
	public function __construct(
		protected ?string $idIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id:in' => $this->idIn]);
	}
}
