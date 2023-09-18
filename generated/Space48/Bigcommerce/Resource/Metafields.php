<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Metafields\CreateCartMetafield;
use Space48\Bigcommerce\Requests\Metafields\DeleteCartMetafield;
use Space48\Bigcommerce\Requests\Metafields\GetAllCartMetafields;
use Space48\Bigcommerce\Requests\Metafields\GetCartMetafield;
use Space48\Bigcommerce\Requests\Metafields\UpdateCartMetafield;
use Space48\Bigcommerce\Resource;

class Metafields extends Resource
{
	/**
	 * @param string $cartId The ID of the `Cart` to which the transactions belong.
	 * @param string $key Filter based on a metafieldʼs key.
	 * @param string $namespace Filter based on a metafieldʼs key.
	 * @param string $direction Sort direction. Acceptable values are: `asc`, `desc`.
	 */
	public function getAllCartMetafields(string $cartId, ?string $key, ?string $namespace, ?string $direction): Response
	{
		return $this->connector->send(new GetAllCartMetafields($cartId, $key, $namespace, $direction));
	}


	/**
	 * @param string $cartId The ID of the `Cart` to which the transactions belong.
	 */
	public function createCartMetafield(string $cartId): Response
	{
		return $this->connector->send(new CreateCartMetafield($cartId));
	}


	/**
	 * @param string $cartId The ID of the `Cart` to which the transactions belong.
	 * @param int $metafieldId The unique ID of the subject `Metafield`.
	 * @param string $key Filter based on a metafieldʼs key.
	 * @param string $namespace Filter based on a metafieldʼs key.
	 * @param string $direction Sort direction. Acceptable values are: `asc`, `desc`.
	 */
	public function getCartMetafield(
		string $cartId,
		int $metafieldId,
		?string $key,
		?string $namespace,
		?string $direction,
	): Response
	{
		return $this->connector->send(new GetCartMetafield($cartId, $metafieldId, $key, $namespace, $direction));
	}


	/**
	 * @param string $cartId The ID of the `Cart` to which the transactions belong.
	 * @param int $metafieldId The unique ID of the subject `Metafield`.
	 */
	public function updateCartMetafield(string $cartId, int $metafieldId): Response
	{
		return $this->connector->send(new UpdateCartMetafield($cartId, $metafieldId));
	}


	/**
	 * @param string $cartId The ID of the `Cart` to which the transactions belong.
	 * @param int $metafieldId The unique ID of the subject `Metafield`.
	 */
	public function deleteCartMetafield(string $cartId, int $metafieldId): Response
	{
		return $this->connector->send(new DeleteCartMetafield($cartId, $metafieldId));
	}
}
