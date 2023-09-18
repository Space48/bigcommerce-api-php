<?php

namespace Space48\Bigcommerce\Requests\CategoryTrees;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCategoryTrees
 *
 * Returns a list of *Category Trees*.
 */
class GetCategoryTrees extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/trees";
	}


	/**
	 * @param null|string $idIn
	 * @param null|string $channelIdIn
	 */
	public function __construct(
		protected ?string $idIn = null,
		protected ?string $channelIdIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id:in' => $this->idIn, 'channel_id:in' => $this->channelIdIn]);
	}
}
