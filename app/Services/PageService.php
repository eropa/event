<?php

namespace App\Services;

use App\Models\Page;
use App\Http\Requests\UpdatePage;

class PageService{
    /**
     * Записываем значение
     * @param array $arra
     */
    public function create(array $array){
        // экземпляр класса
        $model=new Page();
        // добовляем данные
        $model->title=$array['title'];
        $model->name=$array['name'];
        $model->url=$array['url'];
        $model->htmlpage=$array['htmlpage'];
        // сохроняем
        $model->save();
    }

    public function update(UpdatePage $request,Page $page){
        //dump($request->validated());

        $page->name=$request->input('name');
        $page->save();

    }
}
