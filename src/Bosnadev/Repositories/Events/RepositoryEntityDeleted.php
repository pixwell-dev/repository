<?php

namespace Bosnadev\Repositories\Events;

class RepositoryEntityDeleted extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "deleted";
}
