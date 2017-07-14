<?php

namespace Bosnadev\Repositories\Events;

class RepositoryEntityUpdated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "updated";
}
