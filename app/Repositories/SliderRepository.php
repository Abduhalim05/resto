<?php

namespace App\Repositories;
use App\Models\Slider;
use App\Repositories\Interfaces\SliderRepositoryInterface;

class SliderRepository implements SliderRepositoryInterface
{

    public function getAll()
    {
       return Slider::all();
    }

    public function store($request){
        $data=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->image;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/sliders/', $image_name);
            $data['image']=$image_name;
        }

        Slider::create($data);
        return true;
    }
    public function findOne($id){
        return Slider::findOrFail($id);
    }
    public function update($request, $id){
        $post=$this->findOne($id);

        $data=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->image;
            $image_name=time().$file->getClientOriginalName();
            $file->move('admin/images/sliders/', $image_name);
            $data['image']=$image_name;
        }

        $post->update($data);
    }
    public function delete($id){
        return Slider::destroy($id);
    }
}


