<?php

namespace App\Traits;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use DB;

trait Utils
{

    /**
     * This will return products by colors
     */
    public function getProductsByColor($user_id, $sel_color)
    {
        $query = Product::where('is_offers', '=', 0)
            ->where('current_stock', '>', 0);


        $query = $query->join('colors', 'colors.id', 'products.color_id')
            ->where('color_id', $sel_color)
            ->select('products.*', 'colors.color_name');


        return $query;
    }

    public function getProductsBySort($sort_by)
    {
        $query = Product::where('is_offers', '=', 0)
            ->where('current_stock', '>', 0);


        if ($sort_by == 'latest_product') {
            $query = $query->orderBy('id', 'DESC');
        } elseif ($sort_by == 'product_name') {
            $query = $query->orderBy('product_name', 'ASC');
        } elseif ($sort_by == 'p_low_to_high') {
            $query = $query->orderBy('product_discount', 'ASC');
        } elseif ($sort_by == 'p_high_to_low') {
            $query = $query->orderBy('product_discount', 'DESC');
        } elseif ($sort_by == 'q_low_to_high') {
            $query = $query->orderBy('current_stock', 'ASC');
        } elseif ($sort_by == 'q_high_to_low') {
            $query = $query->orderBy('current_stock', 'DESC');
        }
        return $query;
    }

    public function getAllProducts($category_id)
    {
        $query = Product::where('current_stock', '>', 0)->where('category_id', $category_id);
        return $query;
    }

    public function getProductsColorByProductType($sel_color)
    {
        $query = Product::where('current_stock', '>', 0);

        $query = $query->join('colors', 'colors.id', 'products.color_id')
            ->where('color_id', $sel_color)
            ->select('products.*', 'colors.color_name');


        return $query;
    }

    public function getProductsSortByProductType($sort_by)
    {
        $query = Product::where('current_stock', '>', 0);

        if ($sort_by == 'latest_product') {
            $query = $query->orderBy('id', 'DESC');
        } elseif ($sort_by == 'product_name') {
            $query = $query->orderBy('product_name', 'ASC');
        } elseif ($sort_by == 'q_low_to_high') {
            $query = $query->orderBy('current_stock', 'ASC');
        } elseif ($sort_by == 'q_high_to_low') {
            $query = $query->orderBy('current_stock', 'DESC');
        }

        return $query;
    }
}
