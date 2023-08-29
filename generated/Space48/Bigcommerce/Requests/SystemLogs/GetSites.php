<?php

namespace Space48\Bigcommerce\Requests\SystemLogs;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-sites
 *
 * Get system logs
 */
class GetSites extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/store/systemlogs";
	}


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
	public function __construct(
		protected string $type,
		protected string $typeNot,
		protected string $module,
		protected string $moduleNot,
		protected int $severity,
		protected int $severityMin,
		protected int $severityMax,
		protected string $idIn,
	) {
	}


	public function defaultQuery(): array
	{
		return [
			'type' => $this->type,
			'type:not' => $this->typeNot,
			'module' => $this->module,
			'module:not' => $this->moduleNot,
			'severity' => $this->severity,
			'severity:min' => $this->severityMin,
			'severity:max' => $this->severityMax,
			'id:in' => $this->idIn,
		];
	}
}
