<?php

namespace Space48\Bigcommerce\Resource;

use Saloon\Contracts\Response;
use Space48\Bigcommerce\Requests\Experiment\CreateUser;
use Space48\Bigcommerce\Requests\Experiment\GetUser;
use Space48\Bigcommerce\Requests\Experiment\UpdateUser;
use Space48\Bigcommerce\Resource;

class Experiment extends Resource
{
	/**
	 * @param int $userId Id of an existing user.
	 */
	public function getUser(int $userId): Response
	{
		return $this->connector->send(new GetUser($userId));
	}


	/**
	 * @param int $userId Id of an existing user.
	 */
	public function updateUser(int $userId): Response
	{
		return $this->connector->send(new UpdateUser($userId));
	}


	public function createUser(): Response
	{
		return $this->connector->send(new CreateUser());
	}
}
