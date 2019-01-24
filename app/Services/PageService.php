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

    /**
     * @param Page $page
     * @param UpdatePage $request
     */
    public function update(Page $page,UpdatePage $request){
        // обновляем значние
        $page->name=$request->input('name');
        $page->title=$request->input('title');
        $page->url=$request->input('url');
        $page->htmlpage=$request->input('htmlpage');
        // сохроняем значение
        $page->save();
    }

    /**
     *
     * @param Page $page
     * @throws \Exception
     */
    public function destroy(Page $page){
        //удоляем
        $page->delete();
    }

}
