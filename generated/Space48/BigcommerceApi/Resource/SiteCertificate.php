<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\SiteCertificate\GetSitesCertificates;
use Space48\BigcommerceApi\Requests\SiteCertificate\GetSitesIdCertificate;
use Space48\BigcommerceApi\Requests\SiteCertificate\PutSiteIdCertificate;
use Space48\BigcommerceApi\Resource;

class SiteCertificate extends Resource
{
	/**
	 * @param int $siteId
	 */
	public function getSitesIdCertificate(int $siteId): Response
	{
		return $this->connector->send(new GetSitesIdCertificate($siteId));
	}


	/**
	 * @param int $siteId
	 */
	public function putSiteIdCertificate(int $siteId): Response
	{
		return $this->connector->send(new PutSiteIdCertificate($siteId));
	}


	/**
	 * @param string $urlsIn Query certificates by one or more URLs
	 */
	public function getSitesCertificates(string $urlsIn): Response
	{
		return $this->connector->send(new GetSitesCertificates($urlsIn));
	}
}
