<?php

/**
 * Class CatalogController
 * Контроллер для работы с каталогом товаров
 */
class CatalogController extends Controller {

    public function __construct(){
        parent::__construct();
    }


    /**
     * Отображает список всех товаров, отсортирован по дате добавления
     *
     * @param int $page текущая страница
     * @return bool
     */
    public function index () {

        //Вывод категорий
        $categories = Category::index();

        $products = Product::index();

        //Общее кол-во товаров (для пагинации)
        //$total = Product::getTotalProducts();

        $data['title'] = 'Welcome To Catalog ';
        //Последние продукты
        $data['products'] = $products;
        $data['categories'] = $categories;
        
        $this->_view->render('catalog/index',$data);
        
    }

}
