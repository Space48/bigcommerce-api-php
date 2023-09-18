<?php

namespace Space48\Bigcommerce\Requests\Categories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCategoryTree
 *
 * Returns a *Category Tree*.
 */
class GetCategoryTree extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/trees/{$this->treeId}/categories";
	}


	/**
	 * @param string $treeId
	 * @param null|int $depth Max depth for a tree of categories.
	 */
	public function __construct(
		protected string $treeId,
		protected ?int $depth = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['depth' => $this->depth]);
	}
}
