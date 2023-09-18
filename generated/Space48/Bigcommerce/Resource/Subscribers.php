<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Subscribers\CreateSubscriber;
use Space48\Bigcommerce\Requests\Subscribers\DeleteSubscriber;
use Space48\Bigcommerce\Requests\Subscribers\DeleteSubscribers;
use Space48\Bigcommerce\Requests\Subscribers\GetSubscriber;
use Space48\Bigcommerce\Requests\Subscribers\GetSubscribers;
use Space48\Bigcommerce\Requests\Subscribers\UpdateSubscriber;
use Space48\Bigcommerce\Resource;

class Subscribers extends Resource
{
	/**
	 * @param string $email Filter items by email.
	 * @param string $firstName Filter items by first_name.
	 * @param string $lastName Filter items by last_name.
	 * @param string $source Filter items by source.
	 * @param int $orderId Filter items by order_id.
	 * @param string $dateCreated Filter items by date_created.
	 * @param string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
	 * @param int $id Filter items by id.
	 */
	public function getSubscribers(
		?string $email,
		?string $firstName,
		?string $lastName,
		?string $source,
		?int $orderId,
		?string $dateCreated,
		?string $dateModified,
		?int $id,
	): Response
	{
		return $this->connector->send(new GetSubscribers($email, $firstName, $lastName, $source, $orderId, $dateCreated, $dateModified, $id));
	}


	public function createSubscriber(): Response
	{
		return $this->connector->send(new CreateSubscriber());
	}


	/**
	 * @param string $email Filter items by email.
	 * @param string $firstName Filter items by first_name.
	 * @param string $lastName Filter items by last_name.
	 * @param string $source Filter items by source.
	 * @param int $orderId Filter items by order_id.
	 * @param string $dateCreated Filter items by date_created.
	 * @param string $dateModified Filter items by date_modified. For example `v3/catalog/products?date_last_imported:min=2018-06-15`
	 */
	public function deleteSubscribers(
		?string $email,
		?string $firstName,
		?string $lastName,
		?string $source,
		?int $orderId,
		?string $dateCreated,
		?string $dateModified,
	): Response
	{
		return $this->connector->send(new DeleteSubscribers($email, $firstName, $lastName, $source, $orderId, $dateCreated, $dateModified));
	}


	/**
	 * @param int $subscriberId The ID of the `Subscriber` requested.
	 */
	public function getSubscriber(int $subscriberId): Response
	{
		return $this->connector->send(new GetSubscriber($subscriberId));
	}


	/**
	 * @param int $subscriberId The ID of the `Subscriber` requested.
	 */
	public function updateSubscriber(int $subscriberId): Response
	{
		return $this->connector->send(new UpdateSubscriber($subscriberId));
	}


	/**
	 * @param int $subscriberId The ID of the `Subscriber` requested.
	 */
	public function deleteSubscriber(int $subscriberId): Response
	{
		return $this->connector->send(new DeleteSubscriber($subscriberId));
	}
}
