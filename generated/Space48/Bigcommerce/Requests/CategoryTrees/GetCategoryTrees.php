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
	 * @param string $idIn
	 * @param string $channelIdIn
	 */
	public function __construct(
		protected string $idIn,
		protected string $channelIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['id:in' => $this->idIn, 'channel_id:in' => $this->channelIdIn];
	}
}
