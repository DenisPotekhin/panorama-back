<?php

namespace App\src\Services\Gis;
use App\src\Repositories\Gis\ElementRepository;

/**
 * Class ElementService
 * @package App\src\Services\Geo
 */
class ElementService
{
    protected $elementRepository;

    /**
     * ElementService constructor.
     * @param ElementRepository $elementRepository
     */
    public function __construct(ElementRepository $elementRepository)
    {
        $this->elementRepository = $elementRepository;
    }

    /**
     * Создать новый элемент слоя.
     * @param $data
     * @return \App\src\Models\Element
     */
    public function create($data)
    {
        return $this->elementRepository->create($data);
    }

    /**
     * Сохранить изменения в элементе
     * @param $id
     * @param $data
     * @return \App\src\Models\Element|mixed
     */
    public function update($id, $data)
    {
        return $this->elementRepository->update($id, $data);
    }

    /**
     * Удалить элемент.
     * @param $elementId
     * @return array
     * @throws \Exception
     */
    public function delete($id)
    {
        return $this->elementRepository->delete($id);
    }

}
