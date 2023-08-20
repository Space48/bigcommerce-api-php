<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Processing\PaymentsPost;
use Space48\BigcommerceApi\Resource;

class Processing extends Resource
{
	public function paymentsPost(): Response
	{
		return $this->connector->send(new PaymentsPost());
	}
}
