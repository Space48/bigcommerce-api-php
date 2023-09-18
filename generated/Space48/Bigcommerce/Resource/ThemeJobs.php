<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\ThemeJobs\GetStoreThemeJob;
use Space48\Bigcommerce\Resource;

class ThemeJobs extends Resource
{
	/**
	 * @param string $jobId The job identifier.
	 */
	public function getStoreThemeJob(string $jobId): Response
	{
		return $this->connector->send(new GetStoreThemeJob($jobId));
	}
}
