<?php

namespace Space48\BigcommerceApi\Requests\Brands;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteBrands
 *
 * By default, it deletes all *Brand* objects. A filter should be added to avoid deleting all *Brand*
 * objects in a store.
 */
class DeleteBrands extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/catalog/brands";
	}


	/**
	 * @param string $name Filter items by name.
	 * @param string $pageTitle Filter items by page_title.
	 */
	public function __construct(
		protected string $name,
		protected string $pageTitle,
	) {
	}


	public function defaultQuery(): array
	{
		return ['name' => $this->name, 'page_title' => $this->pageTitle];
	}
}
