<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Subscription\CreateAsubscription;
use Space48\BigcommerceApi\Resource;

class Subscription extends Resource
{
	public function createAsubscription(): Response
	{
		return $this->connector->send(new CreateAsubscription());
	}
}
