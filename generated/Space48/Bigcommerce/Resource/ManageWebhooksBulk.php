<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ManageWebhooksBulk\CreateWebhooks;
use Space48\Bigcommerce\Requests\ManageWebhooksBulk\GetAllWebhooks;
use Space48\Bigcommerce\Resource;

class ManageWebhooksBulk extends Resource
{
	/**
	 * @param bool $isActive Enables user to filter for webhooks that are active or not.
	 * @param string $scope Enables user to filter for webhooks by scope.
	 * @param string $destination Enables user to filter for webhooks by destination.
	 */
	public function getAllWebhooks(bool $isActive, string $scope, string $destination): Response
	{
		return $this->connector->send(new GetAllWebhooks($isActive, $scope, $destination));
	}


	public function createWebhooks(): Response
	{
		return $this->connector->send(new CreateWebhooks());
	}
}
