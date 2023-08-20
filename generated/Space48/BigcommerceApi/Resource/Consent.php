<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Consent\PostConsent;
use Space48\BigcommerceApi\Resource;

class Consent extends Resource
{
	public function postConsent(): Response
	{
		return $this->connector->send(new PostConsent());
	}
}
