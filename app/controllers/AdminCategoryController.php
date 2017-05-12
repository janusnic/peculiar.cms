<?php

/**
 * Контроллер для управления категориями
 */
class AdminCategoryController extends Controller{

    /**
     * Главная страница управления категориями
     *
     * @return bool
     */
    public function index (){
            $data['categories'] = Category::index();
            $data['title'] = 'Admin Category List Page ';
            $this->_view->render('admin/categories/index',$data);
    }

    /**
     * Удаление категории
     *
     * @param $id категории
     * @return bool
     */
    public function delete ($vars) {

        extract($vars);

        if (isset($_POST['submit'])) {
            Category::delete($id);
            //и перенаправляем на страницу категории
            header('Location: /admin/categories');
        }
        $data['title'] = 'Admin Category Delete Page ';
        $data['category_id'] = $id;

        $this->_view->render('admin/categories/delete', $data);

    }

    /**
     * Добавление категории
     *
     * @return bool
     */
    public function add () {

        if (isset($_POST) and !empty($_POST)) {
            $options['name'] = trim(strip_tags($_POST['name']));
            $options['status'] = trim(strip_tags($_POST['status']));

            Category::add($options);
            header('Location: /admin/categories');
        }
        $data['title'] = 'Admin Category Add Page ';
       
        $this->_view->render('admin/categories/add',$data);
        
    }

    /**
     * Редактирование категории
     *
     * @param $id категории
     * @return bool
     */
    public function edit ($vars) {
        // Получаем список категорий для выпадающего списка
        
        extract($vars);

        $category = Category::get($id);

        //Принимаем данные из формы
        if (isset($_POST) and !empty($_POST)) {
            $options['name'] = trim(strip_tags($_POST['name']));
            $options['status'] = trim(strip_tags($_POST['status']));
            Category::edit($id, $options);

            header('Location: /admin/categories');
        }
        $data['title'] = 'Admin Category Edit Page ';
        $data['category'] = $category;
        
        $this->_view->render('admin/categories/edit',$data);

    }
}
