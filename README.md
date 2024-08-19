# Tutorial Laravel 

## Activity 1
•	Take a look of the previous routes. Do you have any comment? We will discuss it the next class.

```bash
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/about', function () {
$data1 = "About us - Online Store";
$data2 = "About us";
$description = "This is an about page ...";
$author = "Developed by: Your Name";
return view('home.about')->with("title", $data1)
  ->with("subtitle", $data2)
  ->with("description", $description)
  ->with("author", $author);
})->name("home.about");

```

En la ruta /about sería mejor mover esa lógica a un controlador, especialmente si en el futuro la lógica se vuelve más compleja. De esta manera, mantengo el código más organizado y fácil de manejar. Un enfoque más limpio sería crear un método en el controlador para manejar esa lógica y solo llamar a ese método desde la ruta.

## Activity 7
•	Try to understand the previous code. Add a new product but leave the name empty (and click send). Then, leave the price empty. Then, enter the two fields.

Al intentar ingresar cualquiera de los dos campos sin el otro, nos dice que son campos obligatorios. Esto es porque en nuestra función de guardar productos nos indica que el nombre y el precio son obligatorios. Al intentar ingresar ambos campos no pasa nada.

