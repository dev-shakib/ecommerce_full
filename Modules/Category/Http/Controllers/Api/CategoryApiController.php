<?php

namespace Modules\Category\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Category\Entities\Category;
use Illuminate\Support\Collection;

class CategoryApiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return Category::all()->nest();
    }

    public function featuredCategories()
    {
        // return 'hello';
        return $this->featuredCategoriesSection();
    }

    public function featuredCategoriesSection()
    {
        if (! setting('storefront_featured_categories_section_enabled')) {
            return;
        }

        return [
            'categories' => $this->getFeaturedCategories(),
        ];
    }

    public function getFeaturedCategories()
    {
        $categoryIds = Collection::times(6, function ($number) {
            if (! is_null(setting("storefront_featured_categories_section_category_{$number}_product_type"))) {
                return setting("storefront_featured_categories_section_category_{$number}_category_id");
            }
        })->filter();

        return Category::with('files')
            ->whereIn('id', $categoryIds)
            ->when($categoryIds->isNotEmpty(), function ($query) use ($categoryIds) {
                $query->orderByRaw("FIELD(id, {$categoryIds->filter()->implode(',')})");
            })
            ->get()
            ->map(function ($category) {
                return [
                    'name' => $category->name,
                    'logo' => $category->logo,
                    'slug' => $category->slug
                ];
            });
    }

}
