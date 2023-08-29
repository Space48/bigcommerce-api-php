<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\TimeZone\GetSystemTimestamp;
use Space48\Bigcommerce\Resource;

class TimeZone extends Resource
{
	public function getSystemTimestamp(): Response
	{
		return $this->connector->send(new GetSystemTimestamp());
	}
}
