<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\AbandonedCarts\GetAbandonedCarts;
use Space48\BigcommerceApi\Resource;

class AbandonedCarts extends Resource
{
	/**
	 * @param string $token Unique cart `UUID`.
	 *
	 * Unique cart `UUID` token that is generated for abandoned cart emails.
	 */
	public function getAbandonedCarts(string $token): Response
	{
		return $this->connector->send(new GetAbandonedCarts($token));
	}
}
