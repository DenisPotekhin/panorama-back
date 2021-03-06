<?php

namespace App\src\Repositories\Manager\GeometryRepository;
use App\src\Models\LineString;

/**
 * Class LinestringRepository
 * @package App\src\Repositories\Manager\GeometryRepository
 */
class LinestringRepository
{
    protected $linestring;

    /**
     * LinestringRepository constructor.
     * @param $linestring
     */
    public function __construct(LineString $linestring)
    {
        $this->linestring = $linestring;
    }

    /**
     * Создать новую лини.
     * @param $data
     * @return LineString
     */
    public function create($data): LineString
    {
        $record = $this->linestring->create($data);
        return $record;
    }

    /**
     * Обновить свойства линии.
     * @param int $id
     * @param array $data
     * @return LineString
     */
    public function update(int $id, $data = []): LineString
    {
        $record = $this->linestring::find($id);
        $record->title = $data['title'];
        $record->description = $data['description'];
        $record->address_id = $data['address_id'];
        $record->save();
        return $record;
    }

    /**
     * Удалить элемент.
     * @param $id
     * @return array
     */
    public function delete($id)
    {
        $record = $this->linestring::find($id);
        $record->delete();
        return ['id' => $id];
    }

}
