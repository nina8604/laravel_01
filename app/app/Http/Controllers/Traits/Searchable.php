<?php
namespace App\Http\Traits;

trait Searchable{
    public function search($query, $request){
		if ($request->has('search')){
			$query->whereName($request->search);
		}
		return $query;
    }
}