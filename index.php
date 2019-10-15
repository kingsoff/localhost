<?php
    echo 'hi all!<br/>';
    $arr =[1, 2, 3, 4, 5];

    $my_variable = 100;//int
    $b = 14.23; //float
    $c = 'lol'; //string
    $arr1 = array('jho nny',2,3,4,5);
    $arr2 =array(
        'name' => 'Vasilii',
        2 => array('school','dsdasd')
    ); //асоциативный массив лол
    echo $arr2[2][0];

$j = true;

$new = 10;
$top = 'alexandr';
    echo $new .' '.$top.'<br/>';
//old


   // if( $age >=  24 )
  //  {
   //     echo 'go';
  //  }
for($i=1; $i<=10; $i++) {
    echo $i;
    if ( $i%2 == 1){
        echo 'Не четное число';
    }else
        {
        echo 'Четное';
    }
    echo '<br>';
}
$seven = array(
    'abc',
    'abd',
    'add',
    'fff'
    );
foreach ($seven as $point) {
    echo $point .'</br>';

}
///// FUNCTION

function my_function($aa, $bb){
    if($aa > $bb ){
        return $aa;
    }else{
        return $bb;
    }
}

$result = my_function(10,20);
echo $result;




?>