<?php

namespace App\Http\Controllers;

abstract class ProductProvider
{
    abstract public function getProducts(): array;
}

class FireExtinguisherProvider extends ProductProvider
{
    public function getProducts(): array
    {
        return [
            ['name' => 'ABC Dry Powder 6kg', 'description' => 'Multi-purpose fire extinguisher suitable for Class A, B, and C fires'],
            ['name' => 'CO2 5kg', 'description' => 'Carbon dioxide extinguisher ideal for electrical fires'],
            ['name' => 'Foam 9L', 'description' => 'Foam extinguisher perfect for Class A and B fires'],
            ['name' => 'Water 9L', 'description' => 'Water extinguisher for Class A fires only']
        ];
    }
}

class ProductController extends Controller
{
    private ProductProvider $provider;

    public function __construct(ProductProvider $provider = null)
    {
        $this->provider = $provider ?? new FireExtinguisherProvider();
    }

    public function fireExtinguishers()
    {
        $products = $this->provider->getProducts();
        return view('fire-extinguishers', compact('products'));
    }
}