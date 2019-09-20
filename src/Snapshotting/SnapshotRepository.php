<?php

namespace EventSauce\EventSourcing\Snapshotting;

use EventSauce\EventSourcing\AggregateRootId;

interface SnapshotRepository
{
    public function persist(Snapshot $snapshot): void;
    public function retrieve(AggregateRootId $id): ?Snapshot;
}
