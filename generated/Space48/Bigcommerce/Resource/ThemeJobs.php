<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ThemeJobs\GetJob;
use Space48\Bigcommerce\Resource;

class ThemeJobs extends Resource
{
	/**
	 * @param string $jobId The job identifier.
	 */
	public function getJob(string $jobId): Response
	{
		return $this->connector->send(new GetJob($jobId));
	}
}
