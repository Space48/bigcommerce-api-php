<?php

namespace Space48\BigcommerceApi\Requests\Experiment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-users-userId
 *
 * Retrieve the information of the user with the matching user ID.
 */
class GetUsersUserId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/users/{$this->userId}";
	}


	/**
	 * @param int $userId Id of an existing user.
	 */
	public function __construct(
		protected int $userId,
	) {
	}
}
