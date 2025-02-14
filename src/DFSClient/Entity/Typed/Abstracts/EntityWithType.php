<?php

namespace DFSClientV3\Entity\Typed\Abstracts;

use DFSClientV3\Entity\Typed\Interfaces\EntityWithTypeInterface;

#[\AllowDynamicProperties]
abstract class EntityWithType implements EntityWithTypeInterface
{
	/**
	 * @var string $type
	 */
	public $type = null;

	public function getType(): string
	{
		return $this->type;
	}
}
