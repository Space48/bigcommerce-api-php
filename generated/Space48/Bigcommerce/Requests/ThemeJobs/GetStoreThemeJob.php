<?php

namespace Space48\Bigcommerce\Requests\ThemeJobs;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getStoreThemeJob
 *
 * Returns a theme *Job*. When the job is complete, the results array provides a generated link to
 * access the theme. The link is active for 60 seconds.
 */
class GetStoreThemeJob extends Request
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
