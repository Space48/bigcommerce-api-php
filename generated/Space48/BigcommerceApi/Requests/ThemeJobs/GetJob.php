<?php

namespace Space48\BigcommerceApi\Requests\ThemeJobs;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getJob
 *
 * Returns a theme *Job*. If job is completed, the result is included in the response.
 */
class GetJob extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/themes/jobs/{$this->jobId}";
	}


	/**
	 * @param string $jobId The job identifier.
	 */
	public function __construct(
		protected string $jobId,
	) {
	}
}
