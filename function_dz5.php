<?php

function all_news ($news){
    if (count ($news)>= 1 ){
        foreach ($news as $one_news) {
         echo $one_news."<br>";   
        }
    }    
}

function print_news_get ($news){
    if (($_GET['id']<(count($news)))){
            echo $news[$_GET['id']];
    }else{
            all_news($news);
    }  
}


function print_news_post ($news){
        if (($_POST['id']<(count($news)))){
            echo $news[$_POST['id']];
    }else{
            all_news($news);
    }     
}