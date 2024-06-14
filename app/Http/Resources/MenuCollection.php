<?php

namespace App\Http\Resources;

use App\Interfaces\ResourceCollectionInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MenuCollection extends ResourceCollection implements ResourceCollectionInterface
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = $this->collection->transform(function ($menu) {
            return $this->transformCollection($menu);
        });

        return $data->toArray();
    }

    public function transformCollection($collection): array
    {
        $appUrl = env('APP_URL') . '/';

        return [
            'path' => $collection->path,
            'endpointPath' => $appUrl . $collection->path,
            'icon' => $collection->icon,
            'label' => $collection->label,
            'subMenus' => $collection->children
        ];
    }
}
