<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ProductTaxProperties\DeleteProductTaxProperties;
use Space48\BigcommerceApi\Requests\ProductTaxProperties\GetProductTaxProperties;
use Space48\BigcommerceApi\Requests\ProductTaxProperties\UpdateProductTaxProperties;
use Space48\BigcommerceApi\Resource;

class ProductTaxProperties extends Resource
{
	/**
	 * @param string $productIdIn ID of product. To target multiple products, provide a comma-separated list of IDs such as `12,34,56`
	 */
	public function getProductTaxProperties(string $productIdIn): Response
	{
		return $this->connector->send(new GetProductTaxProperties($productIdIn));
	}


	public function updateProductTaxProperties(): Response
	{
		return $this->connector->send(new UpdateProductTaxProperties());
	}


	/**
	 * @param string $productIdIn ID of product. To target multiple products, provide a comma-separated list of IDs such as `12,34,56`
	 */
	public function deleteProductTaxProperties(string $productIdIn): Response
	{
		return $this->connector->send(new DeleteProductTaxProperties($productIdIn));
	}
}
