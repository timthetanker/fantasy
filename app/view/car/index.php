<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 22/04/2018
 * Time: 09:26
 */
require VIEW . 'header.php'; ?>
<!-- Creating a sub menu of cars to easily edit, delete etc -->
<!-- #TODO create methods for edit / delete etc for further practise. -->
<a href="/car/index/">View Cars</a>
<a href="/car/edit/">Edit Cars</a>
<a href="/car/delete/">Delete Cars</a>

    <h1>Show Car List</h1>
<?php
if(array_key_exists('cars', $this->view_data)){
    $table = '<table border=1>';
    //IMPORT NOTE @param view_data is in itself an array thus $this->view_data['cars']
    foreach ($this->view_data['cars'] as $car){
        //note the use of explode on $car array containing CSV data from dir data/cars.txt
        $car_info = explode(',',$car);
        $table .= '<tr>';
        foreach ($car_info as $item)
        {
            $table .='<td>' .$item. '</td>';
        }
        $table.='</tr>';
    }
    $table .='</table>';
    echo $table;
}
?>
<?php require VIEW . 'footer.php'; ?>