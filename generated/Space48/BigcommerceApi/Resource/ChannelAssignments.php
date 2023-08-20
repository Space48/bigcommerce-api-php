<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ChannelAssignments\CreateProductsChannelAssignments;
use Space48\BigcommerceApi\Requests\ChannelAssignments\DeleteProductsChannelAssignments;
use Space48\BigcommerceApi\Requests\ChannelAssignments\GetProductsChannelAssignments;
use Space48\BigcommerceApi\Resource;

class ChannelAssignments extends Resource
{
	/**
	 * @param string $productIdIn
	 * @param string $channelIdIn
	 */
	public function getProductsChannelAssignments(string $productIdIn, string $channelIdIn): Response
	{
		return $this->connector->send(new GetProductsChannelAssignments($productIdIn, $channelIdIn));
	}


	public function createProductsChannelAssignments(): Response
	{
		return $this->connector->send(new CreateProductsChannelAssignments());
	}


	/**
	 * @param string $productIdIn
	 * @param string $channelIdIn
	 */
	public function deleteProductsChannelAssignments(string $productIdIn, string $channelIdIn): Response
	{
		return $this->connector->send(new DeleteProductsChannelAssignments($productIdIn, $channelIdIn));
	}
}
