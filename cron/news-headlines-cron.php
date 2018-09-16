<?php 




	file_put_contents("/home/jdberkowitz08/public_html/TVCOM2/CodeIgniter/assets/content/json/us-news.json", fopen("https://newsapi.org/v2/top-headlines?country=us&apiKey=25b8665cf9ac4d879fdeba0749f2d5b8", 'r'));


?>