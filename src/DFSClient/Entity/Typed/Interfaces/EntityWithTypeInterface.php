<?php

namespace DFSClientV3\Entity\Typed\Interfaces;

interface EntityWithTypeInterface
{
	public function getType(): ?string;
}
