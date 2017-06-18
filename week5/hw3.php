<?php
	echo "每月顯示不同風格的圖片:<br>";
	$today=date("Y-m-d h:i:sa");
	$month=date("m");
	switch($month)
	{
		case 1:
		echo "<img src='http://pic.pimg.tw/quai147/1342543910-2019742691.jpg'>";
		break;
		case 2:
		echo "<img src='http://image.wenweipo.com/2015/03/21/20150321lml0026.jpg'>";
		break;
		case 3:
		echo "<img src='http://i1.w.hjfile.cn/doc/201203/1129619427fbl41729.jpg'>";
		break;
		case 4:
		echo "<img src='http://img.mp.itc.cn/upload/20170331/737c6a8f4d93401b8a18df45afd8e901_th.jpeg'>";
		break;
		case 5:
		echo "<img src='http://www.smxs.com/uploads/allimg/170526/4-1F5261102045I.jpg'>";
		break;
		case 6:
		echo "<img src='http://cc.tvbs.com.tw/img/talk/coverpeople/images/2015-09/2015090411.jpg'>";
		break;
		case 7:
		echo "<img src='http://pic.pimg.tw/mioavian/1312269382-5f215b0c5b30ba595a5f534db30a45aa.jpg'>";
		break;
		case 8:
		echo "<img src='http://www.qqjpg.com/uploads/allimg/160314/1030003121-3.jpg'>";
		break;
		case 9:
		echo "<img src='http://www.gsfcap.com/sites/default/files/%E4%B9%9D%E6%9C%88%E6%9C%BA%E4%BC%9A%E4%BD%95%E5%9C%A8%EF%BC%9F%E9%87%8D%E7%A3%85%E6%95%B0%E6%8D%AE%E5%88%B6%E7%BA%A6%E5%8F%98%E7%9B%98%EF%BC%81.jpg'>";
		break;
		case 10:
		echo "<img src='http://p3.image.hiapk.com/uploads/allimg/150929/7730-1509291540590-L.jpg'>";
		break;
		case 11:
		echo "<img src='https://yowureport.com/wp-content/uploads/2016/02/%E6%9C%89%E7%89%A9%E5%A0%B1%E5%91%8A%E5%85%A7%E5%AE%B9%E9%A0%90%E5%91%8A11%E6%9C%88.png'>";
		break;
		case 12:
		echo "<img src='http://farm2.staticflickr.com/1677/25476003126_ee691f09d7_b.jpg'>";
		break;
	}
	echo "<br>現在日期：".$today;
	$diedaya=strtotime("11:59pm December 31 2017");
	$dieday=date("Y-m-d h:i:sa",$diedaya);
	$dieday1=ceil(($diedaya-time())/60/60/24);
	//$diehour=ceil(($diedaya-time())/60/60/24);
	//$diemin=ceil(($diedaya-time())/60/60/24);
	echo "<br>世界末日日期:".$dieday;
	echo "<br>你剩下".$dieday1."日";
	