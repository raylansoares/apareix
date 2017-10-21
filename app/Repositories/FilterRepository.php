<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\File;


class FilterRepository
{
    public function filterResults($query, $filters)
    {
        //Filters
        foreach ($filters as $key => $filter) {
            if (sizeof($filter) == 1) {
                if ($key == 'lists') {
                    $filter[0] == 'Y' ? $query = $query->whereHas($key) : null;
                    $filter[0] == 'N' ? $query = $query->whereDoesntHave($key) : null;
                }else{
                    $query = $query->where($key, $filter[0]);
                }
            }elseif (sizeof($filter) > 1) {
                $query = $query->where(function($var) use ($filter, $key){
                    foreach ($filter as $count => $item){
                        if ($count == 0) {
                            if ($key == 'lists') {
                                $item == 'Y' ? $var->whereHas($key) : null;
                                $item == 'N' ? $var->whereDoesntHave($key) : null;
                            } elseif($key == 'birth'){
                                $var->where($key,'<=',$item);
                            } else{
                                $var->where($key, $item);
                            }
                        } else{
                            if ($key == 'lists') {
                                $item == 'Y' ? $var->orWhereHas($key) : null;
                                $item == 'N' ? $var->orWhereDoesntHave($key) : null;
                            } elseif($key == 'birth'){
                                $var->where($key,'>=',$item);
                            } else{
                                $var->orWhere($key, $item);
                            }
                        }
                    }
                });
            }
        }

        return $query->get();
    }

}