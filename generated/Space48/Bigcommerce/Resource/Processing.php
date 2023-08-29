<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Processing\PaymentsPost;
use Space48\Bigcommerce\Resource;

class Processing extends Resource
{
	public function paymentsPost(): Response
	{
		return $this->connector->send(new PaymentsPost());
	}
}
