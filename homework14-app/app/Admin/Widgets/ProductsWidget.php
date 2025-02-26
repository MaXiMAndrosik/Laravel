<?php 

namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductsWidget extends AbstractWidget {

    protected $config = [];

    public function run() {

        $count = Product::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bread',
            'title' => "Счетчик продуктов",
            'text'  => "Количество продуктов: {$count}",
            'button' => [
                'text' => 'Перейти к списку продуктов',
                'link' => '',
                // 'link'  => route('voyager.product.index'),
            ],
            'image' => './storage/products.jpg',
        ]));

    }

    public function shouldBeDisplayed() {
        return true;
    }
    
}