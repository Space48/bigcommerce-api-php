<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Redirects\CreateAredirect;
use Space48\BigcommerceApi\Requests\Redirects\DeleteAllRedirects;
use Space48\BigcommerceApi\Requests\Redirects\DeleteAredirect;
use Space48\BigcommerceApi\Requests\Redirects\GetAcountOfRedirects;
use Space48\BigcommerceApi\Requests\Redirects\GetAlistofRedirects;
use Space48\BigcommerceApi\Requests\Redirects\GetAredirectUrl;
use Space48\BigcommerceApi\Requests\Redirects\UpdateAredirectUrl;
use Space48\BigcommerceApi\Resource;

class Redirects extends Resource
{
	public function getAlistofRedirects(): Response
	{
		return $this->connector->send(new GetAlistofRedirects());
	}


	public function createAredirect(): Response
	{
		return $this->connector->send(new CreateAredirect());
	}


	public function deleteAllRedirects(): Response
	{
		return $this->connector->send(new DeleteAllRedirects());
	}


	/**
	 * @param int $id ID of the redirect URL.
	 */
	public function getAredirectUrl(int $id): Response
	{
		return $this->connector->send(new GetAredirectUrl($id));
	}


	/**
	 * @param int $id ID of the redirect URL.
	 */
	public function updateAredirectUrl(int $id): Response
	{
		return $this->connector->send(new UpdateAredirectUrl($id));
	}


	/**
	 * @param int $id ID of the redirect URL.
	 */
	public function deleteAredirect(int $id): Response
	{
		return $this->connector->send(new DeleteAredirect($id));
	}


	public function getAcountOfRedirects(): Response
	{
		return $this->connector->send(new GetAcountOfRedirects());
	}
}
