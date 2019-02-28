<?php namespace GeneaLabs\LaravelModelCaching\Traits;

trait CachePrefixing
{
    protected function getCachePrefix($connection) : string
    {
        return "genealabs:laravel-model-caching:"
            . $this->getDatabaseConnectionName($connection) . ":"
            . $this->getDatabaseName($connection) . ":"
            . (config("laravel-model-caching.cache-prefix")
                ? config("laravel-model-caching.cache-prefix", "") . ":"
                : "");
    }

    protected function getDatabaseConnectionName($connection) : string
    {
        return $connection->getName();
    }

    protected function getDatabaseName($connection) : string
    {
        return $connection->getDatabaseName();
    }
}
