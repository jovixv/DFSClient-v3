<?php


namespace DFSClientV3\Models\BacklinksApi\Dictionaries;


use DFSClientV3\Entity\Custom\BackLinksPageIntersectionEntityMainTasksResultItemsPageIntersectionDictionaryItem;
use DFSClientV3\Entity\Custom\DictionaryEntity;

class PageIntersectionDictionary extends DictionaryEntity
{
	/**
	 * @param string $key
	 * @return array|null
	 */
    public function get(string $key): ?array
    {
        return parent::get($key); // TODO: Change the autogenerated stub
    }

    public function getAll(): array
    {
        return parent::getAll(); // TODO: Change the autogenerated stub
    }
}
