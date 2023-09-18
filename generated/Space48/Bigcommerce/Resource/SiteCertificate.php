<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\SiteCertificate\GetSiteCertificate;
use Space48\Bigcommerce\Requests\SiteCertificate\GetSitesCertificates;
use Space48\Bigcommerce\Requests\SiteCertificate\UpsertSiteCertificate;
use Space48\Bigcommerce\Resource;

class SiteCertificate extends Resource
{
	/**
	 * @param int $siteId
	 */
	public function getSiteCertificate(int $siteId): Response
	{
		return $this->connector->send(new GetSiteCertificate($siteId));
	}


	/**
	 * @param int $siteId
	 */
	public function upsertSiteCertificate(int $siteId): Response
	{
		return $this->connector->send(new UpsertSiteCertificate($siteId));
	}


	/**
	 * @param string $urlsIn Query certificates by one or more URLs
	 */
	public function getSitesCertificates(?string $urlsIn): Response
	{
		return $this->connector->send(new GetSitesCertificates($urlsIn));
	}
}
