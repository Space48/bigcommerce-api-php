<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\WebhooksAdmin\GetHooksAdmin;
use Space48\BigcommerceApi\Requests\WebhooksAdmin\PutHooksAdmin;
use Space48\BigcommerceApi\Resource;

class WebhooksAdmin extends Resource
{
	/**
	 * @param bool $isActive Enables user to filter for webhooks that are active or not.
	 */
	public function getHooksAdmin(bool $isActive): Response
	{
		return $this->connector->send(new GetHooksAdmin($isActive));
	}


	public function putHooksAdmin(): Response
	{
		return $this->connector->send(new PutHooksAdmin());
	}
}