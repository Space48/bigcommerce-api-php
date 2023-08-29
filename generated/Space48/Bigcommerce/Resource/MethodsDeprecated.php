<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\MethodsDeprecated\GetAllPaymentMethods;
use Space48\Bigcommerce\Resource;

class MethodsDeprecated extends Resource
{
	public function getAllPaymentMethods(): Response
	{
		return $this->connector->send(new GetAllPaymentMethods());
	}
}
