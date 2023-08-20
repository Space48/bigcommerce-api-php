<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\TimeZone\GetSystemTimestamp;
use Space48\BigcommerceApi\Resource;

class TimeZone extends Resource
{
	public function getSystemTimestamp(): Response
	{
		return $this->connector->send(new GetSystemTimestamp());
	}
}
