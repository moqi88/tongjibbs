<?php
/*

ͬ�۹���BBS��ҳ���Զ������� �� index_pages/index.inc.php �ļ�

======================================================
todo: 

����index_pagesҳ���ļ������д����ݴ���
css�޸ĳɷ���ı���ɫ��
xxx done  xhtml��֤
xxx done (W3C CSS У��ͨ��)css ��֤
��������
telnet�̵̳�����
fterm cterm���ص�����
��վ����ʾ���͡��Ƽ����ӡ��Լ�����Ҫ����ҳ����ʾ������

xxx done ����wFroumѡ����
xxx done ���������Զ�����ѡ����뾭��web��wForum�İ���

��һ��ģ�黯���淶���������ɷ����л�themes

 ----------- by laolin(http://www.laolin.com)
*/

$index_pages='index_pages/';


require("www2-funcs.php");

function link_board($eng,$chs)
{
  //TODO:�Զ���ȡ���İ���
  global $index_pages;
  $burl='frames.html?mainurl=/bbsdoc.php?board=';//�����Ͻ����ֻ����ʾ�������ģ��͸���������õģ�ʵ����goboard�������Ƶ�ַ��
  //'wForum/frames.php?target=board.php%3Fname=';
  $ret= "<h2 class='dotmark'>";
  $ret.= "<a href=\"{$burl}$eng\" onclick=\"return goboard('$eng');\">$chs</a></h2> \n";
  return $ret;
}

require($index_pages."index.inc.php");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"  xml:lang="zh-CN" lang="zh-CN">
<head>
<title>ͬ�ô�ѧBBS��ͬ�۹���վ Tongji BBS Welcome to  bbs.tongji.edu.cn</title>
<meta http-equiv="content-type" content="text/html; charset=gb2312" />
<meta name="author" content="����(http://www.laolin.com)" />
<link href="<?php echo $index_pages ?>index.css" type="text/css" rel="stylesheet" />
<script src="<?php echo $index_pages ?>index.js" type="text/javascript"></script>
<?php if(isset($extra_head)) echo $extra_head; ?>
</head>
<body  onload="document.form1.id.focus()">
<div id="wrapper">
  <div id="container">
  	
     <div id="mainimage">
     <!--��ͼƬǰ��Ӹ���350��div��ʹ��ͼƬδ����ʱ���߶�λ���ȿ��� -->
     <div style="float:left;height:350px;width:1px;"></div>
     <?php 
     if(isset($link_to) && $link_to!='')
       $urlto=$link_to;
     else
       $urlto='/frames.html?mainurl=/bbsdoc.php?board='.$link_board;
       ?>
       <a href="<?php echo $urlto;?>"
       <?php if(!isset($link_to) || $link_to=='')echo "onclick=\"return goboard('{$link_board}')\"";?>
       ><img src="<?php echo $img_src; ?>"  alt="<?php echo $link_tip;?>" title="<?php echo $link_tip;?>" /></a>
     <div style="clear:both;"></div>
     </div><!-- mainimage -->
     
     <?php if(isset($extra_html_after_img)&&$extra_html_after_img!='')
     echo '<div class="cbox">'.$extra_html_after_img.'</div>';?>
     
     <div id="mainform">

 	<form id="form1" name="form1" action="/bbslogin.php" method="post"
 	 onsubmit="return before_submit()">
	  �û�����<input type="text" name="id" id="id" class="u"
	  onmouseover="this.focus()" onfocus="this.select()" 
	  onkeydown="if(event.keyCode==13)event.keyCode=9" />
	  ���룺<input type="password" name="passwd" id="passwd" class="p"  
	   maxlength="39" />
    <input type="radio" class="r" id="we" name="webselect[]"
     value="0"  checked="checked" /><label for="we" title="����WEB,��TELNET�ȽϽӽ�">����web</label>
    <input type="radio" class="r" id="wf" name="webselect[]" no_disabled="disabled"
     value="1" /><label for="wf" title="wForum,��һ��������̳�ȽϽӽ�">wForum</label>
	  <input type="hidden" value="/wForum/frames.php" name="comeurl" />
	  <input type="submit" name="logon" class="b" id="logon" value="��¼" />
	  <input type="button" name="guest" id="guest" value="����"  class="b"
	  onclick="guestlogin()" /> 
	  <input type="button" name="submit2" value="ע��" class="b"
	    onclick="register()" />
  </form>
                
     </div><!-- mainform -->
  
     <div id="errorinfo"></div><!-- ��ʾ��Ϣ -->

     <div id="onlineinfo">Ŀǰ��������<?php echo '['.bbs_getonlinenumber(),']('.bbs_getwwwguestnumber().' WWW GUEST)';?>
     </div><!-- onlineinfo -->

     <div id="maintip">
<?php 
foreach($page_tips as $key=>$val)
{
echo "<div><b>{$key} : </b>$val</div>";
}
?>
     	
     </div><!-- maintip -->
     
     <?php if(isset($extra_html_before_footer)&& $extra_html_before_footer!='' )
     echo '<div class="cbox">'.$extra_html_before_footer.'</div>';?>
     
     <div id="footer">
<hr/>
&copy;1999-2007 ͬ�ô�ѧBBS ͬ�۹���վ TongjiBBS,
All Rights Reserved<h1><a href="http://www.laolin.com" title="author:Laolin" target="_blank">A</a></h1>
<a onclick="" href="#" title="bbs AT mail dot tongji dot edu dot cn">::��ϵվ��::</a>
<a title="ͬ�۹���BBS" onclick="window.external.addFavorite('http://bbs.tongji.edu.cn','ͬ�ô�ѧBBS ͬ�۹���վ');return false" href="#">::�����ղ�::</a>


 <a href="http://www.miibeian.gov.cn" target="_blank" rel="nofollow">��ICP��05013949��</a>
     </div><!-- footer -->
     
     
		
  </div><!-- container -->
</div><!-- end of wrapper -->
</body>
</html>
