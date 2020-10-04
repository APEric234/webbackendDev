<?php 
function component($name,$price){
  $element='
  <div class="item sale1">
    <img src="images/turtle.jpg">
    <ul>
      <li class="name">'.$name .'</li>
      <li class="price">'.$price.'</li>
      <A href="#">Add to cart</a>
    </ul>
  </div>
  ';
  echo $element;
}
function setCookie(){

}