<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\CustomerSettings\CustomerSettingsGet;
use Space48\Bigcommerce\Requests\CustomerSettings\CustomerSettingsPut;
use Space48\Bigcommerce\Resource;

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
