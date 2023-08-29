<?php

namespace Space48\Bigcommerce\Requests\ChannelAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetProductsChannelAssignments
 *
 * Returns a list of products channel assignments.
 */
class GetProductsChannelAssignments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/catalog/products/channel-assignments";
	}


	/**
	 * @param string $productIdIn
	 * @param string $channelIdIn
	 */
	public function __construct(
		protected string $productIdIn,
		protected string $channelIdIn,
	) {
	}


	public function defaultQuery(): array
	{
		return ['product_id:in' => $this->productIdIn, 'channel_id:in' => $this->channelIdIn];
	}
}