<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\MethodsDeprecated\GetAllPaymentMethods;
use Space48\BigcommerceApi\Resource;

class MethodsDeprecated extends Resource
{
	public function getAllPaymentMethods(): Response
	{
		return $this->connector->send(new GetAllPaymentMethods());
	}
}
