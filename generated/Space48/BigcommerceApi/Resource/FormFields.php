<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\FormFields\GetFormFields;
use Space48\BigcommerceApi\Resource;

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
