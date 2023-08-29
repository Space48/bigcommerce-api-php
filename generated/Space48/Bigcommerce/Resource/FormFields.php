<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\FormFields\GetFormFields;
use Space48\Bigcommerce\Resource;

class FormFields extends Resource
{
	/**
	 * @param string $filter
	 */
	public function getFormFields(string $filter): Response
	{
		return $this->connector->send(new GetFormFields($filter));
	}
}
