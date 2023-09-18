<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Images\CreateBrandImage;
use Space48\Bigcommerce\Requests\Images\DeleteBrandImage;
use Space48\Bigcommerce\Resource;

class Images extends Resource
{
	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 */
	public function createBrandImage(int $brandId): Response
	{
		return $this->connector->send(new CreateBrandImage($brandId));
	}


	/**
	 * @param int $brandId The ID of the `Brand` to which the resource belongs.
	 */
	public function deleteBrandImage(int $brandId): Response
	{
		return $this->connector->send(new DeleteBrandImage($brandId));
	}
}
