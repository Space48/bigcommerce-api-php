<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\CustomerSettings\CustomerSettingsGet;
use Space48\BigcommerceApi\Requests\CustomerSettings\CustomerSettingsPut;
use Space48\BigcommerceApi\Resource;

class CustomerSettings extends Resource
{
	public function customerSettingsGet(): Response
	{
		return $this->connector->send(new CustomerSettingsGet());
	}


	public function customerSettingsPut(): Response
	{
		return $this->connector->send(new CustomerSettingsPut());
	}
}
