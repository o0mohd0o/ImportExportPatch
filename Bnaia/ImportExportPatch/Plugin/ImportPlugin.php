<?php

namespace Bnaia\ImportExportPatch\Plugin;

class ImportPlugin
{
    protected $resource;

    public function __construct(
        \Magento\Framework\App\ResourceConnection $resource
    ) {
        $this->resource = $resource;
    }

    public function afterImportSource(\Magento\ImportExport\Model\Import $subject, $result)
    {
        if ($result) {
            $connection = $this->resource->getConnection();
            $importDataTableName = $this->resource->getTableName('importexport_importdata');
            $importHistoryTableName = $this->resource->getTableName('import_history');

            $connection->truncateTable($importDataTableName);
            $connection->truncateTable($importHistoryTableName);
        }

        return $result;
    }
}
