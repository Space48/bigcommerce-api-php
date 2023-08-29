<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\SystemLogs\GetSites;
use Space48\Bigcommerce\Resource;

class SystemLogs extends Resource
{
	/**
	 * @param string $type Query parameter that lets you filter the results by log type.
	 * @param string $typeNot Query parameter that lets you exclude a log type from the results.
	 * @param string $module Query parameter that lets you filter the results by module.
	 * @param string $moduleNot Query parameter that lets you exclude a log module from the results.
	 * @param int $severity Query parameter that lets you filter results by severity level, as an integer. The following values are possible: Success = 1, Notice = 2, Warning = 3, Error = 4
	 * @param int $severityMin Query parameter that lets you filter by minimum severity, as an integer.
	 * @param int $severityMax Query parameter that lets you filter by maximum severity, as an integer.
	 * @param string $idIn Query parameter that lets you filter by a list of log IDs, as a CSV. For example ?id:in=3,4,6
	 */
	public function getSites(
		string $type,
		string $typeNot,
		string $module,
		string $moduleNot,
		int $severity,
		int $severityMin,
		int $severityMax,
		string $idIn,
	): Response
	{
		return $this->connector->send(new GetSites($type, $typeNot, $module, $moduleNot, $severity, $severityMin, $severityMax, $idIn));
	}
}
