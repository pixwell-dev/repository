<?php

namespace Bosnadev\Repositories\Events;

class RepositoryEntityCreated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "created";
}

