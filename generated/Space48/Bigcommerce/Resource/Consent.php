<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Consent\PostConsent;
use Space48\Bigcommerce\Resource;

class Consent extends Resource
{
	public function postConsent(): Response
	{
		return $this->connector->send(new PostConsent());
	}
}
