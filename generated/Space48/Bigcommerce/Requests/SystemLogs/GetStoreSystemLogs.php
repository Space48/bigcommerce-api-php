<?php

namespace Space48\Bigcommerce\Requests\SystemLogs;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getStoreSystemLogs
 *
 * Get system logs
 */
class GetStoreSystemLogs extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/store/systemlogs";
	}


	/**
	 * @param null|string $type Query parameter that lets you filter the results by log type.
	 * @param null|string $typeNot Query parameter that lets you exclude a log type from the results.
	 * @param null|string $module Query parameter that lets you filter the results by module.
	 * @param null|string $moduleNot Query parameter that lets you exclude a log module from the results.
	 * @param null|int $severity Query parameter that lets you filter results by severity level, as an integer. The following values are possible: Success = 1, Notice = 2, Warning = 3, Error = 4
	 * @param null|int $severityMin Query parameter that lets you filter by minimum severity, as an integer.
	 * @param null|int $severityMax Query parameter that lets you filter by maximum severity, as an integer.
	 * @param null|string $idIn Query parameter that lets you filter by a list of log IDs, as a CSV. For example ?id:in=3,4,6
	 */
	public function __construct(
		protected ?string $type = null,
		protected ?string $typeNot = null,
		protected ?string $module = null,
		protected ?string $moduleNot = null,
		protected ?int $severity = null,
		protected ?int $severityMin = null,
		protected ?int $severityMax = null,
		protected ?string $idIn = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'type' => $this->type,
			'type:not' => $this->typeNot,
			'module' => $this->module,
			'module:not' => $this->moduleNot,
			'severity' => $this->severity,
			'severity:min' => $this->severityMin,
			'severity:max' => $this->severityMax,
			'id:in' => $this->idIn,
		]);
	}
}
