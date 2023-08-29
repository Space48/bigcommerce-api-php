<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Reviews\CreateProductReview;
use Space48\Bigcommerce\Requests\Reviews\DeleteProductReview;
use Space48\Bigcommerce\Requests\Reviews\GetProductReviewById;
use Space48\Bigcommerce\Requests\Reviews\GetProductReviews;
use Space48\Bigcommerce\Requests\Reviews\UpdateProductReview;
use Space48\Bigcommerce\Resource;

class Reviews extends Resource
{
	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 * @param int $status Filter items by status. `1` for approved, `0` for pending.
	 */
	public function getProductReviews(
		int $productId,
		string $includeFields,
		string $excludeFields,
		int $status,
	): Response
	{
		return $this->connector->send(new GetProductReviews($productId, $includeFields, $excludeFields, $status));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 */
	public function createProductReview(int $productId): Response
	{
		return $this->connector->send(new CreateProductReview($productId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $reviewId The ID of the `review` that is being operated on.
	 * @param int $reviewId The ID of the `review` that is being operated on.
	 * @param string $includeFields Fields to include, in a comma-separated list. The ID and the specified fields will be returned.
	 * @param string $excludeFields Fields to exclude, in a comma-separated list. The specified fields will be excluded from a response. The ID cannot be excluded.
	 */
	public function getProductReviewById(
		int $productId,
		int $reviewId,
		string $includeFields,
		string $excludeFields,
	): Response
	{
		return $this->connector->send(new GetProductReviewById($productId, $reviewId, $reviewId, $includeFields, $excludeFields));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $reviewId The ID of the `review` that is being operated on.
	 */
	public function updateProductReview(int $productId, int $reviewId): Response
	{
		return $this->connector->send(new UpdateProductReview($productId, $reviewId));
	}


	/**
	 * @param int $productId The ID of the `Product` to which the resource belongs.
	 * @param int $reviewId The ID of the `review` that is being operated on.
	 * @param int $reviewId The ID of the `review` that is being operated on.
	 */
	public function deleteProductReview(int $productId, int $reviewId): Response
	{
		return $this->connector->send(new DeleteProductReview($productId, $reviewId, $reviewId));
	}
}
