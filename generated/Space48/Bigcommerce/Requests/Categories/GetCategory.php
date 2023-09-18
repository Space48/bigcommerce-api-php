<?php

namespace Space48\Bigcommerce\Requests\Categories;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCategory
 *
 * Returns a single *Category*. Optional parameters can be passed in.
 */
class GetCategory extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/categories/{$this->categoryId}";
	}


	/**
	 * @param int $categoryId The ID of the `Category` to which the resource belongs.
	 * @param null|string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param null|string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function __construct(
		protected int $categoryId,
		protected ?string $includeFields = null,
		protected ?string $excludeFields = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['include_fields' => $this->includeFields, 'exclude_fields' => $this->excludeFields]);
	}
}
