<?php

namespace Space48\BigcommerceApi\Resource;

use Saloon\Contracts\Response;
use Space48\BigcommerceApi\Requests\Banners\CreateAbanner;
use Space48\BigcommerceApi\Requests\Banners\DeleteAbanner;
use Space48\BigcommerceApi\Requests\Banners\DeleteAllBanners;
use Space48\BigcommerceApi\Requests\Banners\GetAbanner;
use Space48\BigcommerceApi\Requests\Banners\GetAcountOfBanners;
use Space48\BigcommerceApi\Requests\Banners\GetAllBanners;
use Space48\BigcommerceApi\Requests\Banners\UpdateAbanner;
use Space48\BigcommerceApi\Resource;

class Banners extends Resource
{
	/**
	 * @param int $minId Optional filter param `/api/v2/banners?min_id={value}`
	 * @param int $maxId Optional filter param `/api/v2/banners?max_id={value}`
	 */
	public function getAllBanners(int $minId, int $maxId): Response
	{
		return $this->connector->send(new GetAllBanners($minId, $maxId));
	}


	public function createAbanner(): Response
	{
		return $this->connector->send(new CreateAbanner());
	}


	public function deleteAllBanners(): Response
	{
		return $this->connector->send(new DeleteAllBanners());
	}


	/**
	 * @param int $id ID of the banner.
	 */
	public function getAbanner(int $id): Response
	{
		return $this->connector->send(new GetAbanner($id));
	}


	/**
	 * @param int $id ID of the banner.
	 */
	public function updateAbanner(int $id): Response
	{
		return $this->connector->send(new UpdateAbanner($id));
	}


	/**
	 * @param int $id ID of the banner.
	 */
	public function deleteAbanner(int $id): Response
	{
		return $this->connector->send(new DeleteAbanner($id));
	}


	public function getAcountOfBanners(): Response
	{
		return $this->connector->send(new GetAcountOfBanners());
	}
}
