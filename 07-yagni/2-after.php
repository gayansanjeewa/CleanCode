<?php

interface ResourceRepositoryInterface
{
    /**
     * @return array|Resource[]
     */
    public function findAll();
}

final class GetResources
{
}

final class GetResourcesHandler
{
    /**
     * @var ResourceRepositoryInterface
     */
    private $resourceRepository;

    /**
     * @param ResourceRepositoryInterface $resourceRepository
     */
    public function __construct(ResourceRepositoryInterface $resourceRepository)
    {
        $this->resourceRepository = $resourceRepository;
    }

    /**
     * @param GetResources $query
     *
     * @return array|Resource[]
     */
    public function __invoke(GetResources $query)
    {
        return $this->resourceRepository->findAll();
    }
}

// Exposed to outside world as what was required
/** @var GetResourcesHandler $handler */
$handler = resolve(GetResourcesHandler::class);

$resourceListAsObjects = $handler->__invoke(new GetResources());