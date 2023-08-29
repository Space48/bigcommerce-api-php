<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Experiment\GetUsersUserId;
use Space48\Bigcommerce\Requests\Experiment\PatchUsersUserId;
use Space48\Bigcommerce\Requests\Experiment\PostUser;
use Space48\Bigcommerce\Resource;

class Experiment extends Resource
{
	/**
	 * @param int $userId Id of an existing user.
	 */
	public function getUsersUserId(int $userId): Response
	{
		return $this->connector->send(new GetUsersUserId($userId));
	}


	/**
	 * @param int $userId Id of an existing user.
	 */
	public function patchUsersUserId(int $userId): Response
	{
		return $this->connector->send(new PatchUsersUserId($userId));
	}


	public function postUser(): Response
	{
		return $this->connector->send(new PostUser());
	}
}
