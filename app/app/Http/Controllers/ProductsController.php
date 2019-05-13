<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ProductsController
 * @package App\Http\Controllers
 */
class ProductsController extends Controller
{
	/**
	 * @return string
	 */
//	public function __invoke($any='Default'):string
//	{
//		return 'Product list, added params:'.$any;
//	}

private $products=[
	'1'=>'Product #1',
	'Product #2',
	'Product #3',
	'Product #4',
	'Product #5',
];

	/**
	 * @return JsonResponse
	 */
public function index():JsonResponse
{
	return response()->json($this->products);
}

	/**
	 * @param int $index
	 * @return JsonResponse
	 */
public function show(int $index):JsonResponse
{
//	dump($this->products[$index]);
	return response()->json($this->products[$index]);
}

	/**
	 * @return string
	 */
public function create(){
	return "Form for create new Product";
}

	/**
	 * @return string
	 */
public function store(){
	return "Was create new product";
}

	/**
	 * @param int $index
	 * @return string
	 */
public function edit(int $index){
	return "Form for edit product";
}

	/**
	 * @param int $index
	 * @return string
	 */
public function update(int $index){
	return "Was update current product";
}

public function destroy(int $index){
	return "Was delete current product";
}

}

