<?php

namespace MageSuite\ContentConstructorFrontend\Service;

/**
 * Following class resolves identities of entity that displays components in order for components to be cleared from
 * cache when entity is saved and component configuration might've been changed
 */
class EntityIdentitiesResolver
{
    protected array $resolvers;

    public function __construct(array $resolvers = [])
    {
        $this->resolvers = $resolvers;
    }

    public function getIdentities($actionName) {
        if(isset($this->resolvers[$actionName])) {
            return $this->resolvers[$actionName]->getIdentities();
        }

        return [];
    }
}
