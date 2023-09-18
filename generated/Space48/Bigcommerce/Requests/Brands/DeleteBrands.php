<?php

namespace Space48\Bigcommerce\Requests\Brands;

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
	 * @param null|string $name Filter items by name.
	 * @param null|string $pageTitle Filter items by page_title.
	 */
	public function __construct(
		protected ?string $name = null,
		protected ?string $pageTitle = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['name' => $this->name, 'page_title' => $this->pageTitle]);
	}
}
