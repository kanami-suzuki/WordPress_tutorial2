<?php 

//ウィジェット(サイドバー)を表示する
if ( is_active_sidebar('sidebar') ){ //sidebar(function.phpのウィジェットの設定で記述したid名)が有効かどうか
  dynamic_sidebar('sidebar'); //sidebarを表示する
}

?>