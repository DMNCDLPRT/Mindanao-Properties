<?php

namespace App\Livewire\Components;

use Livewire\Component;

class PropertyDetails extends Component
{
    public function render()
    {
        return view('livewire.components.property-details');
    }

    public function propertyDetailsById($id) {
        $data=[];
        $data['property'] = Property::where('id',$id)->first();
        $data['cities']  =City::where('id',$id)->get();
        $data['images'] = Image::where('id',$id)->get(); //improve select only required fields
    
        $data['property'] -> id ;
        $data['property'] -> categories ->pluck('id'); 
    
    
        $data['properties'] = Property::get();
    
        $data['categories'] = Category::parent()->select('id', 'slug')->with(['childrens' => function ($q) {
           $q->select('id', 'parent_id', 'slug');
           $q->with(['childrens' => function ($qq) {
               $qq->select('id', 'parent_id', 'slug');
           }]);
       }])->get();


       if(!$data['property']){
        return redirect()->route('dashboard');

       }
       return view('livewire.components.property-details', $data);

    }
}
