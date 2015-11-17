<?php
/**
 * Created by PhpStorm.
 * User: throckt
 * Date: 9/16/2015
 * Time: 7:52 PM
 */

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    public function __construct(Product $product){
        $this->product = $product;
    }

    public function products() {
        $products = $this->product->all();
        return view("products.products")->with("products",$products);
    }

    public function getProductById($id) {
        try{
            $product = $this->product->findOrFail($id);
            return view("products.product")->with("product",$product);
        }
        catch(ModelNotFoundException $mnfe) {
            return view("products.productnotfound");
        }
    }

    public function welcome() {
        return view("products.welcome");
    }
}