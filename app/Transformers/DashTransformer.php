<?php
namespace App\Transformers;
use League\Fractal\TransformerAbstract;
use App\Dashborde;
class DashTransformer extends TransformerAbstract
{
  public function transform(Dashborde $model)
  {
      return [
        'id'            => $model->id,
        'name'          => $model->name,
        'url'           => $model->url,
        'author'        => $model->author,
        'created_at'    => $model->created_at->format('Y-m-d H:i:s'),
        'updated_at'    => $model->updated_at->format('Y-m-d H:i:s')
      ];
  }
}