<?php

namespace Space48\BigcommerceApi\Requests\Categories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCategoryTreeByTreeId
 *
 * Returns a *Category Tree*.
 */
class GetCategoryTreeByTreeId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/trees/{$this->treeId}/categories";
	}


	/**
	 * @param string $treeId
	 * @param int $depth Max depth for a tree of categories.
	 */
	public function __construct(
		protected string $treeId,
		protected int $depth,
	) {
	}


	public function defaultQuery(): array
	{
		return ['depth' => $this->depth];
	}
}
