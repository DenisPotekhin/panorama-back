<?php

namespace App\src\Services\Geo\GeometryService;
use Exception;

class GeometryResolver
{
    public $geometryTypeCollection = [];
    private $geometryTypeService;

    public function __construct(Polygon $polygon,
                                LineString $linestring,
                                Point $point)
    {
        $this->geometryTypeCollection = collect([$polygon, $linestring, $point]);
    }

    /**
     * Находим нужную геометрию.
     * @param string $geometryType
     * @return Exception|mixed
     */
    public function resolveGeometry(string $geometryType)
    {
        foreach ($this->geometryTypeCollection as $singleGeometry) {
            if ($singleGeometry->type == $geometryType) {
                return $singleGeometry;
            }
        }
        return new Exception('there is no such geo element type');
    }

}
