<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Banners\CreateBanner;
use Space48\Bigcommerce\Requests\Banners\DeleteBanner;
use Space48\Bigcommerce\Requests\Banners\DeleteBanners;
use Space48\Bigcommerce\Requests\Banners\GetBanner;
use Space48\Bigcommerce\Requests\Banners\GetBanners;
use Space48\Bigcommerce\Requests\Banners\GetBannersCount;
use Space48\Bigcommerce\Requests\Banners\UpdateBanner;
use Space48\Bigcommerce\Resource;

class Banners extends Resource
{
	/**
	 * @param int $minId Optional filter param `/api/v2/banners?min_id={value}`
	 * @param int $maxId Optional filter param `/api/v2/banners?max_id={value}`
	 */
	public function getBanners(?int $minId, ?int $maxId): Response
	{
		return $this->connector->send(new GetBanners($minId, $maxId));
	}


	public function createBanner(): Response
	{
		return $this->connector->send(new CreateBanner());
	}


	public function deleteBanners(): Response
	{
		return $this->connector->send(new DeleteBanners());
	}


	/**
	 * @param int $id ID of the banner.
	 */
	public function getBanner(int $id): Response
	{
		return $this->connector->send(new GetBanner($id));
	}


	/**
	 * @param int $id ID of the banner.
	 */
	public function updateBanner(int $id): Response
	{
		return $this->connector->send(new UpdateBanner($id));
	}


	/**
	 * @param int $id ID of the banner.
	 */
	public function deleteBanner(int $id): Response
	{
		return $this->connector->send(new DeleteBanner($id));
	}


	public function getBannersCount(): Response
	{
		return $this->connector->send(new GetBannersCount());
	}
}
