<?php

namespace Space48\BigcommerceApi\Requests\ChannelAssignments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteProductsChannelAssignments
 *
 * Delete products channel assignments. A filter must be supplied.
 */
class DeleteProductsChannelAssignments extends Request
{
	protected Method $method = Method::DELETE;


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
