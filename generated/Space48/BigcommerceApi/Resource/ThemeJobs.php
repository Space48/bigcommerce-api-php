<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\ThemeJobs\GetJob;
use Space48\BigcommerceApi\Resource;

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
