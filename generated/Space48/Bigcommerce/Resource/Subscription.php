<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Subscription\CreateAsubscription;
use Space48\Bigcommerce\Resource;

class Subscription extends Resource
{
	public function createAsubscription(): Response
	{
		return $this->connector->send(new CreateAsubscription());
	}
}
