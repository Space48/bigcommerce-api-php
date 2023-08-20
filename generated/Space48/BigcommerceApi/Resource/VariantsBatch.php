<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\VariantsBatch\GetVariants;
use Space48\BigcommerceApi\Requests\VariantsBatch\UpdateVariantsBatch;
use Space48\BigcommerceApi\Resource;

class VariantsBatch extends Resource
{
	/**
	 * @param int $id Filter items by ID.
	 * @param string $sku Filter items by SKU.
	 * @param string $upc Filter items by UPC.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 * @param string $productId A comma-separated list of IDs of products whose variants were requested. For example:`?product_id=:id``?product_id:in=77,80,81`
	 */
	public function getVariants(
		int $id,
		string $sku,
		string $upc,
		string $includeFields,
		string $excludeFields,
		string $productId,
	): Response
	{
		return $this->connector->send(new GetVariants($id, $sku, $upc, $includeFields, $excludeFields, $productId));
	}


	public function updateVariantsBatch(): Response
	{
		return $this->connector->send(new UpdateVariantsBatch());
	}
}
