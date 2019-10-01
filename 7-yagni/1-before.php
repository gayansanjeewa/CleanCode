<?php

/*
 * Sample interface is only show here, the implementation is
 * with support for sorting and pagination
 */

interface ResourceRepositoryInterface
{

    /**
     * @param array         $criteria
     * @param Sort|null     $sort
     * @param Paginate|null $paginate
     *
     * @return array|Resource[]
     */
    public function findAll($criteria = [], Sort $sort = null, Paginate $paginate = null);

    // Assumes sorting is required                  - US states the invoker would handle the display
    // Assumes filtering by criteria is required    - US does not talk about filtering
    // Assumes pagination is required               - US states the resources are very limited
}

final class GetResources
{
    public $isJson; // US only needs a list of objects
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
     * @return array|Resource[]|string
     */
    public function __invoke(GetResources $query)
    {
        $resources = $this->resourceRepository->findAll();

        return $query->isJson
            ? json_encode($resources)
            : $resources;
    }
}

// Exposed to outside world as what was required
/** @var GetResourcesHandler $handler */
$handler = resolve(GetResourcesHandler::class);
$query = (new GetResources())->isJson = false;

$resourceListAsObjects = $handler->__invoke($query);