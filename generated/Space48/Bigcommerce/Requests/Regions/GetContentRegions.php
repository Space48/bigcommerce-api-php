<?php

namespace Space48\Bigcommerce\Requests\Regions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getContentRegions
 *
 * Returns a list of unique **Theme Regions** in a file.
 */
class GetContentRegions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/content/regions";
	}


	/**
	 * @param string $templateFile The template file, for example: `templateFile=pages/home`.
	 */
	public function __construct(
		protected string $templateFile,
	) {
	}


	public function defaultQuery(): array
	{
		return ['template_file' => $this->templateFile];
	}
}
